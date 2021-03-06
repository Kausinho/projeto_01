<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		Painel::deletar('tb_site.servicos',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-servicos');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('tb_site.servicos',$_GET['order'],$_GET['id']);
	}

	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 4;
	
	$servicos = Painel::selectAll('tb_site.servicos',($paginaAtual - 1) * $porPagina,$porPagina);
	
?>
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Serviços Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Serviço</td>
			<td><i class="fa fa-edit" aria-hidden="true"></i> Editar</td>
			<td><i class="fa fa-trash" aria-hidden="true"></i> Deletar</td>
			<td><i class="fa fa-arrow-up" aria-hidden="true"></i></td>
			<td><i class="fa fa-arrow-down" aria-hidden="true"></i></td>
		</tr>

		<?php
			foreach ($servicos as $key => $value) {

		?>
		<tr>
			<td><?php echo $value['servico']; ?></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-servico?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?order=up&id=<?php echo $value['id']; ?>"><i class="fa fa-angle-up" aria-hidden="true"></i></a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?order=down&id=<?php echo $value['id']; ?>"><i class="fa fa-angle-down" aria-hidden="true"></i></a></td>
		</tr>
		<?php } ?>

	</table>
	</div>

	<div class="paginacao">
		<?php 
			$totalPaginas = ceil(count(Painel::selectAll('tb_site.servicos')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual){
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-servicos?pagina='.$i.'">'.$i.'</a>';
				}else{
					echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-servicos?pagina='.$i.'">'.$i.'</a>';
				}
			}

		 ?>
	</div><!--paginacao-->

</div><!--box-content-->	
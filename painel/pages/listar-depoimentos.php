<?php
	$depoimentos = Painel::selectAll('tb_site.depoimentos');
?>
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Depoimentos Cadastrados</h2>

	<table>
		<tr>
			<td><i class="fa fa-user" aria-hidden="true"></i> Nome</td>
			<td><i class="fa fa-calendar" aria-hidden="true"></i> Data</td>
			<td><i class="fa fa-edit" aria-hidden="true"></i> Editar</td>
			<td><i class="fa fa-trash" aria-hidden="true"></i> Deletar</td>
		</tr>

		<?php
			foreach ($depoimentos as $key => $value) {

		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td><?php echo $value['data']; ?></td>
			<td><a class="btn edit" href=""><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a class="btn delete" href=""><i class="fa fa-times"></i> Excluir</a></td>
		</tr>
		<?php } ?>

	</table>

</div><!--box-content-->	
<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parâmetro ID.');
		die();
	}
?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Depoimento</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				Painel::alert('sucesso','O depoimento foi editado com sucesso!');		
			}	
		?>

		<div class="form-group">
			<label>Nome da pessoa:</label>
			<input type="text" name="nome" value="<?php echo $depoimento['nome']; ?>">
		</div><!--form-group-->
		
		<div class="form-group">
			<label>Depoimento:</label>
			<textarea name="depoimento"></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Data:</label>
			<input formato="data" type="text" name="data">
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="nome_tabela" value="tb_site.depoimentos" />
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>	



</div><!--box-content-->
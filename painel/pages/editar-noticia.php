<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$slide = Painel::select('tb_site.noticias','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parâmetro ID.');
		die();
	}
?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Notícia</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				//Enviei o meu formulário.
				
				$nome = $_POST['titulo'];
				$conteudo = $_POST['conteudo'];
				$imagem = $_FILES['capa'];
				$imagem_atual = $_POST['imagem_atual'];
				if($imagem['name'] != ''){
					//Existe o upload de imagem.
					if(Painel::imagemValida($imagem)){
						Painel::deleteFile($imagem_atual);
						$imagem = Painel::uploadFile($imagem);
						$arr = ['titulo'=>$nome,'conteudo'=>$conteudo,'capa'=>$imagem,'slug'=>$slug,'id'=>$id,'nome_tabela'=>'tb_site.noticias'];
						Painel::update($arr);
						$slide = Painel::select('tb_site.noticias','id = ?',array($id));
						Painel::alert('sucesso','O Slide foi editado junto com a imagem!');	
					}else{
						Painel::alert('erro','O formato da imagem não é válido');
					}
				}else{
					$imagem = $imagem_atual;
					$arr = ['nome'=>$nome,'slide'=>$imagem,'id'=>$id,'nome_tabela'=>'tb_site.noticias'];
					Painel::update($arr);
					$slide = Painel::select('tb_site.noticias','id = ?',array($id));
					Painel::alert('sucesso','O Slide foi editado com sucesso!');
				}

			}
		?>
		
		<div class="form-group">
			<label>Nome:</label>
			<input type="text" name="titulo" required value="<?php echo $slide['titulo']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Conteúdo:</label>
			<textarea name="conteudo"></textarea><?php echo $slide['conteudo']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="imagem"/>
			<input type="hidden" name="imagem_atual" value="<?php echo $slide['capa']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>	



</div><!--box-content-->
<?php
	$url = explode('/',$_GET['url']);
	if(!isset($url[2]))
	{
	$categoria = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` WHERE slug = ?");	
	$categoria->execute(array(@$url[1]));
	$categoria = $categoria->fetch();
?>

<section class="header-noticias">
	<div class="center">
		<h2><i class="fa fa-bullhorn" aria-hidden="true"></i></h2>
		<h2>Acompanhe as úlitmas <b>notícias do portal</b></h2>
	</div><!--center-->	
</section>

<section class="container-portal">
	<div class="center">
		<div class="sidebar">
			<div class="box-content-sidebar">
				<h3><i class="fa fa-search" aria-hidden="true"></i> Realizar uma busca:</h3>
				<form>
					<input type="text" name="parametro" placeholder="O que deseja procurar?" required>
					<input type="submit" name="buscar" value="Pesquisar!">
				</form>
			</div><!--box-content-sidebar-->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-list-alt" aria-hidden="true"></i> Selecione a categoria:</h3>
				<form>
					<select name="categoria">
						<?php
							$categorias = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` ORDER BY order_id ASC");
							$categorias->execute();
							$categorias = $categorias->fetchAll();
							foreach ($categorias as $key => $value) {
						?>
							<option value="<?php echo $value['slug'] ?>"><?php echo $value['nome']; ?></option>
						<?php } ?>
					</select>
				</form>
			</div><!--box-content-sidebar-->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-user" aria-hidden="true"></i> Sobre o autor:</h3>
					<div class="autor-box-portal">
						<div class="box-img-autor"></div>
						<div class="texto-autor-portal text-center">
							<?php
								$infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
								$infoSite->execute();
								$infoSite = $infoSite->fetch();
							?>
							<h3><?php echo $infoSite['nome_autor'] ?></h3>
							<p><?php echo substr($infoSite['descricao'],0,300).'...' ?> <a href="<?php echo INCLUDE_PATH ?>">Ler mais</a></p>
						</div><!--texto--autor-portal-->
					</div><!--autor-box-portal-->	
			</div><!--box-content-sidebar-->	
		</div><!--sidebar-->

		<div class="conteudo-portal">
			<div class="header-conteudo-portal">
				<?php
					if(isset($categoria['nome']) == ''){
						echo '<h2>Visualizando todos os Posts</h2>';
					}else{
						echo '<h2>Visualizando posts em <span>'.$categoria['nome'].'</span></h2>';
					}

					$query = "SELECT * FROM `tb_site.noticias` ";
					if(isset($categoria['nome']) != ''){
						$categoria_id = (int)$categoria['id'];
						$query.="WHERE categoria_id = $categoria[id]";
					}
					$sql = MySql::conectar()->prepare($query);
					$sql->execute();
					$noticias = $sql->fetchAll();
				?>
				
				
			</div><!--header-conteudo-portal-->
			<?php
				foreach($noticias as $key=>$value){
					$sql = MySql::conectar()->prepare("SELECT `slug` FROM `tb_site.categorias` WHERE id = ?");
					$sql->execute(array($value['categoria_id']));
					$categoriaNome = $sql->fetch()['slug'];
			?>
			<div class="box-single-conteudo">
				<h2><?php echo $value['data'] ?> - <?php echo $value['titulo']; ?></h2>
				<p><?php echo $value['conteudo']; ?></p>
				<a href="<?php echo INCLUDE_PATH; ?>noticias/<?php echo $categoriaNome; ?>/<?php echo $value['slug']; ?>">Leia mais</a>
			</div><!--box-single-conteudo-->
			<?php } ?>

			<div class="paginator">
				<a class="active-page" href="">1</a>
				<a href="">2</a>
				<a href="">3</a>
				<a href="">4</a>
			</div><!--paginator-->	
		</div><!--conteudo-portal-->	


		<div class="clear"></div>
	</div><!--center-->	

</section><!--container--portal-->

<?php }else{
	include('noticia_single.php');
} 
?>


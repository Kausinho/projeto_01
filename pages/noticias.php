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
					if($categoria['nome'] == ''){
						echo '<h2>Visualizando todos os Posts</h2>';
					}else{
						echo '<h2>Visualizando posts em <span>'.$categoria['nome'].'</span></h2>';
					}
				?>
				
				
			</div><!--header-conteudo-portal-->
			<?php
				for($i = 0; $i < 5; $i++){
			?>
			<div class="box-single-conteudo">
				<h2>19/09/2008 - Conheça os eleitos para ga...</h2>
				<p>Praesent vel ante in enim maximus convallis eu non ante. Pellentesque faucibus nisl placerat, malesuada metus et, porttitor lorem. Sed dui dolor, maximus vitae viverra non, facilisis a dolor. Maecenas quis tempus neque, nec volutpat urna. In sed tellus urna. Etiam malesuada pellentesque urna vitae maximus. Vestibulum rutrum porta magna, ac tempus dolor maximus eu. Ut dictum leo a nisi efficitur mattis. Quisque mollis felis enim, id aliquet odio dapibus vitae.</p>
				<a href="<?php echo INCLUDE_PATH; ?>noticias/esportes/nome-do-post">Leia mais</a>
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


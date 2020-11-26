<?php
	$url = explode('/',$_GET['url']);
	if(!isset($url[2])){

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
					<input type="text" name="busca" placeholder="O que deseja procurar?" required>
					<input type="submit" name="acao" value="Pesquisar!">
				</form>
			</div><!--box-content-sidebar-->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-list-alt" aria-hidden="true"></i> Selecione a categoria:</h3>
				<form>
					<select name="categoria">
						<option value="esportes">Esportes</option>
						<option value="esportes">Geral</option>
					</select>
				</form>
			</div><!--box-content-sidebar-->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-user" aria-hidden="true"></i> Sobre o autor:</h3>
					<div class="autor-box-portal">
						<div class="box-img-autor"></div>
						<div class="texto-autor-portal text-center">
							<h3>Klaussio Brunow Carvalho</h3>
							<p>Proin sed purus sed nibh bibendum sollicitudin eget in ipsum. Quisque ex purus, sollicitudin vitae imperdiet sed, luctus facilisis ligula. Quisque leo nunc, vulputate non metus eget, tristique porta odio. Quisque nec vehicula justo. Donec dignissim mauris vitae hendrerit cursus. Ut gravida iaculis erat at auctor. Aenean at erat consectetur dui elementum luctus.</p>
						</div><!--texto--autor-portal-->
					</div><!--autor-box-portal-->	
			</div><!--box-content-sidebar-->	
		</div><!--sidebar-->

		<div class="conteudo-portal">
			<div class="header-conteudo-portal">
				<!--<h2>Visualizando todos os Posts</h2>-->
				<h2>Visualizando posts em <span>Esportes</span></h2>
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


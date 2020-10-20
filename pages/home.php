<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/img1.jpg');" class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/img2.jpg');" class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/img3.jpg');" class="banner-single"></div><!--banner-single-->
		<div class="overlay"></div><!--overlay-->
		<div class="center">
		<form method="post">
			<h2>Qual o seu melhor e-mail?</h2>
			<input type="email" name="email" required />
			<input type="hidden" name="identificador" value="form_home" />
			<input type="submit" name="acao" value="Cadastrar!">
		</form>
		</div><!--center-->
		<div class="bullets"></div><!--bullets-->
	</section><!--banner-principal-->

	<section class="descricao-autor">
		<div class="center">
		<div class="w50 left">
		<h2>Guilherme C. Grillo</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur tempor nunc sit amet scelerisque. Morbi pellentesque nulla id elit maximus, vitae ornare justo fringilla. Ut ut ligula eu lorem consequat dignissim. Integer ac interdum diam. Nunc bibendum enim eu nibh iaculis, a pharetra tortor accumsan. Praesent fringilla convallis est sed varius. Etiam pulvinar tempor ipsum eget condimentum. Nulla pharetra vitae metus quis malesuada. Proin vulputate justo eget turpis tempor varius. Cras at neque non tortor pellentesque congue nec at ligula.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur tempor nunc sit amet scelerisque. Morbi pellentesque nulla id elit maximus, vitae ornare justo fringilla. Ut ut ligula eu lorem consequat dignissim. Integer ac interdum diam. Nunc bibendum enim eu nibh iaculis, a pharetra tortor accumsan. Praesent fringilla convallis est sed varius. Etiam pulvinar tempor ipsum eget condimentum. Nulla pharetra vitae metus quis malesuada. Proin vulputate justo eget turpis tempor varius. Cras at neque non tortor pellentesque congue nec at ligula.</p>
		</div><!--w50-->
		<div class="w50 left">
			<!--Pegar imagem depois-->
			<img class="rigth" src="<?php echo INCLUDE_PATH; ?>images/bg1.jpg">
		</div><!--w50-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->

	<section class="especialidades">
		<div class="center">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
					<h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
					<h4>CSS3</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget placerat sem. Mauris et vestibulum enim. Proin urna nulla, hendrerit efficitur odio in, blandit porttitor mi. Suspendisse leo nunc, molestie a ipsum non, venenatis pellentesque arcu. Nunc sagittis ornare nisi.</p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidade">
					<h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
					<h4>HTML5</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget placerat sem. Mauris et vestibulum enim. Proin urna nulla, hendrerit efficitur odio in, blandit porttitor mi. Suspendisse leo nunc, molestie a ipsum non, venenatis pellentesque arcu. Nunc sagittis ornare nisi.</p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidade">
					<h3><i class="fa fa-code" aria-hidden="true"></i></h3>
					<h4>JavaScript</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget placerat sem. Mauris et vestibulum enim. Proin urna nulla, hendrerit efficitur odio in, blandit porttitor mi. Suspendisse leo nunc, molestie a ipsum non, venenatis pellentesque arcu. Nunc sagittis ornare nisi.</p>
			</div><!--box-especialidade-->
			
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center-extras">
			<div id="depoimentos" class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet pellentesque nisl. Morbi odio diam, scelerisque eu finibus nec, tempor ac ipsum. Quisque auctor felis sit amet nibh feugiat dignissim. Praesent vel odio rhoncus, vulputate."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet pellentesque nisl. Morbi odio diam, scelerisque eu finibus nec, tempor ac ipsum. Quisque auctor felis sit amet nibh feugiat dignissim. Praesent vel odio rhoncus, vulputate."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet pellentesque nisl. Morbi odio diam, scelerisque eu finibus nec, tempor ac ipsum. Quisque auctor felis sit amet nibh feugiat dignissim. Praesent vel odio rhoncus, vulputate."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			<div id="servicos" class="w50 left servicos-container"></div>
				<h2 class="title">Serviços</h2>
				<div class="servicos">
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet pellentesque nisl. Morbi odio diam, scelerisque eu finibus nec, tempor ac ipsum. Quisque auctor felis sit amet nibh feugiat dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere nulla vitae placerat ultricies. Proin turpis tortor, ultricies ac nisi id, porta finibus nunc. Nullam.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet pellentesque nisl. Morbi odio diam, scelerisque eu finibus nec, tempor ac ipsum. Quisque auctor felis sit amet nibh feugiat dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere nulla vitae placerat ultricies. Proin turpis tortor, ultricies ac nisi id, porta finibus nunc. Nullam.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet pellentesque nisl. Morbi odio diam, scelerisque eu finibus nec, tempor ac ipsum. Quisque auctor felis sit amet nibh feugiat dignissim.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere nulla vitae placerat ultricies. Proin turpis tortor, ultricies ac nisi id, porta finibus nunc. Nullam.</li>
				</ul>
				</div><!--servicos-->	
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->
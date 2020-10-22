<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css" rel="stylesheet" />
</head>
<body>

<div class="menu">
	<div class="menu-wraper">
			<div class="box-usuario">
				<?php
					if($_SESSION['img'] == ''){
				?>
					<div class="avatar-usuario">
						<i class="fa fa-user"></i>
					</div><!--avatar-usuario-->
				<?php }else{ ?>
					<div class="imagem-usuario">
						<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
					</div><!--avatar-usuario-->
				<?php } ?>
				<div class="nome-usuario">
					<p><?php echo $_SESSION['nome']; ?></p>
					<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
				</div><!--nome-usuario-->
			</div><!--box-usuario-->
		<div class="items-menu">
			<h2>Cadastro</h2>
			<a href="">Cadastrar Depoimentos</a>
			<a href="">Cadastrar Serviços</a>
			<a href="">Cadastrar Slides</a>
			<h2>Gestão</h2>
			<a href="">Listar Depoimentos</a>
			<a href="">Listar Serviços</a>
			<a href="">Listar Slides</a>
			<h2>Administração do painel</h2>
			<a href="">Editar Usuário</a>
			<a href="">Adicionar Usuários</a>
			<h2>Configuração Geral</h2>
			<a href="">Editar</a>
		</div><!--items-menu-->
	</div><!--menu-wraper-->
</div><!--menu-->

<header>
	<div class="center">
		<div class="menu-btn">
			<i class="fa fa-bars"></i>
		</div><!--menu-btn-->
		<div class="loggout">
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-window-close"></i> <span>Sair</span> </a>
		</div><!--loggout-->

		<div class="clear"></div>
	</div><!--center-->
</header>

<div class="content">	

	<div class="box-content left w100">
		<!--TROCAR POR CÓDIGO PHP-->
		<h2><i class="fa fa-home"></i> Painel de Controle - <?php echo $nomeEmpresa ?></h2>

		<div class="box-metricas">
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Usuários Online</h2>
					<p>10</p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Total de Vistas</h2>
					<p>100</p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
			<div class="box-metrica-single">
				<div class="box-metrica-wraper">
					<h2>Vistas de Hoje</h2>
					<p>3</p>
				</div><!--box-metrica-wraper-->
			</div><!--box-metrica-single-->
		</div><!--box-metricas-->

	</div><!--box-content-->

	<!--
	<div class="box-content left w100">

	</div>

	<div class="box-content left w50">

	</div>

	<div class="box-content rigth w50">

	</div>
	-->

	<div class="clear"></div>	

</div><!--content-->
<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>
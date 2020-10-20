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
	<link href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css" rel="stylesheet">
</head>
<body>
<div class="menu">
	
</div><!--menu-->
<header>
	<div class="center">
		<div class="loggout">
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-window-close"></i></a>
		</div><!--loggout-->

		<div class="clear"></div>
	</div><!--center-->
</header>
</body>
</html>
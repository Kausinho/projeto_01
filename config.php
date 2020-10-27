<?php

	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		if($class == 'Email'){
			require_once('classes/phpmailer/PHPMailerAutoload.php');
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH','http://localhost/projeto_01/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

	
	//Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','projeto_01');

	//Constantes para o painel de controle
	define('NOME_EMPRESA','Danki Code');

	//Funções
	function pegaCargo($cargo){
		$arr = [
			'0' => 'Nomral',
			'1' => 'Sub Administrador',
			'2' => 'Administrador'];

			return $arr[$cargo];
	}
?>
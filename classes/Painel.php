<?php

	class Painel
	{
	
		public static function logado(){
			return isset($_SESSION['login']) ? true : false;
		}

		public static function loggout(){
			session_destroy();
			header('Location: '.INCLUDE_PATH.'painel/');
		}

		public static function carregarPagina(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
				}else{
					//Página não existe.
					header('Location: '.INCLUDE_PATH.'painel/');
				}
			}else{
				include('pages/home.php');
			}
		}

		public static function listarUsuariosOnline(){
			self::limparUsuariosOnline();
			$sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
			$sql->execute();
			return $sql->fetchAll();
		}

		public static function limparUsuariosOnline(){
			$date = date('Y-m-d H:i:s');
			$sql = Mysql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
		}

		public static function Alert($tipo,$mensagem){
			if($tipo == 'sucesso'){
				echo '<div class="box-alert sucesso"><i class="fa fa-check"></i> '.$mensagem.'</div>';
			}else if($tipo == 'erro'){
				echo '<div class="box-alert erro"><i class="fa fa-times"></i> '.$mensagem.'</div>';
			}
		}

	}

?>
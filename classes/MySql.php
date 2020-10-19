<?php
	class MySql{

		private static $pdo;

		public static function conectar(){
			if(isset(self::$pdo)){
				return self::$pdo;
			}else{
				self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD);
			}
		}

	}
?>
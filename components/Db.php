<?php

class Db {

	public static function getConnection() {
		// Connection params
		include_once ROOT.'/config/dbparams.php';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset"; // способ подключения - DSN Data Source Name
		// опции подключения		
		$opt = array ( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
						PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, 
						PDO::ATTR_EMULATE_PREPARES => false );

		$my_pdo = new PDO($dsn, $user, $pass, $opt); // создаём Объект класса PDO (подключения для доступа к базе данных)

		return $my_pdo;
	}
	
}

?>
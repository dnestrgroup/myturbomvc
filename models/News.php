<?php
// include_once ROOT.'/components/Db.php';

class News {	

	public static function getNewsItemById($id) {
		// Запрос к базе данных
		/* В запрос вставляем переменные, следовательно используем подготовленные выражения для безопасности */

   		$id = intval($id);

   		if ($id) {
   			$my_pdo = Db::getConnection();
   			// Функция вызывается из файла components\Db.php, имеем доступ отсюда, 
   			// т.к. функция объявлена как "public static" и доступна из любой точки скрипта

			$MTS = $my_pdo->prepare('SELECT email FROM `user` WHERE id=:id');
			$MTS->bindValue(':id', $id);
			$MTS->execute();

			$row_from_table_users = $MTS->FETCH();
			//while ($row_from_table_users = $MTS->FETCH()) {
    		//	echo $row_from_table_users->email.'<br>';
			//}
   		}
   		return $row_from_table_users;
	}

	
	public static function getNewsList() {
   		$my_pdo = Db::getConnection(); // Запрос к базе данных
   		// Функция вызывается из файла components\Db.php, имеем доступ отсюда, 
   		// т.к. функция объявлена как "public static" и доступна из любой точки скрипта

		$sql = "SELECT * FROM `user`"; // Выбираем все адреса из таблицы
		$stmt = $my_pdo->query($sql);
		
		$array_mail = array(); // инициализируем переменную типа массив
		$i=0; // обнуляем счетчик для массива
		while ($row_from_table_users = $stmt->FETCH(PDO::FETCH_OBJ)) { // в цикле наполняем массив выбранными адресами
    		$i++;
			$array_mail[$i] = $row_from_table_users->email;
		}

		echo "breakpoint-1";

		return $array_mail; // возвращаем этот массив

		echo "breakpoint-2";
	}

}

?>
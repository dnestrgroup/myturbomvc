<?php
// FRONT Controller

// 1. Common settings
//ini_set('display_errors', 1); /* отображение ошибок */
//error_reporting(E_ALL); 	  /* на время разработки сайта, потом отключить */

// 2. Include system files
define('ROOT', dirname(__FILE__)); /* определили константу ROOT, это путь к главному файлу index.php */

require_once (ROOT.'/components/Router.php'); /* подключаем файл с описанием класса Router */
require_once (ROOT.'/components/Db.php'); /* подключаем файл с описанием класса Db и параметрами подключения к БД */

// 3. execute Router
$router = new Router();
$router->run();

?>
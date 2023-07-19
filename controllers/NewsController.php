<?php

//чтобы испольозвать модель News в этом контроллере, нужно подключить файл модели 
include_once ROOT.'/models/News.php';

class NewsController {

	// просмотр списка новостей
	public function actionIndex () {
		$newsList = array();
		// функция вызывается из модели models\News.php
		// в переменную $newsList получаем массив новостией из Базы Данных (из Модели)
		// News.php - файл с классом модели News, getNewsList() - статический метод модели, => обращаемся через двоеточие не создавая объекта класса
		$newsList = News::getNewsList();
		// подключаем вьюшку (дизайн-страницу) внутри которой распечатаем этот массив новостей
		require_once(ROOT.'/views/news/index.php');
		return true;
	}

	// просмотр одной новости
	public function actionView ($params) { // аргумент получили из Роутера
		$id = $params[0]; // Id новости
		if ($id) {
			$newsItem = News::getNewsItemById($id); // в переменную $newsItem получаем одну новость по Id из Базы Данных (из Модели)
			require_once(ROOT.'/views/news/view.php'); // подключаем вьюшку (дизайн-страницу) внутри которой распечатаем эту одну новость
		}
		return true;
	}
	
}


?>
<?php
class Controller{
	//метод создани объекта модели и подключения к ней 
	protected function model($model){					//метод запроса к модели (для всех наследников). Аргументом выступает название модели.			
		require_once 'app/models/'.$model.'.php';	//подключение модели, от которой ожидается принятие объекта	
		return new $model();									//создание объекта и его возврат на основе класса - модели. Скобки не обязательны. 
	} 

	//функция вызова страницы на экран
	protected function view($view, $data = []){	//метод запроса к модели (для всех наследников+). Первый аргумент страницы, второй - доп.параметры в форме массива. Пустой по-умалчанию. 
		require_once 'app/views/'.$view.'.php';//вывод на экран файла по адресу. $view = 'home/index' - эот аргументы вводимые при вызове метода в контроллере "Home". 
	} 
}
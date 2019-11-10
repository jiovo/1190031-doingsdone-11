<?php

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

// простой массив:
$projects = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];

//Двумерный с ключом
$tasks = [ [
	'task' => "Собеседование в IT компании", 
	'date_complite' => "01.12.2019",
	'category' => "Работа",
	'completed' => 0,
],
[
	'task' => "Выполнить тестовое задание",
	'date_complite' => "25.12.2019",
	'category' => "Работа",
	'completed' => 0
],
[
	'task' => "Сделать задание первого раздела", 
	'date_complite' => "21.12.2019",
	'category' => "Учеба",
	'completed' => 1
],
[
	'task' => "Встреча с другом", 
	'date_complite' => "22.12.2019",
	'category' => "Входящие",
	'completed' => 0
],
[
	'task' => "Купить корм для кота", 
	'date_complite' => null,
	'category' => "Домашние дела",
	'completed' => 0
],
[
	'task' => "Заказать пиццу", 
	'date_complite' => null,
	'category' => "Домашние дела",
	'completed' => 0
] ];

?>
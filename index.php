<?php

require_once('includes/function.php');

require_once('includes/data.php');

$main_content = include_template('main.php', [
	'show_complete_tasks' => $show_complete_tasks,
    'projects' => $projects,
    'tasks' => $tasks
	]
);

$layout_content = include_template('layout.php', [
	'content' => $main_content,
	'title' => "Дела в порядке",
	'user_name' => "Константин"
	]
 );
 
print($layout_content);

?>
<?php

require_once('includes/function.php');

require_once('includes/date.php');

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

/**
 * Проверяет переданную дату на соответствие формату 'ГГГГ-ММ-ДД'
 *
 * Примеры использования:
 * is_date_valid('2019-01-01'); // true
 * is_date_valid('2016-02-29'); // true
 * is_date_valid('2019-04-31'); // false
 * is_date_valid('10.10.2010'); // false
 * is_date_valid('10/10/2010'); // false
 *
 * @param string $date Дата в виде строки
 *
 * @return bool true при совпадении с форматом 'ГГГГ-ММ-ДД', иначе false
 */
function is_date_valid(string $date) : bool {
    $format_to_check = 'Y-m-d';
    $dateTimeObj = date_create_from_format($format_to_check, $date);

    return $dateTimeObj !== false && array_sum(date_get_last_errors()) === 0;
}

?>
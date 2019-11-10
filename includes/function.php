<?php

// считаем кол-во задач

function countProjeckts(array $tasks, $list) {
	$count = 0;
	foreach ($tasks as $cat) {
	if ($cat['category'] == $list) {
		$count++;
		}
	}
	return $count;
}



/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}


?>
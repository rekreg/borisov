<?php
// Установка локали и выбор значений даты
//setlocale(LC_ALL, "russian");
//var_dump(setlocale(LC_ALL, 'ru_RU.UTF-8'));
setlocale(LC_ALL, 'ru_RU.UTF-8');
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');


//
$hour = (int) strftime('%H');   
$welcome = "Доброй ночи";

if($hour >= 6 and $hour < 12):
	$welcome = "Доброе утро";
elseif($hour >= 12 and $hour < 18):
	$welcome = "Добрый день";
elseif($hour >= 18 and $hour < 23):
	$welcome = "Добрый вечер";
endif;

	
// Инициализация массива меню
		
		$leftMenu = [
			['link' => 'Домой', 'href' => 'index.php'],
			['link' => 'О нас', 'href' => 'about.php'],
			['link' => 'Контакты', 'href' => 'contact.php'],
			['link' => 'Таблица умножения', 'href' => 'table.php'],
			['link' => 'Калькулятор', 'href' => 'calc.php'],
			
		];
		

?>
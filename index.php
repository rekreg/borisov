<?php
// Вложения в файл
require_once("inc/lib.inc.php");

set_error_handler("myError");
require_once("inc/data.inc.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Сайт нашей Школы</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>

	<div id="header">
		<!-- Верхняя часть страницы -->
		<?php 
		require_once("inc/top.inc.php");
		?>
		<!-- Верхняя часть страницы -->
	</div>

	<div id="content">
		<!-- Заголовок -->
		<h1><?=$welcome?>, гость!</h1>
		<!-- Заголовок -->
		<!-- Область основного контента -->
		<?php 
		require_once("inc/index.inc.php");
		?>
		<!-- Область основного контента -->
	</div>
	<div id="nav">
		<!-- Навигация -->
		<?php 
		require_once("inc/menu.inc.php");
		?>
		<!-- Навигация -->
	</div>
	<div id="footer">
		<!-- Нижняя часть страницы -->
		<?php 
		require_once("inc/bottom.inc.php");
		?>
		<!-- Нижняя часть страницы -->
	</div>
</body>

</html>

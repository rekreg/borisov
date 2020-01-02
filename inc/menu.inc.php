<h2>Навигация по сайту</h2>
<!-- Меню -->
<?php
if(!drawMenu($leftMenu))
	trigger_error("Проблема с отрисовкой менюшки", E_USER_ERROR);
else 
	echo drawMenu($leftMenu);
?>
<!-- Меню -->

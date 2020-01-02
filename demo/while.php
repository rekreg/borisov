<?php

$var = "HELLO";

$i = 0;
$last_letter = strlen($var);
while($i < $last_letter):
	echo $var{$i++}."<br>";
endwhile;


?>
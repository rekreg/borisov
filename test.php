<?php

declare(strict_types=1); 

function area_of_disk(int $r):int {
	//return "fl";
	return 3.14 * $r * $r;
}


function area_of_ring($big, $small) {
	$b = area_of_disk($big);
	$s = area_of_disk($small);
	return $b - $s ;
}


echo area_of_disk("45");


/*

function say_hello($name="Guest", $h=3) {
	echo "<h{$h}>Hello, {$name}!</h{$h}>";
}


say_hello("John");
say_hello("Mike");

$str = "say_hello";
$str("Guest", 3);

*/


/*
$nums = [1,2,3,4];

echo "<pre>";
print_r($nums);
echo "</pre>";

foreach($nums as &$val):
	$val *= 10;
endforeach;

echo "<pre>";
print_r($nums);
echo "</pre>";
*/


/*$user = [
	"name" => "John",
	"login" => "root",
	"password" => "1234",
	"age" => 25
];



foreach( $user as $k=>$v ):

	echo "$k : $v <br>";
	

endforeach;*/




?>

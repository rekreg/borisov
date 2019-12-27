<?php


function say_hello($name, $h) {
	echo "<h{$h}>Hello, {$name}!</h{$h}>";
}


say_hello("John", 1);
say_hello("Mike", 2);

$str = "say_hello";
$str("Guest", 3);



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

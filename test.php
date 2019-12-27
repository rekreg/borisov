<?php

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

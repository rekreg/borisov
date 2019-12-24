<?php

$user = [
	"name" => "John",
	"login" => "root",
	"password" => "1234"
];
//echo $user[0];

$user["age"] = 25;
$user[] = true;


echo "<pre>";
	print_r($user);
echo "</pre>";



?>

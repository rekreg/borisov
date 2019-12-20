<?php
$name = "Андрей";
$age = "35";

/*echo "Меня зовут $name, и мне ребятишки $age лет";*/

$test = 'This is a test.';

echo $test; 
echo "<hr>";
echo "А это первый символ переменной тест: ".$test{0};

echo "А это последний символ строки: (". $test{ strlen($test) - 1}. ")";

$test{ strlen($test) - 1} = "!";
echo "<hr>";
echo "А это измененный последний символ строки: (". $test{ strlen($test) - 1}. ")";
echo "<hr>";
echo $test;
 

?>
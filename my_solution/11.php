<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php

$values = [];

echo 'Please enter values seperated by spaces: ';

$userInput = trim(fgets(STDIN));
$values = explode(' ',$userInput);
$total = 0;

foreach ($values as $number) {
$total += $number;


} 

$averageNum = $total / count($values);


echo 'The average of the value is ' .
     number_format((float) $averageNum, 2, '.', '');



?>
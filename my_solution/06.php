<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
 <?php
$number = readline ('Enter a number: ');

$index = 0;

$triangularNum = 0;

for  ($index = 0; $index < $number; $index++) {
    $triangularNum += $index + 1;

    echo "$triangularNum\n";
}
 ?>
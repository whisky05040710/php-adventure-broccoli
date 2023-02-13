<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
 <?php
 $userInput = readline('Enter a number: ');
 $total = 0;

 for ($i = 0; $i < strlen ($userInput); $i++) {
    $total += (int) $userInput[$i];
 }

 echo 'The sum of the digits is: ' . $total;
 
 ?>
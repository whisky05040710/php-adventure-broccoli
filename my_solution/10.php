<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
 <?php

function median($numbers)

{

sort($numbers);
$length = count($numbers);

if ($length % 2 == 0) {
$median = ($numbers[$length / 2 - 1] + $numbers[$length / 2] ) / 2;

}else{

$median = $numbers [($length - 1) /2];

}

return $median;

}

    echo 'Enter the array of number seperated by spaces; ';
    
$user_input = trim(fgets(STDIN));
$numbers_arr = explode(' ', $user_input);

$median_num = median($numbers_arr);

    echo 'The median of the number is ' . $median_num . "\n";

?>
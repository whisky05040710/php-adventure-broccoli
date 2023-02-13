<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
$string = readline ('Please enter a string: ');

$reversed =strrev($string);

if ($string == $reversed) {
    echo "Yes, $string is a palindrome. ";
} else {
    echo "No, $string is a palindrome.";
}

?>
<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
 <?php

function countWords($string)

{
    $text = explode(' ', $string);
    $wordNumber = count($text);
    return $wordNumber;
    
    }
    
    $userInput = readline('Enter some words: ');
    
    $wordNumber = countWords($userInput);
    
    echo 'The number of word is: ' . $wordNumber;

?>
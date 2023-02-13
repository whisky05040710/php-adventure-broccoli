<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
 <?php

$input_string = readline('Please enter a words:' );

$output_string = remove_vowels($input_string);

    echo $output_string;

function remove_vowels($string)

{

$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$string = str_replace($vowels, '', $string);
return $string;

}

?>
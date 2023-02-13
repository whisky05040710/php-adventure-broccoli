<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
 $words = array(readline("Enter a Word:"));

 $longest_word = $words[0];
 foreach ($words as $word) {
     if (strlen($word) > strlen($longest_word)) {
         $longest_word = $word;
     }
 }
 echo 'The Longest word is: ' . $longest_word. "\n";
 ?>
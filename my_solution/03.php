<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
$input = readline ('Enter a charater: ');
$characters = str_split($input);
$charFrequency =[];

foreach ($characters as $character ){
    if (array_key_exists($character, $charFrequency)) {
        $charFrequency[$character]++;
    } else {
        $charFrequency[$character] =1;
    }
}

foreach ($charFrequency as $character => $frequency) {
    echo "$character: $frequency\n";
}
?>
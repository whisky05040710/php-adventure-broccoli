<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php

function generatePassword($length)

{

$alphabet = 
'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+=';
$pwd = '';

for ($i = 0; $i < $length; $i++) {
$pwd .= $alphabet[rand(0, strlen($alphabet) -1)];

}

echo 'The password is: ' . $pwd;

}

echo generatePassword(15);

?>
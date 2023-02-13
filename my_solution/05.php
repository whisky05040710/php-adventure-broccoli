<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
 <?php 

$userInput = readline('Enter a array number: ');
$nums = explode(' ', $userInput);
$total = 0;

foreach($nums as $num) {
  $total += $num;
}
echo "The sum of the numbers is: " . $total;

?>
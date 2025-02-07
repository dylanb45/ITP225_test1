<?php

$num1 = readline("Enter in a number: ");
$num2 = readline("Enter in a number: ");
$num3 = readline("Enter in a number: ");
$num4 = readline("Enter in a number: ");

$answer = $num1 + $num2 - $num3 / $num4;
echo "Your answer is: " . $answer;
echo "\n";
$answer = $num1 + $num2 * $num3 - $num4;
echo "Your answer is: " . $answer;

?>
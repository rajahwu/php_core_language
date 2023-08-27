<h1>Number Guessing Game</h1>
Create a way to give feedback to the users, such that:
<ul>
    <li>If they guess correctly, you tell them</li>
    <li>If they guess incorrectly, you tell them if it was too high or too low</li>
    <li>As a bonus, also check to see if the guessed number is out of range</li>
</ul>

<?php
$min = 1;
$max = 50;
$guess = 20;
$num = 16;

$num = rand($min, $max);
if ($guess < $min || $guess > $max) {
    echo $guess . ' out of range';
} else if ($guess < $num) {
    echo $guess . ' in less than the target number ' . $num;
} else if ($guess > $num) {
    echo $guess . ' is greater than the target number ' . $num;
} else {
   echo $guess . ' is the target number';
}
?>
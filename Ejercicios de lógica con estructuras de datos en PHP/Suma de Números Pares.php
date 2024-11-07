<?php
$numbers = [2, 4, 6];
$sum = array_sum(array_filter($numbers, fn($num) => $num % 2 == 0));
echo $sum; 
?>

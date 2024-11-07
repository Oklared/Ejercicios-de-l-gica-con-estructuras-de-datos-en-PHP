<?php
function reverseArray(array $arr): array {
    $reversed = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $reversed[] = $arr[$i];
    }
    return $reversed;
}

$numbers = [1, 2, 3, 4, 5];
$reversedNumbers = reverseArray($numbers);

print_r($reversedNumbers);
?>


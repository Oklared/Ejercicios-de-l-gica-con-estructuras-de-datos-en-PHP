<?php
function characterFrequency(string $str): array {
    $frequency = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $frequency[$char] = ($frequency[$char] ?? 0) + 1;
    }
    return $frequency;
}

$text = "hi";
print_r(characterFrequency($text));
?>

<?php
function printPyramid(int $rows): void {
    for ($i = 1; $i <= $rows; $i++) {
        echo str_repeat(" ", $rows - $i); 
        echo str_repeat("*", 2 * $i - 1); 
        echo "\n"; 
    }
}

printPyramid(5);
?>

<?php
include "function/Finder.php";

$nums = [];
for ($i = 0; $i < 100; $i++) {
    $nums[$i] = rand(1, 101);
}
foreach ($nums as $num) {
    echo $num . " ";
}
$minValue = findMin($nums);
$maxValue = findMax($nums);
echo "</br>";
echo "The mininum value is: " . $minValue . "<br>";
echo "The maximum value is: " . $maxValue;
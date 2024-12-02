<?php

$list1 = [3, 4, 2, 1, 3, 3];
$list2 = [4, 3, 5, 3, 9, 3];

$dict = array_count_values($list2);
$sim = 0;

foreach ($list1 as $value) {
    $score = 0;
    if (array_key_exists($value, $dict)) {
        $score = ($value * $dict[$value]);
    }
    $sim += $score;
}

echo $sim;
?>

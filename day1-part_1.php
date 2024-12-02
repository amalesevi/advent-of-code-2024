<?php

$list1 = [3, 4, 2, 1, 3, 3];
$list2 = [4, 3, 5, 3, 9, 3];

$diff = 0;
sort($list1);
sort($list2);

foreach ($list1 as $key=>$value) {
    $diff += abs($value - $list2[$key]);
}

echo($diff);
?>

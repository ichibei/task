<?php

function sum_int($a) {
    $sum = 0;
    foreach ($a as $element)
    if (is_int ($element)) {
        $sum += $element;
    } elseif (is_array ($element)) { 
        $sum += sum_int($element);
    } 
    return $sum;
}
$a = [1, 2, 5, '$a1'=>[1,2,3,"string1", 2.5, "string2"], 'world'=>[1,2,3,5.7,"string3",2.6,"string4"],7,9,];
echo sum_int($a)."\n";
echo array_sum($a)."\n";
print_r ($a);
?>
<?php
function sum_int($array1) {
    $sum = 0;
    foreach ($array1 as $element)
    if (is_numeric ($element)) {
        $sum += $element;
    } elseif (is_array ($element)) {
        $sum += sum_int($element);
    } 
    return $sum;
}
$array1 = [1, 2, 5, '$a1'=>[1,2,3,"string1", 2.5, "string2"], 'world'=>[1,2,3,5.7,"string3",2.6,"string4"],7,9,];
echo sum_int($array1)."\n";
echo array_sum($array1)."\n";
print_r ($array1);
?>
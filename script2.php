<?php
function min_value_arr($array1) {
    $min_value = reset($array1);
    foreach ($array1 as $value)
    if (is_numeric ($value) && $min_value > $value) {        
        $min_value = $value;
    } elseif (is_array ($value) && $min_value > min_value_arr($value)) {
        $min_value = min_value_arr($value);
    }
    return $min_value;
}
$array1 = [18, 0.05, 5, $a1=[5,2, 0.0001, $a1=>[1,"string1", 0.25, 30, "string2"],"string1", 0.5, "string2"], 'world'=>[5,12,3,5.7,"string3",2.6,"string4"], 0.02, 7,9,];
echo (min_value_arr($array1));
?>
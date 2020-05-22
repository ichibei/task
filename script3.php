<?php
function max_value_arr($array1) {
    $max_value = reset($array1);
    foreach ($array1 as $value)
    if (is_numeric ($value) && $max_value < $value) {
        $max_value = $value;
    } elseif (is_array ($value) && $max_value < max_value_arr($value)) {
        $max_value = max_value_arr($value);
    }
    return $max_value;
}
$array1 = [18, 2, 5, $a1=[5,2,'$a4'=>[1,"string1", 22, 7.3, "string2"],"string1", 2.5, "string2"], 'world'=>[5,2,3,5.7,"string3",2.6,"string4"],7,9,];
echo (max_value_arr($array1));
?>
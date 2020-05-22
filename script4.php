<?php
function count_element ($array1, $element) {    
    $quantity=0;
    foreach ($array1 as $value)    
    if ($element==$value) {
        $quantity++;   
    } elseif (is_array ($value)) {
        $quantity += count_element ($value, $element);  
    }
    return $quantity;
}
$array1 = [18, 2, 5, $a1=[5,2,'$a4'=>[1, 2, "string1", 2.5, "string2"],"string1", 2.5, "string2"], 'world'=>[5,2,3,5.7,"string3",2.6,"string4"],7,9,];
$element=2;
echo (count_element($array1, $element));
?>
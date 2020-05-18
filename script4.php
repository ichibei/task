<?php
function count_element ($a) {
    $b=2; //заданное значение
    $i=0;
    foreach ($a as $value)    
    if ($b==$value) {
        $i++;   
    } elseif (is_array ($value)) {
        $i += count_element ($value);
          
    }
       return $i;
}
$a = [18, 2, 5, $a1=[5,2,'$a4'=>[1, 2, "string1", 2.5, "string2"],"string1", 2.5, "string2"], 'world'=>[5,2,3,5.7,"string3",2.6,"string4"],7,9,];

//print_r (int_num($a));
echo (count_element($a));
?>
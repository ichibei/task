<?php
/**
 * Try to read PSR-1, PSR-2
 * https://www.php-fig.org/psr/psr-1/
 * https://www.php-fig.org/psr/psr-2/
 * In russian:
 * https://svyatoslav.biz/misc/psr_translation/#_PSR-1
 * https://svyatoslav.biz/misc/psr_translation/#_PSR-2
 */

function int_num($a, $new_arr = Array()) {
    /**
     * Try to write function without using function min
     */
    foreach ($a as $value)
    if (is_numeric ($value)) {
        $new_arr[]=$value;
    } elseif (is_array ($value)) {
        $new_arr[]=min(int_num($value));
    }
      return $new_arr;
}
$a = [18, 2, 5, $a1=[5,2,'$a1'=>[1,"string1", 30, "string2"],"string1", 0.5, "string2"], 'world'=>[5,2,3,5.7,"string3",2.6,"string4"],7,9,];
print_r (int_num($a));
echo (min(int_num($a)));
?>
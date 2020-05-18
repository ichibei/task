<?php
/**
 * Try to read PSR-1, PSR-2
 * https://www.php-fig.org/psr/psr-1/
 * https://www.php-fig.org/psr/psr-2/
 * In russian:
 * https://svyatoslav.biz/misc/psr_translation/#_PSR-1
 * https://svyatoslav.biz/misc/psr_translation/#_PSR-2
 */
function sum_int($a) {
    $sum = 0;
    foreach ($a as $element)
    /**
     * It will be better to use is_numeric here instead of is_int
     */
    if (is_int ($element)) {
        $sum += $element;
    }
    elseif (is_array ($element)) {
        $sum += sum_int($element);
    } 
    return $sum;
}
$a = [1, 2, 5, '$a1'=>[1,2,3,"string1", 2.5, "string2"], 'world'=>[1,2,3,5.7,"string3",2.6,"string4"],7,9,];
echo sum_int($a)."\n";
echo array_sum($a)."\n";
print_r ($a);
?>
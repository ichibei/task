<?php
/**
 * Try to read PSR-1, PSR-2
 * https://www.php-fig.org/psr/psr-1/
 * https://www.php-fig.org/psr/psr-2/
 * In russian:
 * https://svyatoslav.biz/misc/psr_translation/#_PSR-1
 * https://svyatoslav.biz/misc/psr_translation/#_PSR-2
 */

/**
 * Try use better variables naming (not a, b, c, d, etc.)
 */
function count_element ($a) {
    /**
     * Comments in code with non english language is bad practice
     */
    /**
     * $b should be in function arguments
     */
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
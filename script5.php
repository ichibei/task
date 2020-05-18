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

function rept($a, $t=array(), $n=array()) {
    $i=0;
    $b=0;
    while ($i < count($a)) {
        $k=0;
        $b=$a[$i];
        foreach ($a as $val) {
            if ($b===$val && !(in_array ($b,$n,true))) {
                $k++;
            }
        }
        if ($k>2) {
        $n[]=$b;
        $t[]=['qua'=>$k, 'val'=>$b];
        }
        $i++;
    }
    return $t;
}           
$a=[2,1,1,2.7,1,1,2.7,1,2.7,3,3,3,3];
//$a[0] = 1;
//$a[1] = 3;
//$a[2] = 5;
//var_dump(count($a));
//echo ($a[0]);
print_r (rept($a));
?>
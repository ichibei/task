<?php    
function rept($a, $t=array()) {
    $i=0;
    $b=0;
    while ($i < count($a)) {
        $k=0;
        $b=$a[$i];
        foreach ($a as $val) {
            if ($b===$val && !(in_array ($b,$t,true))) {
                $k++;
            }
        }
        if ($k<2) {
        $t[]=$b;
        }
        $i++;
    }
    return $t;
}           
$a=[2,1,1,2.7,1,1,2.9,1,2.1,3,3,3,3];
//$a[0] = 1;
//$a[1] = 3;
//$a[2] = 5;
//var_dump(count($a));
//echo ($a[0]);
print_r (rept($a));
?>
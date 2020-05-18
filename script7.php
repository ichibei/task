<?php    
function year($a) {
    if (($a%4) || !($a%100) && ($a%400)) {
                $b='FALSE';
            }
            else {
                $b='TRUE';
            }
    return $b;
}
//$a=1700;  
$a=date("Y");         
echo (year($a));
?>
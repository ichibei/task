<?php    
function Is_it_a_year_leap($year) {
    if (($year%4) || !($year%100) && ($year%400)) {
                $leap_year = true;
            }
            else {
                $leap_year = false;
            }
    return $b;
}
//$year=1700;  
$year = date("Y");         
echo (Is_it_a_year_leap($year));
?>
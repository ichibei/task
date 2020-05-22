<?php    
function repeating_elements($array1, $array_of_repeating_values=array(), $temp_array=array()) {
    $key=0;
    $value_to_compare=0;
    while ($key < count($array1)) {
        $quantity = 0;
        $value_to_compare = $array1[$key];
        foreach ($array1 as $value) {
            if ($value_to_compare===$value && !(in_array ($value_to_compare,$temp_array,true))) {
                $quantity++;
            }
        }
        if ($quantity>2) {
        $temp_array[]=$value_to_compare;
        $array_of_repeating_values['№' .$number+=1]=['quantity'=>$quantity, 'value'=>$value_to_compare];
        }
        $key++;
    }
    return $array_of_repeating_values;
}           
$array1=[2,1,1,2.7,1,1,2.7,1,2.7,3,3,3,3];
//$a[0] = 1;
//$a[1] = 3;
//$a[2] = 5;
//var_dump(count($a));
//echo ($a[0]);
print_r (repeating_elements($array1));
?>
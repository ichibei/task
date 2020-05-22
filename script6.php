<?php    
function unique_elements($array1, $array_of_unique_values = array()) {
    $key=0;
    $value_to_compare=0;
    while ($key < count($array1)) {
        $quantity = 0;
        $value_to_compare = $array1[$key];
        foreach ($array1 as $value) {
            if ($value_to_compare === $value && !(in_array ($value_to_compare,$array_of_unique_values,true))) {
                $quantity++;
            }
        }
        if ($quantity < 2) {
        $array_of_unique_values[] = $value_to_compare;
        }
        $key++;
    }
    return $array_of_unique_values;
}           
$array1=[2,1,1,2.7,1,1,2.9,1,2.1,3,3,3,3];
print_r (unique_elements($array1));
?>
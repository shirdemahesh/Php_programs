<?php 

$arr = array(1,2,3,4,5,4,1,6,7);
$uniqueArray = array_filter($arr, function($value,$key)use($arr){
    return array_search($value,$arr)===$key;
    },ARRAY_FILTER_USE_BOTH);
    print_r(array_values($uniqueArray));

?>
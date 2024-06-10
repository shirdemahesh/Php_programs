<?php 

$arr = array(1,2,3,4,5,4,1,6,7);
$length = sizeof($arr);

for($i=0; $i<$length; $i++){
    for($j=$i+1; $j<$length; $j++){
        if($arr[$i]==$arr[$j])
            echo "$arr[$j] ";
    }
}

?>
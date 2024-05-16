<?php

$num = 666666;
$sum = 0;

while($num>0){
    $sum+=$num%10;
    $num=$num/10;
}
// echo $num ." of Sum is ".$sum;
echo "Sum is ".$sum;

?>
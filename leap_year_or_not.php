<?php

$year = 2024;

if(($year % 400 == 0) || (($year % 100 != 0)&&($year % 4 == 0))){
    echo $year. " This Year is Leap Year";
}else{
    echo $year. " This Year is Not Leap Year";
}


?>
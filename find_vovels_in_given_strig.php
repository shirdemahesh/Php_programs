<?php

$name = strtolower("Mahesh TUKARAM Shirde");
$len = strlen($name);
for($i=0;$i<$len;$i++){
    if($name[$i] == 'a' || $name[$i] == 'e' || $name[$i] == 'i' || $name[$i] == 'o' || $name[$i] == 'u'){
        echo ($name[$i]." ");
    }
}


?>
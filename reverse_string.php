<?php

// $num = "Shirde Mahesh";
// $len = strlen($num);
// $str = "";

// for($i=$len-1;$i>=0;$i--){
//     $str.=$num[$i];
// }
// echo "Reversed String: ".$str;



// $num = 1234; 

// $reversedNumber = strrev((string)$num);

// echo $reversedNumber;


$num = 987654321;
$revnum = 0;
while($num>=1){
    $rem = $num % 10;
    $revnum = ($revnum * 10)+ $rem;
    $num = $num/10;
}
echo "Reverse is : $revnum";

?>
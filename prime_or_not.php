<?php

// $num = 11;
// $flag = 0;

// for ($i = 2; $i < $num; $i++) {
//     if ($num % $i == 0) {
//         $flag = 1;
//         break;
//     }
// }
// if ($flag == 1) {
//     echo $num ." is Not Prime Number";
// } else {
//     echo $num ." is Prime Number";
// }


function isprime($n){
    
    for($i=1;$i<=sqrt($n);$i++){

        if($n%$i==0){
            return 0;
        }

    }
    return 1;
}
if(isprime(11)==1){
    echo "PRime";
}else{
    echo "not";

}
?>
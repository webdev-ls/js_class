<?php 
session_start();
if(!session_id()){
    session_start();
}

print_r($_SESSION); exit;
// variables in php
// $var = "Learning Sessions";
// echo $var;
// if($var == "Learning Sessions"){
//     echo "dsvsdfbsb";
// }
?>
<?php

// star pattern

// for($i=0;$i<5;$i++){
//     for($j=0;$j<5;$j++){
//         if($j<$i){
//             echo "#&nbsp;";
//         }else{
//             echo "*&nbsp;";
//         }
//     }
//     echo "<br>";
// }
$n = 15;
$half = (int) ($n/2);
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($i==($half) || $j == ($half) || ($j >= $half && $i == 0) || ($i <= $half && $j == 0) || ($j <= $half && $i == $n-1) || ($i >= $half && $j == $n-1)){
            echo "*&nbsp;";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

$arr = ["Hell000o", 12, 'd'];

$Hello = "Hello Learning Sessions";

$string = '$arr[0]';

// eval('$arr = ["Hell000o", 12, \'d\'];');
// $statement = 'return '.$string.';';
// $statement = "return $string;";
// echo eval($statement);

// print_r($$string)

?>
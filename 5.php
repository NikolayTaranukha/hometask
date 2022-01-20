<?php
$a = [-5, 9, 3, 4, 2, 7, 15, 6, 22];
function myMin($myArray){
$min = $myArray[0];
for ($i=0;$i<count($myArray);$i++){
    if ($min>$myArray[$i]){
        $min=$myArray[$i];
    }
    }
    return $min;
}
function myMax($myArray){
    $max = $myArray[0];
    for ($i=0;$i<count($myArray);$i++){
        if ($max<$myArray[$i]){
            $max=$myArray[$i];
        }
    }
    return $max;
}
echo myMin($a) . " Минимальное значение";
echo "<br>";
echo myMax($a) . " Максимальное значение"

?>
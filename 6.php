<?php
function myPlus($a,$b){
    $c=0;
    $c=$a+$b;
    return $c;
}
function myMinus($a,$b){
    $c=0;
    $c=$a-$b;
    return $c;
}
function myYmnog($a,$b){
    $c=0;
    $c=$a*$b;
    return $c;
}
function myDel($a,$b){
    if ($b==0){
        echo 'Нельзя';
    }
    else {
        $c = $a / $b;
        echo $c;
    }
}
echo myDel(10,0);
?>
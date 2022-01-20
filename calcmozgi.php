<?php
$ravno=$_GET['3'];
$a=$_GET['1'];
$b=$_GET['2'];
switch($ravno){
    case "+":
            $c=0;
            $c=$a+$b;
            echo $c;
            break;
    case "-":
            $c=0;
            $c=$a-$b;
            echo $c;
            break;
    case "/":
            if ($b==0){
                echo 'Нельзя';}
            else {
                $c = $a / $b;
                echo $c;
            }
            break;
    case "*":
                $c=0;
                $c=$a*$b;
                echo $c;
                break;
}

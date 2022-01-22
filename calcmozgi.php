<?php
$ravno=$_GET['operation'];
$a=$_GET['first'];
$b=$_GET['second'];
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

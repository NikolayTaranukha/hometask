<?php
$ravno=$_GET['myOperation'];
$a=$_GET['myFirst'];
$b=$_GET['mySecond'];
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

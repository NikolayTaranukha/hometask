<?php
/*$lenght = $_GET("light");*/
/*$vivod = $_GET("operation");*/
/*switch ($vivod){
    case "VARCHAR":
        echo VARCHAR($lenght);
        break;
    case "INTEGER":
        echo INTEGER($lenght);
        break;
}*/
function VARCHAR($lenght)
{
    $simv = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomslovo = '';
    $i = 0;
    while ($i < $lenght) {
        $random = $simv[mt_rand(0, (strlen($simv)) - 1)];
        $randomslovo = $randomslovo . $random;
        $i++;
    }
    return ($randomslovo);
}

function INTEGER($lenght)
{
    $intravno = '';
    $i = 0;
    while ($i < $lenght) {
        $random = mt_rand(0, 9);
        $intravno .= (int)$random;
        $i++;
    }
    return $intravno;
}

function FLOAT($lenght)
{
    $intravno = '';
    $i = 0;
    /*    $znak=10;*/
    /*    while ($i<strlen($lenght)){
            $znak *= 10;
            $i++;
            }
            return $znak;
        }*/
    while ($i < $lenght) {
        $random = mt_rand(0, 9);
        $intravno .= $random;
        $i++;
    }
    return $intravno / 10;
}

var_dump(FLOAT(5));
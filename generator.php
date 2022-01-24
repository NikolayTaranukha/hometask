<?php
$lenght = 3;
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

var_dump(INTEGER($lenght));



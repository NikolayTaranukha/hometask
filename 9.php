<?php
function myLen($a)
{
    $i = null;
    while ($a[$i]) {
        $i++;
    }
    return $i;
}

var_dump(myLen('Big.Dick'));
?>
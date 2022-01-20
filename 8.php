<?php
$myAvto = ['BMW', 'Mini','Rolls-Royce', 'Mercedes-Benz' ,'Suzuki','Peugeot', 'Citroen', 'DS', 'Opel'];
$a='e';
/*foreach ($myAvto as $marka) {
    if ($marka ! = 'e') {
        echo $marka . ' ' . '<br>';
    }
}*/
echo '<br>';
for($i=0, $b=count($myAvto);$i<=$b;$i++){
    if(preg_match('/E/i',$myAvto[$i]))
    echo $myAvto[$i].' '.'<br>';
}

/*$i=0;
while ($myAvto[$i]){
    echo $myAvto[$i].' '.'<br>';
    $i++;
}*/

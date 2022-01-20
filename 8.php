<?php
$myAvto = ['BMW', 'Mini','Rolls-Royce', 'Mercedes-Benz' ,'Suzuki','Peugeot', 'Citroen', 'DS', 'Opel'];
foreach ($myAvto as $marka){
    echo $marka . ' '. '<br>';
}
echo '<br>';
for($i=0, $b=count($myAvto);$i<=$b;$i++){
    echo $myAvto[$i].' '.'<br>';
}
$i=0;
while ($myAvto[$i]){
    echo $myAvto[$i].' '.'<br>';
    $i++;
}

?>
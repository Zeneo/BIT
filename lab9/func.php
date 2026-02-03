<?php

$arr = [];
$arrElements = rand(100, 150);

$sum = 0;

for ($i = 0; $i < $arrElements; $i++) {
    
    $numbers = rand(1, 25);
    $arr[] = $numbers;

    $sum += $numbers;

};

echo '<pre/>';
print_r($arr);

echo '<br/><br/>';

echo 'Suma: ' . $sum;


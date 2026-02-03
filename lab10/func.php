<?php

$arr = [];

$arrElements = rand(50, 100);


for ($i = 0; $i < $arrElements; $i++) {

    $randomLetter = chr(rand(ord('A'), ord('z')));
    $arr[] = $randomLetter;

};

echo '<pre/>';

print_r($arr);

echo '<br/><br/>';


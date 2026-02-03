<?php

$var1 = 'Labas';
var_dump($var1);
echo '<br/>';

$var2 = 59;
var_dump($var2);
echo '<br/>';

$var3 = 59.8;
var_dump($var3);
echo '<br/>';

$var4 = true;
var_dump($var4);
echo '<br/>';

$arr = [];
array_push($arr, $var2, $var3);
echo '<pre/>';
var_dump($arr);
echo '<br/>';

require __DIR__ . '/User.php';

$user1 = new User('Bebras', 12);

// echo '<pre/>';

var_dump($user1);
echo '<br/>';

$var5 = NULL;
var_dump($var5);

echo '<br/><hr/><br/>';





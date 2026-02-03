<?php

/*
3. Sukurkite PHP failą, kuriame būtų po vieną kintamajį kiekvieno tipo ir jį atvaizduotu taip per "var_dump()":
string(6) "Vardas"
int(59)
float(59.8)
bool(true)
array(2) { [0]=> int(59) [1]=> float(59.8) }
NULL 
*/

$string = 'Vardas';
var_dump($string);
echo '<br/>';

$int = 59;
var_dump($int);
echo '<br/>';

$float = 59.8;
var_dump($float);
echo '<br/>';

$bool = true;
var_dump($bool);
echo '<br/>';

$array = [$int, $float];
var_dump($array);
echo '<br/>';

class User {
    public function __construct(
        public string $name,
        public int $age
    ) {}
};

$object = new User('Jonas', 44);
var_dump($object);

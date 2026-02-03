<?php
echo "<pre>";

$string = "Vardas";
$int = 59;
$float = 59.8;
$bool = true;
$array = [59, 59.8];
class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$object = new User("Paulius", 38);
$null = null;

var_dump($string);
var_dump($int);
var_dump($float);
var_dump($bool);
var_dump($array);
var_dump($object);
var_dump($null);

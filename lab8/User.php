<?php

class User {

    public $name;
    public $age;

    public function __construct($vardas, $amzius)
    {
        $this->name = $vardas;
        $this->age = $amzius;
    }

};
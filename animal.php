<?php

class Animal
{
    public $legs = 2;
    public $cold_blooded = false;
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function getLegs()
    {
        return $this->legs;
    }
    function getCold_blooded()
    {
        return $this->cold_blooded;
    }
}

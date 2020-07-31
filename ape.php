<?php

class Ape extends Animal
{
    public $sounds = "Auooo";

    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setYell($sounds)
    {
        $this->sounds = $sounds;
    }
    function yell()
    {
        return $this->sounds;
    }
}

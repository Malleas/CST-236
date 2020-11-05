<?php


abstract class Animal
{
    public string $name;
    public string $color;

    public function __construct($n, $c){
        $this->name = $n;
        $this->color = $c;
    }

    abstract function talk();

    abstract function doTrick();

}
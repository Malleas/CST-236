<?php
require_once "Animal.php";

class Dog extends Animal
{

    function talk()
    {
        echo "Woof Woof!!<br>";
    }

    function doTrick()
    {
       echo "Jumps, fetches and does dog stuff<br>";
    }
}
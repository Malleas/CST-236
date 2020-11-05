<?php
require_once "Animal.php";

class Cat extends Animal
{

    function talk()
    {
        echo "Meow!<br>";
    }

    function doTrick()
    {
        echo "Sleeps all day...as cats have no tricks<br>";
    }
}
<?php
require_once "SuperHero.php";

class Superman extends SuperHero
{

    public function __construct($name, $health)
    {
        parent::__construct($name, $health);
    }
}
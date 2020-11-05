<?php
require_once "SuperHero.php";

class Superman extends SuperHero
{
    public function __construct($heroName, $heroHealth)
    {
        parent::__construct($heroName, $heroHealth);
    }
}
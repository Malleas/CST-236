<?php
require_once "Batman.php";
//require_once "Superman.php";
require_once "SuperHero.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$batman = new Batman("Batman", rand(1,1000));




echo $batman->health;




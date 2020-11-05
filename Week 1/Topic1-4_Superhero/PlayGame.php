<?php
require_once "Batman.php";
require_once "Superman.php";
require_once "SuperHero.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$batman = new Batman("Batman", rand(1,1000));
$superman = new Superman("Superman", rand(1,1000));

echo "Batman's starting health is: ".$batman->health."<br>";
echo "Superman's starting health is: ".$superman->health."<br>";

while (!$batman->isDead && !$superman->isDead){
    $superman->attack($batman);
    $batman->attack($superman);
}

//$batman->attack($superman);








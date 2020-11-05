<?php
require_once "Dog.php";
require_once "Cat.php";

$dog1 = new Dog("Fido", "Brown");
$cat1 = new Cat("Halo", "Orange");

$dog1->talk();
$cat1->talk();

$dog1->doTrick();
$cat1->doTrick();
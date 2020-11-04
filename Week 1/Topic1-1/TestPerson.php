<?php
require_once "Person.php";

$person = new Person("Matt");
$person->walk();

$person2 = new Person("Bob");
$person2->formalGreeting();

$person3 = new Person("Sue");
$person3->spanishGreeting();

$person3->login("Matt", "password");
$person3->login("Bob", "Password1");

?>
<?php
require_once "People.php";
require_once "Student.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$newGuy1 = new People;
$newGuy2 = new Student;

$newGuy1->growOlderBy(2);
$newGuy2->growOlderBy(2);

echo "The age of newGuy1 is: ".$newGuy1->age."<br>";
echo "The age of newGuy2 is: ".$newGuy2->age."<br>";
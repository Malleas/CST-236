<?php
require_once "RaceCar.php";

$tirePressure1 = array(32,32,32,32);
$tirePressure2 = array(32,32,32,32);
$tirePressure3 = array(32,15,32,32);

$raceCar1 = new RaceCar(1, 4, $tirePressure1);

$raceCar1->startCar();
$raceCar1->stopCar();
$raceCar1->startCar();

$raceCar2 = new RaceCar(2, 4, $tirePressure2);

$raceCar2->startCar();
$raceCar2->stopCar();

$raceCar3 = new RaceCar(1, 4, $tirePressure3);

$raceCar3->startCar();
$raceCar3->stopCar();



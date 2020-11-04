<?php
require_once "Tire.php";

class RaceCar
{
    private int $engine = 0;
    private int $tires = 0;
    private bool $start = false;
    private bool $stop = true;
    private bool $isCar = false;
    private int $speed = 0;
    private int $tireCheck = 0;

    public function __construct($engineNumber, $tires, array $tirePressure)
    {
        $this->engine = $engineNumber;
        $this->tires = $tires;
        for ($i = 0; $i < $tires; $i++) {
            $tire = new Tire();
            $tire->fillTire($tirePressure[$i]);
            if (!$tire->isFlat) {
                $this->tireCheck++;
                echo "Tire inflated to 32psi successfully<br>";
            } else {
                echo "Tire pressure added was insufficient, must be 32<br>";
                echo "Pressure inputed == " . $tirePressure[$i] . "<br>";
                return;
            }

        }

        if ($this->engine == 1 && $this->tires == 4 && $this->tireCheck == $this->tires) {
            $this->isCar = true;
            echo "Your car has the proper amount of parts, car successfully created<br>";
        } else {
            echo "Your car is missing parts, please ensure it has 4 tires and 1 engine<br>";
            echo "Tires == " . $tires . "<br>";
            echo "Engines == " . $engineNumber . "<br>";
        }

    }

    public function startCar()
    {
        if ($this->isCar) {
            $this->start = true;
            $this->stop = false;
            $this->speed = rand(1, 100);
            echo "Car started and speeds off at " . $this->speed . " VROOOOOOM!!!!<br>";
        } else {
            echo "Your car didn't start, it may be missing parts<br>";
        }
    }

    public function stopCar()
    {
        if ($this->isCar && $this->start) {
            $this->start = false;
            $this->stop = true;
            $this->speed = 0;
            echo "Car stopped<br>";
        } else if ($this->isCar && !$this->start) {
            echo "Car is currently not running, you need to start it before you can stop it<br>";
        } else {
            echo "There's no car to stop, it may be missing parts<br>";
        }

    }




}
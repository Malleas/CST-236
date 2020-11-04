<?php


use RaceCar;

class Tire extends RaceCar
{
    public bool $isFlat;
    private int $psi;

    public function __construct()
    {
        $this->psi = 0;
        $this->isFlat = true;
    }

    public function fillTire($psi){
        $this->psi = $psi;
       if($this->psi == 32){
           $this->isFlat = false;
       }

    }
}
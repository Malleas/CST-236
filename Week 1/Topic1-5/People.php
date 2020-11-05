<?php


class People
{

    public string $name = "";
    public int $age = 0;

    final public function growOlderBy($year){
        $this->age = $this->age + $year;
    }
}
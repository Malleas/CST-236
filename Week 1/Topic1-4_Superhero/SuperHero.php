<?php


class SuperHero
{
    public string $name = "";
    public int $health = 0;
    public bool $isDead = false;

    public function __construct($heroName, $heroHealth){
        $this->name = $heroName;
        $this->health = $heroHealth;
    }

    public function attack($SuperHero){
        $attackDamage = rand(1,10);
        $this->determineHealth($attackDamage);

    }

    public function determineHealth($attackDamage){
        $this->health = $this->health - $attackDamage;
        if($this->health <= 0){
            $this->health = 0;
            $this->isDead = true;
            $this->isDead($attackDamage);

        }else{
           $this->isDead($attackDamage);
        }
    }

    public function isDead($attackDamage){
        if($this->isDead){
            echo $this->name."'s health is 0!!!<br>";
            echo $this->name." is dead!!!<br>";
        }else{
            echo $this->name." takes ".$attackDamage." but fights on!!<br>";
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }
}
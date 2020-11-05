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

    public function attack(SuperHero $superHero){
        $attackDamage = rand(1,10);
        $this->determineHealth($superHero, $attackDamage);

    }

    public function determineHealth(SuperHero $superHero, $attackDamage){
        $superHero->health = $superHero->health - $attackDamage;
        if($superHero->health <= 0){
            $superHero->health = 0;
            $superHero->isDead = true;
            $superHero->isDead($superHero, $attackDamage);

        }else{
           $superHero->isDead($superHero, $attackDamage);
        }
    }

    public function isDead(SuperHero $superHero, $attackDamage){
        if($superHero->isDead){
            echo $superHero->name."'s health is 0!!!<br>";
            echo $superHero->name." is dead!!!<br>";
        }else{
            echo $superHero->name." takes ".$attackDamage." but fights on!!<br>";
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
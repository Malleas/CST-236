<?php


class Person
{
    private string $name = "";
    private string $address = "";
    private bool $activeStatus = false;
    private string $birthday = "";
    private string $userName = "";
    private string $password = "";

    public function __construct($name)
    {
    echo "Hello, my name is " .$name . "<br>";
    $this->name = $name;
    $this->userName = "Matt";
    $this->password = "password";
    $this->address = "123 Hill St";
    $this->birthday = "01/02/1982";
    $this->activeStatus = true;
    }

    public function walk(){
        echo "I'm walking......"."<br>";
    }

    public function formalGreeting(){
        echo "Good day to you sir, you can address me as " .$this->name . "<br>";
    }

    public function spanishGreeting(){
        echo "Buenos dias Senior, me llamo es " .$this->name . "<br>";
    }

    public function login($a, $b){
        if($a == $this->userName && $b == $this->password){
            echo $this->name . " has been logged in successfully<br>";
        }else{
            echo "Login failed.  That doesn't seem quite right<br>";
        }
    }
}

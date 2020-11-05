<?php


class User
{
public string $username;
public string $password;
public static int $minPassLength = 5;

public static function validatePassword($password){
    if(strlen($password) > self::$minPassLength){
        return true;
    }else{
        return false;
    }
}
}
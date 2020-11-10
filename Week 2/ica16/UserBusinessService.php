<?php

require_once "UserDataService.php";
class UserBusinessService
{

    public function findByFirstName($n){
        $users = Array();
        $service = new UserDataService();
        $users = $service->findByFirstname($n);
        return $users;
    }
}
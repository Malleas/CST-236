<?php
include_once "header.php";
require_once "Autoloader.php";

class SecurityService
{
    private $username;
    private $password;

    public function __construct($u, $p){
        $this->username = $u;
        $this->password = $p;
    }

    public function authUser($u, $p){
        $db = new Assignment2bDatabase();
        $conn = $db->getConnection();
        $query = "Select * from CST236Milestone.Users where Username ='$u' and Password = '$p'";
        $results = $conn->query($query);

        if($results->num_rows == 1){
            return true;
        }else {
            return false;
        }
    }

}
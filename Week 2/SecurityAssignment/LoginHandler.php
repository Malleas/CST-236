<?php
require_once "header.php";
require_once "Autoloader.php";
require_once "securePage.php";

$username = $_POST['username'];
$password = $_POST['password'];

$service = new SecurityService($username, $password);

$loginSuccess = $service->authUser($username, $password);

if ($loginSuccess){
    $_SESSION['principal'] = true;
   include "LoginSuccess.php";
}else{
    $_SESSION['principal'] = false;
    include "LoginFailed.php";
}
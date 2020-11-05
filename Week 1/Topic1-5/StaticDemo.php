<?php
require_once "User.php";

$pw = "asdfasdf";

if(User::validatePassword($pw)){
    echo "Password is long enough!<br>";
}else{
    echo "Your password was not long enough, must be at least 5 characters long<br>";
}
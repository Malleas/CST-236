<?php

require_once "Database.php";

class UserDataService
{

    public function findByFirstName($n)
    {
        $db = new Assignment2bDatabase();
        $query = "SELECT * FROM users WHERE FIRST_NAME like '%$n%'";
        $conn = $db->getConnection();
        $results = $conn->query($query);

        if ($results->num_rows == 0) {
            return null;
        } else {
            $users_array = array();
            while ($user = $results->fetch_assoc()) {
                array_push($users_array, $user);
            }
            return $users_array;
        }


    }

}
<?php
require_once 'Week5DB.php';

class SavingAccountDataService
{
    private $conn;

    /**
     * SavingAccountDataService constructor.
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function getBalance(){
        $query = "select BALANCE from SAVING";
        $results = $this->conn->query($query);

        if ($results->num_rows == 0) {
            return -1;
        } else {
            $row = $results->fetch_assoc();
            $balance = $row['BALANCE'];
            return $balance;
        }
    }

    public function updateBalance($balance){
        $query = "Update SAVING set BALANCE = '$balance' where ID = 1";

        if ($this->conn->query($query)){
            return 0;
        }else {
            return -1;
        }

    }

}
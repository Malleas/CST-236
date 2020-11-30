<?php
require_once 'Week5DB.php';

class CheckingAccountDataService
{
    private $conn;

    /**
     * CheckingAccountDataService constructor.
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function getBalance(){

        $query = "select BALANCE from CHECKING";
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
        $query = "Update CHECKING set BALANCE = $balance";

        if ($this->conn->query($query)){
            return 1;
        }else {
            return 0;
        }

    }

}
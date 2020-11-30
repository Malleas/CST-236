<?php
require_once 'CheckingAccountDataService.php';
require_once 'SavingAccountDataService.php';
require_once 'Week5DB.php';

class BankBusinessService
{

    public function getCheckingBalance()
    {
        $db = new Week5DB();
        $conn = $db->getConnection();

        $checkingService = new CheckingAccountDataService($conn);
        $balance = $checkingService->getBalance();

        $conn->close();
        return $balance;
    }

    public function getSavingsBalance()
    {
        $db = new Week5DB();
        $conn = $db->getConnection();

        $savingService = new SavingAccountDataService($conn);
        $balance = $savingService->getBalance();

        $conn->close();
        return $balance;
    }

    public function transaction(){
        $db = new Week5DB();
        $conn = $db->getConnection();
        $checkingService = new CheckingAccountDataService($conn);
        $savingService = new SavingAccountDataService($conn);


        $conn->autocommit(FALSE);

        $conn->begin_transaction();
        $checkingBalance = $checkingService->getBalance();
        $checkingUpdate = $checkingService->updateBalance($checkingBalance - 100);
        $savingsBalance = $savingService->getBalance();
        $savingsUpdate = $savingService->updateBalance($savingsBalance + 100);

        if($checkingUpdate == 1 && $savingsUpdate == 1){
            $conn->commit();
        }else{
            $conn->rollback();
            echo "There was a problem with your transaction <br>";
        }

    }

}
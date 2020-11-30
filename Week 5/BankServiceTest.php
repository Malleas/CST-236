<?php

require_once 'BankBusinessService.php';

$service = new BankBusinessService();

echo "---CHECKING---<br>";
echo "Current Checking account balance: ".$service->getCheckingBalance()."<br>";
echo "---SAVINGS---<br>";
echo "Current Savings account balance: ".$service->getSavingsBalance()."<br>";
$service->transaction();
echo "---CHECKING---<br>";
echo "Current Checking account balance: ".$service->getCheckingBalance()."<br>";
echo "---SAVINGS---<br>";
echo "Current Savings account balance: ".$service->getSavingsBalance()."<br>";



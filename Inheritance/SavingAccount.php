<?php

include "BankAccount.php";

class SavingAccount extends BankAccount 
{
    private float $interestRate;

    public function setInterestRate(float $interestRate) 
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest() 
    {
        // calculator interest
        $interest = $this->interestRate * $this->getBalance();

        // deposit interest to the balance
        $this->deposit($interest);
    }
}

$account = new SavingAccount;

$account->deposit(100);

$account->setInterestRate(0.05);

$account->addInterest();

echo $account->getBalance();
?>
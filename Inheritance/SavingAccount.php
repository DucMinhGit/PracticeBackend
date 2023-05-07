<?php

include_once "BankAccount.php";

class SavingAccount extends BankAccount 
{
    public function __construct(private float $balance, private float $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

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
?>
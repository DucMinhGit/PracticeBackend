<?php

class BankAccount
{
    public function __construct(private int $accountNumber, private float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function __toString()
    {
        return "Bank Account: $this->accountNumber. Balance: $$this->balance"; 
    }
}
<?php
class BankAccount 
{
    public function __construct(private float $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance():float 
    {
        return $this->balance;
    }

    public function deposit($amount):object 
    {
        if($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }

    public function withDraw($amount):bool 
    {
        if($amount > 0 && $amount <= $this->balance) 
        {
            $this->balance -= $amount;

            return true;
        }

        return false;
    }
}

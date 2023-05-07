<?php

include_once "BankAccount.php";

class CheckingAccount extends BankAccount
{
    public function __construct($amount, private float $minBalance)
    {
        if($amount > 0 && $amount >= $minBalance) {
            parent::__construct($amount);
            $this->minBalance = $minBalance;
        } 
        else {
			throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
		}

    }

    public function withDraw($amount) : bool
    {
        $withCanDraw = $amount > 0 && $this->getBalance() - $amount > $this->minBalance;

        if($withCanDraw) 
        {
            parent::withDraw($amount);
            echo 'so tien rut' . $amount;
            return true;
        }
        
        return false;
    }

}

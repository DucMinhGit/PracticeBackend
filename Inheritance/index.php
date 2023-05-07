<?php

require "CheckingAccount.php";

$account = new CheckingAccount(100, 20);

$account->withDraw(32);

$account->getBalance();

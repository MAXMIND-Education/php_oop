<?php

require 'SavingAccount.php';


class SavingAccount extends BankAccount
{
}


$account = new SavingAccount();
$account->deposit(100);
echo $account->getBalance();
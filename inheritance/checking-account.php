<?php
require '\Users\REAL\Desktop\ostad\module_4\inheritance\account.php';

class CheckingAccount extends Account
{
    public function transfer( $amount )
    {
        echo "Transfering $amount from checking account \n";
    }
}

$checkingAccount = new CheckingAccount();

$checkingAccount->deposite(100);
$checkingAccount->withdraw( 50);
$checkingAccount-> transfer(70);
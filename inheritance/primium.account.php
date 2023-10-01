<?php




require '\Users\REAL\Desktop\ostad\module_4\inheritance\checking-account.php';


class   PremiumAccount extends CheckingAccount {

    public $minimumbalance = 1000000;
}


$PremiumAccount = new PremiumAccount();

echo $PremiumAccount ->minimumbalance;
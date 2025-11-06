<?php
    class Account{
        static $accountCount = 0;
        static $bankName = "Global Bank";

        protected $accountNumber;
        protected $accountHolder;
        protected $balance;

        function __construct($accountNumber, $accountHolder, $initialBalance){
            $this->$accountNumber = $accountNumber;
            $this->accountHolder = $accountHolder;
            $this->balance = $initialBalance;
        }

        function withdraw($amount){
            if($amount <= $this->balance){
                $this->balance -= $amount;
                echo 'Sucessfully withdrawn';
            }
            else {
                echo 'Insufficient balance!';
            }
        }

        function deposit($amount){
            $this->balance += $amount;
            echo '<br />';
            echo 'Deposited successfully!';
        }

        function checkBalance(){
            return $this->balance;
        }

        function checkInfo(){
            echo 'Account details:';
            echo '<br />';
            echo 'Bank: '.$this->bankName;
            echo '<br />';
            echo 'Account holder: '.$this->accountHolder;
            echo '<br />';
            echo 'Account number: '.$this->accountNumber;
            echo '<br />';
            echo 'Current balance: '.$this->balance;
        }
    }

    class SavingAccount extends Account{
        static public $interest = 5;
        static $withdrawlLimit = 10000;

        public $accountType;

        function __construct($accountNumber, $accountHolder, $initialBalance){
            $this->accountType = 'Saving';
            parent::__construct($accountNumber, $accountHolder, $initialBalance);
        }

        function withdraw($amount){
            if($amount <= $this->balance && $amount <= $this->withdrawlLimit){
                $this->balance -= $amount;
                echo 'Sucessfully withdrawn';
            }
            else {
                echo 'Insufficient balance or more than withdrawl limit';
            }
        }

        function checkInfo(){
            parent::checkInfo();
            echo '<br />';
            echo 'Account type: '.$this->accountType;
        }
    }

    class CurrentAccount extends Account{
        public $accountType;

        function __construct($accountNumber, $accountHolder, $initialBalance){
            $this->accountType = 'Current';
            parent::__construct($accountNumber, $accountHolder, $initialBalance);
        }

        function checkInfo(){
            parent::checkInfo();
            echo '<br />';
            echo 'Account type: '.$this->accountType;
        }
    }

    // $DineshAccount = new Account('12abc999', 'Dinesh', 500);
    // $DineshAccount->checkInfo();
    $DineshCurrentAccount = new CurrentAccount('34xyz888', 'Dinesh', 1000);
    $DineshCurrentAccount->checkInfo();

    $DineshDepositAccount = new CurrentAccount('34xyz888', 'Dinesh', 1000);
    $DineshDepositAccount->checkInfo();

    $DineshWithdrawAccount = new CurrentAccount('34xyz888', 'Dinesh', 1000);
    $DineshWithdrawAccount->checkInfo();

?>
<?php
    class BankAccount{
        protected $id;
        protected $name;
        protected $balance;

        public function setId($id){
            $this->id = $id;
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getBalance(){
            return $this->balance;
        }

        public function withdraw($amount){
            $this->balance -= $amount;
        }
        public function deposit($amount){
            $this->balance += $amount;
        }
    }

    class SavingsAccount extends BankAccount{

        protected $interest_rate;
        public function __construct($interest_rate, $balance){
            $this->interest_rate = $interest_rate;
            $this->balance = $balance;
        }

        public function calculateInsertest(){
            $interest = $this->balance * $this->interest_rate;
            $this->deposit($interest);
        }
    }

    $savings_account = new SavingsAccount(0.05, 1000);
    $savings_account->calculateInsertest();
    echo "New balance: ".$savings_account->getBalance();

?>
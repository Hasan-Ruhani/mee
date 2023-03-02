<?php
    class Fund{
        public $fund;

        function __construct($initialFund = 0){
            $this -> fund = $initialFund;
        }

        public function addFund($money){
            $this -> fund += $money;
        }

        public function deductFund($money){
            $this -> fund -= $money;
        }

        public function getTotal(){
            echo "Total fund is {$this -> fund} \n";
        }
    }
//public methode you can use anywhere but protected & private methode you can't use any place without particular place.
//use public methode for example>>
    $ourFund = new Fund(100);
    $ourFund -> addFund(10);
    $ourFund -> deductFund(20);
    $ourFund -> getTotal();
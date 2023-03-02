<?php
//you use __construct without any call
    class Human {
        public $name;
        public $age;
    
        public function __construct($personName = "", $personAge = 0) {
        $this->name = $personName;
        $this->age = $personAge;
        }
    
        public function sayName(){
            if(($this -> name) && ($this -> age)){
                echo "my name is {$this -> name}, I'm {$this -> age} years old. \n";
            }
            elseif($this -> name){
                echo "my name is {$this -> name}, But I don't know how old I'm?? \n";
            }
            elseif($this -> age){
                echo "I don't know what's my name??, But I'm {$this -> age} years old. \n";
            }
            else{
                echo "I don't know what's my name & my old???";
            }
        }
    }

    $h1 = new Human("Karim", 20);
    $h2 = new Human("Rahim");
    $h3 = new Human("", 23);
    $h4 = new Human();

    $h1 -> sayName();
    $h2 -> sayName();
    $h3 -> sayName();
    $h4 -> sayName();


      
        
    

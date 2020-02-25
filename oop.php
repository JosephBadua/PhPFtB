<?php
    class Person{
        private $name;
        private $email;
        private static $ageLimit = 30;

        public function __construct($name, $email){
            $this->name= $name;
            $this->email= $email;
            echo __CLASS__. ' created<br>';
        }

        
        public function __destruct(){
            echo __CLASS__. ' destroyed<br>';
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public static function getAge(){
            return self::$ageLimit;
        }
    };

    echo Person::getAge();
    // $person1 = new Person('John Doe', 'test@gmail.com');

    // echo $person1->getName();

    // $person1->setName('John Doe');

    // echo $person1->getName();
    // $person1->name = "John Doe";
    // echo $person1->name;

    class Customers extends Person {
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->name= $name;
            $this->email= $email;
            $this->balance= $balance;
            echo 'A new ' . __CLASS__;
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }
    }

    // $customer1 = new Customers('John Doe', 'test@test.com', 300);

    // echo $customer1->getBalance();
?>
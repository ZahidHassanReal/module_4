<?php

class Human{
    public $name;
    public $age;

    function __construct($parsonName ,$parsonAge = null)
    {
        echo "real is a madafaka\n";
        $this->name = $parsonName;
        $this->age = $parsonAge;
    }
    function sayHi(){
        echo"Saki vai\n";
        $this->sayName();
    }

    function sayName() {
        echo "may name is {$this->name} , i am {$this->age} years old\n";

}
}

$h1 = new Human("real" , 23);
$h2 = new Human("madari" , 56);
$h2 = new Human("madari" );
$h1->sayHi();
$h2->sayHi();

<?php

class Animal
{
    protected $name;

    function __construct($initialname = "")
    {
        $this->name = $initialname;
    }

    function eat()
    {
        echo "{$this->name} eatting \n";
    }

    function run()
    {
        echo "{$this->name} runnig \n";
    }

    function sleep()
    {
        echo "{$this->name} sleeping \n";
    }
}

class Cat extends Animal
{

    function greet()
    {
        echo "{$this->name} meaw  \n";
    }
}


class Man extends Animal
{

    function greet()
    {
        echo "{$this->name} helllo how are you\n";
    }
}


$obj1 = new Cat("cat");
$man = new Man("john doe");
$man->greet();
$obj1->sleep();

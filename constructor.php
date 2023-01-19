<?php
class Human
{
    public $name;
    public $age;

    function __construct($personName, $personAge)
    {
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayhi()
    {
        echo "Assalamu Alaikum hi\n";
        $this->sayname();
    }
    private function sayname()
    {
        echo "my name is {$this->name}\n";
        echo "my age is {$this->age}\n";
    }
}

$h1  = new Human("dslkf", 45);
$h1->name = "testting";
$h1->sayhi();

// $h1->name = "heilo";

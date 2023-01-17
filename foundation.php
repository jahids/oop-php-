<?php
class Fruit
{
    public $name;

    function __construct($personName)
    {
        echo $this->name = $personName;
        echo "\n";
        echo "yeah default run constructdfador \n";
    }

    function sayhi()
    {
        echo "Assalamu Alaikum hi\n";
        $this->sayname();
    }

    function sayname()
    {
        echo "my name is {$this->name}\n";
    }
}

$h1  = new Fruit('jack helon');
$h1->name = "testting";
$h1->sayhi();
$h1->name = "heilo";

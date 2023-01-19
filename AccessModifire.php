<?php

class bank
{

    private $amount = 0;

    function addMoney($x)
    {
        $this->amount += $x;
    }

    function getMoney($x)
    {
        $this->amount -= $x;
    }

    function totalMoney()
    {
        echo "total money {$this->amount}\n";
    }
}

$h1 = new bank();
$h1->addMoney(5000);
$h1->totalMoney();

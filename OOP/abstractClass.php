<?php

abstract class abstractClass
{
    public $name;
    public $address;

    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    abstract function profile();
}

class childClass extends abstractClass
{
    function profile()
    {
        $details = "";
        $details =  "Name :" . $this->name . " " . "Address :" . $this->address;
        return $details;
    }
}


$obj1 = new childClass("Apple", "Dhaka");

echo $obj1->profile();

<?php

class Fruit
{
    private $name;
    private $color;

    // Setter Function
    function set_name($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function return_name()
    {
        return "The name of the fruit is " . $this->name . " and the color is " . $this->color;
    }
}


$Fruit = new Fruit();
$Fruit->set_name("Apple", "Red");

$Fruit2 = new Fruit();
$Fruit2->set_name("Orange", "Orange");

var_dump($Fruit);
var_dump($Fruit2);


echo $Fruit->return_name();
echo "<br>";
echo $Fruit2->return_name();

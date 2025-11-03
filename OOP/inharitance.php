<?php

class Fruit3
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function info()
    {
        return "The name of the fruit is " . $this->name . " and the color is " . $this->color;
    }
}



class Apple extends Fruit3
{
    function message()
    {
        return  "Ï am a Function of Apple Class";
    }
}


$apple = new Apple("Apple", "Red");
echo $apple->info();
echo "<br>";
echo $apple->message();

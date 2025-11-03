<?php
class FruitTiming
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }

    function __get_name($name)
    {
        return $this->name;
    }
}


$Fruit = new FruitTiming("Apple");
var_dump($Fruit);
echo $Fruit->__get_name("Apple");

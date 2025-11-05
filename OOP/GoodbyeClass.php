<?php

class GoodbyeClass
{
    const MYMSG = "We are learning OOP";
    const MYMSG2 = "We are learning Constant using OOP";
    function info()
    {
        // echo self::MYMSG;
        echo self::MYMSG2;
    }
}


echo GoodbyeClass::MYMSG;
echo "<br>";
$obj1 = new GoodbyeClass;

echo $obj1->info();

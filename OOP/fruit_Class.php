<?php

class Fruit
{
    public $name;
    public $color;
}

$fruit1 = new Fruit();

$fruit1->name = "Apple";
$fruit1->color = "Red";


$fruit2 = new Fruit();

$fruit2->name = "Orange";
$fruit2->color = "Orange";

var_dump($fruit1);
var_dump($fruit2);

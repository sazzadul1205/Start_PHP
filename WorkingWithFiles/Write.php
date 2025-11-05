<?php

$fh = fopen("student1.txt", "w");

fwrite($fh, "Lorem ipsum d
consectetur quaerat deserunt amet eveniet! Quo doloremque ipsa mollitia repellat dolores ipsum 
ullam id at eaque culpa.");


$fh = fopen("student1.txt", "r");

while (!feof($fh)) {
    echo fgets($fh, 512) . "<br>";
}

fclose($fh);

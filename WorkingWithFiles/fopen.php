<?php

$fh = fopen("student.txt", "r");

// echo fgets($fh);

echo "<br>";

while (!feof($fh)) {
    echo fgets($fh) . "<br>";
}

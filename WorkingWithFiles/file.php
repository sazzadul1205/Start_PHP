<?php

$File = file("Users.txt");

echo "<pre>";
print_r($File);
echo "</pre>";

foreach ($File as $Line) {
    // echo $Line . "<br>";
    [$Name, $Email] = explode(" ", $Line);

    echo "Name : " . $Name . "<br>";
    echo  "Email : " . $Email . "<br>";
}

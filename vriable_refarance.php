<?

// $value1 = "Hello World";

// $value2 = &$value1;

// $value2 = "Good Bye";

// echo $value1;


foreach ($_SERVER as $key => $value) {
    echo $key, "=>", $value, "<br>";
}

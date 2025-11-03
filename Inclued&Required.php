<?php

// Explanation of include, include_once, require, require_once

include "php_templating/inc/Navbar.php";
include "php_templating/inc/Navbar.php";

include_once "php_templating/inc/Navbar.php";
include_once "php_templating/inc/Navbar.php";

require "php_templating/inc/Navbar.php";
require "php_templating/inc/Navbar.php";

require_once "php_templating/inc/Navbar.php";
require_once "php_templating/inc/Navbar.php";
// 


echo "welsome" . "To";

$new_var = "Hello";
echo getTy;
?>


<?php

if (isset($_POST['upload'])) {
    if (isset($_FILES['myfile'])) {
        $fileName = $_FILES['myfile']['name'];
        $tempfile = $_FILES['myfile']['tmp_name'];
        $size = $_FILES['myfile']['size'];
        $error = $_FILES['myfile']['error'];
        $folder = "upload/";
        $maxSize = 1024 * 1024 * 1; // 1 MB
        $allowedType = ["jpg", "jpeg", "png", "gif", "webp"];
        $Errors = [];

        // Check PHP file upload errors first
        if ($error !== 0) {
            $Errors[] = "File upload error: " . $error;
        } else {
            // Get file extension
            $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Size check
            if ($size > $maxSize) {
                $Errors[] = "File is too large (max 1 MB).";
            }

            // Type check
            if (!in_array($ext, $allowedType)) {
                $Errors[] = "Invalid file type. Allowed: " . implode(", ", $allowedType);
            }
        }

        // Display errors or move file
        if (count($Errors) > 0) {
            foreach ($Errors as $err) {
                echo "<p style='color:red;'>$err</p>";
            }
        } else {
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }
            if (move_uploaded_file($tempfile, $folder . $fileName)) {
                echo "<p style='color:green;'>File uploaded successfully!</p>";
            } else {
                echo "<p style='color:red;'>Failed to move uploaded file.</p>";
            }
        }
    } else {
        echo "<p style='color:red;'>No file received.</p>";
    }
}
?>
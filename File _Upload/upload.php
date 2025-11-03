<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload PHP</title>
</head>

<body>
    <h3>File Upload using PHP Procedural Approach / Coding</h3>
    <form action="" name="myfile" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile"> <br>
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    // If submit is clicked run the code then
    if (isset($_POST['upload'])) {
        // print_r($_FILES);
        // echo "File Name:" . $_FILES['myfile']['name'];
        // echo "<br>";
        // echo "File Type:" . $_FILES['myfile']['type'];
        // echo "<br>";
        // echo "File Size:" . $_FILES['myfile']['size'];
        // echo "<br>";
        // echo "File Temp Name:" . $_FILES['myfile']['tmp_name'];
        // echo "<br>";
        // echo "File Error:" . $_FILES['myfile']['error'];
        // echo "<br>";


        $fileName = $_FILES['myfile']['name'];
        $tempfile = $_FILES['myfile']['tmp_name'];
        $size = $_FILES['myfile']['size'];
        $folder = "upload/";
        $maxSize = 1024 * 1024 * 0.2; // 1 MB
        $allowedType = ["jpg", "jpeg", "png", "gif", "webp"];
        $Errors = [];

        echo $ext = pathinfo($fileName, PATHINFO_EXTENSION);

        echo "<br>";


        if ($size > $maxSize) {
            $Errors[] =
                "<h1>File is too large</h1>";
        }
        if (!in_array($ext, $allowedType)) {
            $Errors[] =
                "<h1>Invalid File Type</h1>";
        }

        if (count($Errors) > 0) {
            foreach ($Errors as $error) {
                echo $error . "<br>";
            }
        } else {
            move_uploaded_file($tempfile, $folder . $fileName);
            echo "<h1>File uploaded successfully</h1>";
        }
    }
    ?>
</body>

</html>
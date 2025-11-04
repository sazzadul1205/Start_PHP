<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOX PHP</title>
</head>

<body>
    <div>
        <form action="Box.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="language">Favorite Programming Language:</label>
            <select name="language[]" id="language" multiple>
                <option value="PHP">PHP</option>
                <option value="Javascript">Javascript</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="C++">C++</option>
            </select>
            <br>
            <label for="wantToLearn">Want to learn:</label>

            <br>
            <label for="wantToLearn">Want to learn:</label>
            <input type="checkbox" name="wantToLearn[]" id="wantToLearn" value="PHP">PHP
            <input type="checkbox" name="wantToLearn[]" id="wantToLearn" value="Javascript">Javascript
            <input type="checkbox" name="wantToLearn[]" id="wantToLearn" value="Python">Python
            <input type="checkbox" name="wantToLearn[]" id="wantToLearn" value="Java">Java
            <input type="checkbox" name="wantToLearn[]" id="wantToLearn" value="C++">C++

            <br>
            <input type="submit" name="Submit" value="Submit">
        </form>

        <?php
        if (isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $language = $_POST['language'];
            $wantToLearn = $_POST['wantToLearn'];

            $language_output = "";
            $wantToLearn_output = "";

            $lastLanguageKey = array_key_last($language);
            $lastWantToLearnKey = array_key_last($wantToLearn);


            foreach ($language as $key => $lang) {
                if ($key == $lastLanguageKey) {
                    $language_output .= $lang;
                } else {
                    $language_output .= $lang . ", ";
                }
            }

            foreach ($wantToLearn as $key => $lang) {
                if ($key == $lastWantToLearnKey) {
                    $wantToLearn_output .= $lang;
                } else {
                    $wantToLearn_output .= $lang . ", ";
                }
            }

            // $language = $_POST['language'];
            // $wantToLearn = $_POST['wantToLearn'];

            // echo "Name: " . $name . "<br>";
            // echo "Email: " . $email . "<br>";
            // print_r($language);
            // echo "<br>";
            // print_r($wantToLearn);

            // echo "<br>";
            // echo $language_output;
            // echo "<br>";
            // echo $wantToLearn_output;


            // Email Validation
            // if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            //     echo "<h1>Invalid Email</h1>";
            // } else {
            //     echo $email;
            //     echo "<h1>Valid Email</h1>";
            // }

        ?>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Favorite Programming Language:</td>
                    <td><?php echo $language_output; ?></td>
                </tr>
                <tr>
                    <td>Want to learn:</td>
                    <td><?php echo $wantToLearn_output; ?></td>
                </tr>
            </table>


        <?php
        }
        ?>
    </div>
</body>

</html>
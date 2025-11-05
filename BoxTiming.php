<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOX PHP</title>
</head>

<body>
    <div>
        <form method="POST">
            <label for="name">Your Name:</label>
            <input
                type="text"
                name="name"
                id="name"
                value="<?php if (isset($_POST['name'])) {
                            echo $_POST['name'];
                        } ?>">
            <br>
            <label for="email">Email Address:</label>
            <input
                type="email"
                name="email"
                id="email"
                value="<?php if (isset($_POST['email'])) {
                            echo $_POST['email'];
                        } ?>">
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
            $name_output = "";
            $email_output = "";
            $language_output = "";
            $wantToLearn_output = "";

            // Error handling
            $error = array();

            if (!isset($_POST['name']) || empty($_POST['name'])) {
                $error[] = "Name is required";
            } else {
                $name_output = $_POST['name'];
            }

            if (!isset($_POST['email']) || empty($_POST['name'])) {
                $error[] = "Email is required";
            } else {
                // Email Validation
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $error[] = "Invalid email format";
                } else {
                    $email_output = $_POST['email'];
                }
            }

            if (!isset($_POST['language'])) {
                $error[] = "Language is required";
            } else {
                $language = $_POST['language'];

                $lastLanguageKey = array_key_last($language);


                if (count($language) > 0) {
                    foreach ($language as $key => $lang) {
                        if ($key == $lastLanguageKey) {
                            $language_output .= $lang;
                        } else {
                            $language_output .= $lang . ", ";
                        }
                    }
                }
            }

            if (!isset($_POST['wantToLearn'])) {
                $error[] = "Want to learn is required";
            } else {
                $wantToLearn = $_POST['wantToLearn'];

                $lastWantToLearnKey = array_key_last($wantToLearn);

                if (count($wantToLearn) > 0) {
                    foreach ($wantToLearn as $key => $lang) {
                        if ($key == $lastWantToLearnKey) {
                            $wantToLearn_output .= $lang;
                        } else {
                            $wantToLearn_output .= $lang . ", ";
                        }
                    }
                }
            }

            if (count($error) > 0) {
                foreach ($error as $err) {
                    echo $err . "<br>";
                }
            } else {

        ?>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $name_output; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $email_output; ?></td>
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
        }
        ?>
    </div>
</body>

</html>
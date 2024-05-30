<html>
    <head>
        <title>Nerdieluv Signup</title>
        <link href="nerdieluv.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
    <div class="bannerarea">
            <img src="logo.png" alt="logo">
            <br>
            where meek geeks meet
            <br>
        </div>
        <div class="maintextarea">
        <?php
            // create variables from form
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $personalityType = $_POST['personalityType'];
            $favOS = $_POST['favOS'];
            $minAge = $_POST['minAge'];
            $maxAge = $_POST['maxAge'];

            // validate form fields
            $validForm = true;
            if (empty($name) || empty($gender) || empty($age) || empty($personalityType) || empty($favOS) || empty($minAge) || empty($maxAge)) {
                $validForm = false;
                echo "<p>All fields are required.</p>";
            }
            if (!is_numeric($age) || !is_numeric($minAge) || !is_numeric($maxAge)) {
                $validForm = false;
                echo "<p>Age and Seeking Age must be numbers.</p>";
            }
            if ($validForm) {
                // open file for writing
                $file = fopen("singles.txt", "a") or die("Unable to open file!");
                // write to file
                fwrite($file, $name . "," . $gender . "," . $age . "," . $personalityType . "," . $favOS . "," . $minAge . "," . $maxAge . "\n");
                // close file
                fclose($file);
                echo "<br><p><strong>Thank you!</strong>";
                echo "<br><br>Your profile has been successfully added.</p>";
                echo "<p>Welcome to Nerdieluv, " . $name . "! <br><br>";
                echo "Now <a href='matches.php'>log in to see your matches!</a></p>";
            }
            else {
                echo "<p>Sorry, your profile was not added.</p>";
                echo "<p>Please go back and try again.</p>";
            }
        ?>
        <br>
            <p>
                This page is for single nerds to meet and date each other! Type in your personal information and wait for the nerdly luv to begin! Thank you for using our site.
            </p>
            <p>
                Results and page (C) copyright NerdLuv Inc.
            </p>
            <div class="return-container">
        <img src="backbutton.png" alt="back" style="width: 40;"><a href="index.php">Back to front page</a>
        </div>

        </div>

        <br>
        <br>

        <div class="w3c">
            <img src="w3c-xhtml.png" alt="Valid XHTML" />
            <img src="w3c-css.png" alt="Valid CSS" />
        </div>
    </body>
</html>
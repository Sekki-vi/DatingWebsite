<html>
    <head>
        <title>Nerdieluv Matches</title>
        <link href="nerdieluv.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <div class="bannerarea">
        <img src="logo.png" alt="logo">
        <br>
        where meek geeks meet
    </div>

    <br>

    <?php
        echo "<br>";
        
        // Create variables for php
        $name = $_POST['name'];

        // Set form to true by default
        $validForm = true;

        // If the string is empty, it returns an error page
        if (empty($name)) {
            $validForm = false;
            echo "<p>All fields are required.</p>";
        }

        // If a valid name is entered, txt file is read
        if ($validForm) {
            $file = fopen("singles.txt", "r") or die("Unable to open file!");
            
            // Seperates the data by ",", into individual strings
            while (!feof($file)) {
                $line = fgets($file);
                $pieces = explode(",", $line);

                // Creates the array to be returned
                if ($pieces[0] == $name) {
                    $matches = array();
                    rewind($file);
                    
                    while (!feof($file)) {
                        $matchLine = fgets($file);
                        $matchPieces = explode(",", $matchLine);

                        // Checks to see if the user is a "match" with other users
                        if (
                            $matchPieces[1] != $pieces[1] &&
                            $matchPieces[2] >= $pieces[5] && $matchPieces[2] <= $pieces[6] &&
                            $matchPieces[4] == $pieces[4] &&
                            str_intersect($matchPieces[3], $pieces[3])
                        ) {
                            array_push($matches, $matchPieces);
                        }
                    }
                    
                    // Creates the header for the matches container
                    echo "<h1>Matches for " . $name . "</h1>";
                    
                    // Checks to see if there are matches
                    if (count($matches) == 0) {
                        echo "<p>Sorry, no matches were found.</p>";
                    } else {

                        // Returns the matches
                        foreach ($matches as $match) {
                            echo "<div class='match'>";
                            echo "<p><img src='user.jpg' alt='user' />";
                            echo $match[0] . " " . $match[2] . "</p>";
                            echo "<ul>";
                            echo "<li><strong>gender:</strong> " . $match[1] . "</li>";
                            echo "<li><strong>age:</strong> " . $match[2] . "</li>";
                            echo "<li><strong>type:</strong> " . $match[3] . "</li>";
                            echo "<li><strong>OS:</strong> " . $match[4] . "</li>";
                            echo "</ul>";
                            echo "</div>";
                        }
                    }
                }
            }
            fclose($file);
        }

        // Compares the personality types
        function str_intersect($str1, $str2) {
            return count(array_intersect(str_split($str1), str_split($str2))) > 0;
        }
    ?>
    
    <div class="maintextarea">
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
        <img src="w3c-xhtml.png" alt="Valid XHTML">
        <img src="w3c-css.png" alt="Valid CSS">
    </div>
</body>
</html>

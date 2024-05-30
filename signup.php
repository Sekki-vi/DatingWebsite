
<html>
    <head>
        <title>Nerdieluv Signup</title>
        <link href="nerdieluv.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="bannerarea">
            <img src="logo.png" alt="logo">
            <br>
            where meek geeks meet
        </div>
        <div class="maintextarea">
        <br>
            <form action="signup-submit.php" method="post">
                <fieldset>
                    <legend>
                        New User Signup:
                    </legend>
                    
                    <strong>
                        Name:
                    </strong>
                    <input type="text" name="name" size="16">
                    
                    <br>
                    <br>
                    
                    <strong>
                        Gender:
                    </strong>
                    <input type="radio" name="gender" value="M"> Male
                    <input type="radio" name="gender" value="F" checked="checked"> Female
                    
                    <br>
                    <br>
                    
                    <strong>
                        Age:
                    </strong>
                    <input type="text" name="age" size="6" maxlength="2">
                    
                    <br>
                    <br>

                    <strong>Personality type:</strong>
                    <input type="text" name="personalityType" size="6" maxlength="4">
                    <label>(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)</label>
                    
                    <br>
                    <br>

                    <strong>Favorite OS:</strong>
                    <select name="favOS">
                        <option selected="selected">Windows</option>
                        <option>Mac OS X</option>
                        <option>Linux</option>
                    </select>
                    
                    <br>
                    <br>

                    <strong>Seeking age:</strong>
                    <input type="text" name="minAge" size="6" maxlength="2" placeholder="min"> to
                    <input type="text" name="maxAge" size="6" maxlength="2" placeholder="max">
                    
                    <br>
                    <br>

                    <input type="submit" value="Sign Up">
                </fieldset>
            </form>
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

        <div class="w3c">
            <img src="w3c-xhtml.png" alt="Valid XHTML">
            <img src="w3c-css.png" alt="Valid CSS">
        </div>
    </body>
</html>
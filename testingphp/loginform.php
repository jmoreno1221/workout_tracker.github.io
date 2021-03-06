﻿<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--title>Sign-Up/Login Form</title-->
    <title>Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/stylepage.css">
	
</head>

<body>

    <div class="form">

        <div id="login">
            <h1>Welcome Workout Tracker!</h1>

            <form action="login.php" method="post">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>

                    <input type="email" required autocomplete="off" name="email" />
                </div>
			
				<br>
				<br>
                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>

                    <input type="password" required autocomplete="off" name="password"/>
                </div>

				<br>
				<br>
                <p class="forgot"><a href="signupform.php">Need an Account?</a></p>

                <!--button class="button button-block"/>Log In</button-->
                <!--button class="button button-block" onClick="document.location.href='homepage.html';">Log In</button-->
                <!--button class="button button-block" onClick="document.location.href='homepage.html';">Log In</button-->
                <!--button type="submit" class="button button-block" onClick="document.location.href='homepage.html';">Log In</button-->
                <!--button type="submit" onClick="document.location.href='homepage.php' class="button button-block">Log In</button-->

				<br>
				<br>
                <button type="submit" onClick="document.location.href='homepage.php'" class="button button-block">Log In</button>

            </form>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>

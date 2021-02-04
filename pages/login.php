<?php
include('../nav.php');
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
</head>

<body>
    <?php getNav(); ?>
    <div id="content">
        <div id="login-page">
            <div class="background">
                <div class="login-container">
                    <h1>Sign In! </h1>
                    <div class="login-fields-container">
                        <label for="username" class="username-label">Username</label>
                        <input name="username" id="username" />
                        <label for="password" class="password-label">Password</label>
                        <input type="password" name="password" id="password" />
                        <a href="/pages/create-account.php">Click here to make an Account</a>
                    </div>
                    <div class="login-submit-container">
                        <input type="submit" class="login-button" value="LOGIN" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
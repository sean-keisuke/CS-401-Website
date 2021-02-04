<?php
include('../nav.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/create-account.css">
</head>

<body>
    <?php getNav(); ?>
    <div id="content">
        <div id="create-account-page">
            <div class="background">
                <div class="create-account-container">
                    <h1>Create Account </h1>
                    <div class="create-account-fields-container">
                        <label for="username" class="username-label">Choose Username</label>
                        <input name="username" id="username" />
                        <label for="password" class="password-label">Choose Password</label>
                        <input type="password" name="password" id="password" />
                        <label for="password" class="password-label">Confirm Password</label>
                        <input type="password" name="password" id="password" />
                    </div>
                    <div class="create-acc-submit-container">
                        <input type="submit" class="create-account-button" value="CREATE MY ACCOUNT" />
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "../footer.php"; ?>
</body>

</html>
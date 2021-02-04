<?php
include('../nav.php');
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/logout.css">
</head>

<body>
    <?php getNav(); ?>
    <div id="content">
        <div id="logout-page">
            <div class="background">
                <div class="logout-container">
                    <h1>Sign Out!</h1>
                    <div class="logout-submit-container">
                        <input type="submit" class="logout-button" value="LOG OUT" />
                    </div>
                    <div class="no-signout-container">
                        <a href="/pages/reviews.php">I don't want to sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
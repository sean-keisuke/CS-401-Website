<?php
include("../components/connection.php");
include("../components/util.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
    }
    header("Location: login.php");
    die;
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/logout.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php require_once "../nav.php"; ?>
    <div id="content">
        <div id="logout-page">
            <div class="background">
                <div class="logout-container">
                    <h1>Sign Out!</h1>
                    <form method="POST" action="#">
                        <div class="logout-submit-container">
                            <input type="submit" class="logout-button" value="LOG OUT" />
                        </div>
                        <div class="no-signout-container">
                            <a href="/pages/reviews.php">I don't want to sign out</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
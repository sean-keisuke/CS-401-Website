<?php
include('../nav.php');

$host = "localhost";
$user = "root";
$password = "fj2euo34fg8ws";
$db = "pgr";

$mysqli = new mysqli($host, $user, $password, $db);
// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$userPost = $_POST['username'];

if(isset($_POST['username'])){

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from loginform where username='" . $uname . "'AND password='" . $password . "' limit 1";

    $result = $mysqli->query($sql);

    if ($result->num_rows == 1) {
        echo " You Have Successfully Logged in";
        exit();
    } else {
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
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
                    <form method="POST" action="#">
                        <div class="login-fields-container">
                            <label for="username" class="username-label">Username</label>
                            <input name="username" id="username" placeholder="username..." />
                            <label for="password" class="password-label">Password</label>
                            <input type="password" name="password" id="password" />
                            <a href="/pages/create-account.php">Click here to make an Account</a>
                        </div>
                        <div class="login-submit-container">
                            <input type="submit" class="login-button" value="LOGIN" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
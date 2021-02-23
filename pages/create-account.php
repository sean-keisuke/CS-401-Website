<?php
include("../components/connection.php");
include("../components/util.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['password-confirm'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        if ($password == $confirm_pass) {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }
        else{
            echo "Password and confirm password do not match";
        }
    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/create-account.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
</head>

<body>
    <?php require_once "../nav.php"; ?>
    <div id="content">
        <div id="create-account-page">
            <div class="background">
                <div class="create-account-container">
                    <h1>Create Account </h1>
                    <form method="POST" action="#">
                        <div class="create-account-fields-container">
                            <label for="username" class="username-label">Choose Username</label>
                            <input name="username" id="username" />
                            <label for="password" class="password-label">Choose Password</label>
                            <input type="password" name="password" id="password" />
                            <label for="password" class="password-label">Confirm Password</label>
                            <input type="password" name="password-confirm" id="password-confirm" />
                        </div>
                        <div class="create-acc-submit-container">
                            <input type="submit" class="create-account-button" value="CREATE MY ACCOUNT" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php require_once "../footer.php"; ?>
</body>

</html>
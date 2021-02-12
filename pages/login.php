<?php
include("../components/connection.php");
include("../components/util.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];


    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['id'] = $user_data['id'];
                    header("Location: reviews.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
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
    <?php require_once "../nav.php"; ?>
    <div id="content">
        <div id="login-page">
            <div class="background">
                <div class="login-container">
                    <h1>Sign In To Enter Website! </h1>
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
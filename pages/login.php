<?php
include("../components/connection.php");
include("../components/util.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = hash('sha256', $password);

    if (!empty($user_name) && !empty($hashed_password) && !is_numeric($user_name)) {
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $hashed_password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['id'] = $user_data['id'];
                    unset($_SESSION['login_data']);
                    unset($_SESSION['error_message']);
                    header("Location: reviews.php");
                    die;
                }
                else {
                    $_SESSION['error_message'] = "wrong username or password!";
                    $_SESSION['login_data'] = $_POST;
                }
            }
            else {
                $_SESSION['error_message'] = "user does not exist!";
                $_SESSION['login_data'] = $_POST;
            }
        } 
    } else {
        $_SESSION['error_message'] = "A field is missing!";
        $_SESSION['login_data'] = $_POST;
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                            <?php if (isset($_SESSION['error_message']) && !isset($_SESSION['user_id'])) { ?>
                                <div class="login-error-message">
                                    <p><?php echo $_SESSION['error_message'] ?></p>
                                </div>
                            <?php } ?>
                            <label for="username" class="username-label">Username</label>
                            <input name="username" id="username" placeholder="username..." <?php if (isset($_SESSION['login_data']['username'])) { ?>value=<?php echo $_SESSION['login_data']['username'] ?> <?php } ?> />
                            <label for="password" class="password-label">Password</label>
                            <input type="password" name="password" id="password" placeholder="password..." />
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
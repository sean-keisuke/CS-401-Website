<?php
include("./components/connection.php");
include("./components/util.php");

session_start();

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
</head>

<div id="navigation">
    <div class="page-nav-bar">
        <a href="/" class="home-logo">
            <div class="logo">
                <img src="/images/PGR-logo.png" alt="logo">
            </div>
        </a>
        <div class="nav-bar-contents">
            <a href="/pages/about.php">
                <div class="link-text">
                    About
                </div>
            </a>
            <a href="/pages/reviews.php">
                <div class="link-text">
                    Reviews
                </div>
            </a>
            <?php if (isset($_SESSION['user_id'])) :
                $user_data = check_login($con);
            ?>

                <a href="/pages/logout.php">
                    <div class="link-text">
                        Sign out
                    </div>
                </a>
                <div class="current-user">Current User: <?php echo $user_data['user_name']; ?></div>
                ]
            <?php else : ?>
                <a href="/pages/login.php">
                    <div class="link-text">
                        Sign in
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
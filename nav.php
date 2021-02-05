<?php
include("./components/connection.php");
include("./components/util.php");

session_start();

// $is_logged_in = false;
$is_logged_in = nav_bar_login();
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
</head>

<div id="navigation">
    <div class="page-nav-bar">
        <a href="/" class="home-logo">
            <div class="logo">
                <img src="/images/placeholder.png" alt="placeholder-logo">
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
            <?php if ($is_logged_in) :
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
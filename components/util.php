<?php

$nav_bar_login = false;

function check_login($con)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            global $nav_bar_login;
            $nav_bar_login = true;
            return $user_data;
        }
    }
    // redirect to login
    header("Location: login.php");
    die;
}

function nav_bar_login()
{
    // if (isset($_SESSION['user_id'])) {
    //     $id = $_SESSION['user_id'];
    //     $query = "select * from users where user_id = '$id' limit 1";
    //     $result = mysqli_query($con, $query);
    //     if ($result && mysqli_num_rows($result) > 0) {
    //         return true;
    //     }
    // }
    // return false;
    global $nav_bar_login;
    return $nav_bar_login;
}

function random_num($length)
{
    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);
    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}

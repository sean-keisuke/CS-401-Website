<?php
include("../components/connection.php");
session_start();

$comment_id = $_GET['comment_id'];
$page_name = $_GET['page_name'];
$user_id = $_GET["UserID"];
echo $user_id;
echo $_SESSION['id'];

if ($user_id === $_SESSION['id']) {
    if (!empty($comment_id)) {
        $query = "delete from comments where CommentID = $comment_id";
        echo $query;
        $response = mysqli_query($con, $query);
        if (!$response) {
            die('Invalid query: ' . mysqli_error($con));
        }
    }
}
else {
    die("You are trying to delete another user's comment!");
}

header('Location: ../pages/' . $page_name . '.php'); // pass back to page
exit;

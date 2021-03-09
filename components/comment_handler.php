<?php
include("../components/connection.php");
session_start();

date_default_timezone_set('America/Los_Angeles');
$date = date('Y-m-d H:i:s', time());
$user_id = $_SESSION['id'];
$page_id = $_GET['page_id']; 
$page_name = $_GET['page_name'];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $comment_to_post = $_POST['comment'];
    $comment_to_post = htmlspecialchars($comment_to_post);
    if (!empty($comment_to_post)) {
        $query = "insert into comments ( UserID, CommentContent, TimePosted, pageID) values ( $user_id, '" . mysqli_real_escape_string($con, $comment_to_post) . "' , '$date', $page_id)";
        $response = mysqli_query($con, $query);
        if (!$response) {
            echo $query;
            die('Invalid query: ' . mysqli_error($con));
        }
    }
   
}
header('Location: ../pages/' . $page_name . '.php'); // pass back to page
exit;
?>
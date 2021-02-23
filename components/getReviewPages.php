<?php
require '../vendor/autoload.php';

function getReviewPages($con)
{
    $query = "select * from products";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $json;
        }
    }
}

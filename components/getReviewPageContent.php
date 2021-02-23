<?php
require '../vendor/autoload.php';

function getReviewPageContent($con, $productID)
{
    $query = "select * from products where productID = $productID limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $json = mysqli_fetch_assoc($result);
            return $json;
        }
    }
}

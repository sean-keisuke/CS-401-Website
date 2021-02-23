<?php
require '../vendor/autoload.php';

function getLSProduct($con, $productID)
{
    $product = new Product;
    //read from database
    $query = "select * from lonestarproduct where productID = $productID limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $json = mysqli_fetch_assoc($result);

            $product->productURL = $json["productURL"];
            $product->productName = $json["productTitle"];
            $product->productPrice = $json["productPrice"];
            $product->productStarReview = $json["productReview"];
            $product->storeName = "Lonestar Percussion";
            $product->logoURL = ' /images/Lone-Star-Percussion.png';
            $product->logoAlt = "Lonestar-Percussion-logo";
            return $product;
        }
    }
}
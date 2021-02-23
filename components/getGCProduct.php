<?php
require '../vendor/autoload.php';

function getGCProduct($con, $productID)
{
    $product = new Product;
    //read from database
    $query = "select * from guitarcenterproduct where productID = $productID limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $json = mysqli_fetch_assoc($result);

            $product->productURL = $json["productURL"];
            $product->productName = $json["productTitle"];
            $product->productPrice = $json["productPrice"];
            $product->productStarReview = $json["productReview"];
            $product->storeName = "Guitar Center";
            $product->logoURL = ' /images/Guitar_Center_logo.png';
            $product->logoAlt = "Guitar-Center-logo";
            return $product;
        }
    }
}

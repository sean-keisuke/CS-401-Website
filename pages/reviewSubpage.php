<?php
include('../components/getSWProduct.php');
include('../components/getLSProduct.php');
include('../components/getAZProduct.php');
include('../components/getGCProduct.php');
include('../components/getReviewPageContent.php');

include("../components/connection.php");
include("../components/util.php");
session_start();
$user_data = check_login($con);
$productID = $_GET['productID'];

$reviewPage = getReviewPageContent($con, $productID);
$singleReviewProductImg = $reviewPage["productImage"];
$singleReviewTitle = $reviewPage["productTitle"];
$singleReviewContent = $reviewPage["productDescription"];


class Product
{
    public $productName;
    public $productPrice;
    public $productStarReview;
    public $productURL;
    public $logoURL;
    public $logoAlt;
    public $storeName;
};

$shop_response = array();

$steve_weiss_response = getSWProduct($con, $productID);
if ($steve_weiss_response) {
    array_push($shop_response, $steve_weiss_response);
}

$lonestar_response = getLSProduct($con, $productID);
if ($lonestar_response) {
    array_push($shop_response, $lonestar_response);
}

$amazon_response = getAZProduct($con, $productID);
if ($amazon_response) {
    array_push($shop_response, $amazon_response);
}

$guitar_center_response = getGCProduct($con, $productID);
if ($guitar_center_response) {
    array_push($shop_response, $guitar_center_response);
}

function sort_shops_by_prices($a, $b)
{
    if ($a->productPrice == $b->productPrice) {
        return 0;
    }
    return ($a->productPrice < $b->productPrice) ? -1 : 1;
}

usort($shop_response, 'sort_shops_by_prices');

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/reviewSubpages.css">
</head>

<body>
    <?php require_once "../nav.php"; ?>
    <div id="content">
        <div id="review-subpage">
            <div class="background">
                <h1> <?php echo $singleReviewTitle ?> </h1>
                <div class="reviews-container">
                    <div class="site-review">
                        <img src=<?php echo $singleReviewProductImg ?>>
                        <div class="site-review-text">
                            <p>
                                <?php echo $singleReviewContent ?>
                            </p>
                        </div>
                    </div>
                    <h2>BUY THIS NOW!</h2>
                    <div class="shop-info-container">
                        <?php
                        foreach ($shop_response as $store_res) {
                        ?>
                            <div class="single-shop-info">
                                <a href=<?php echo $store_res->productURL ?>>
                                    <div class="shop-content">
                                        <img class="store-logo" src=<?php echo $store_res->logoURL ?> alt=<?php echo $store_res->logoAlt ?>>
                                        <h3>
                                            <?php echo $store_res->storeName ?>:
                                        </h3>
                                        <p>
                                            Price: <?php echo $store_res->productPrice ?>
                                        </p>
                                        <p>
                                            Current Rating: <?php echo substr($store_res->productStarReview, 0, 3) ?> Stars
                                        </p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
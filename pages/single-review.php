<?php
include('../nav.php');
include('../components/getSWProduct.php');
include('../components/getLSProduct.php');
include('../components/getAZProduct.php');
include('../components/getGCProduct.php');

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

$singleReviewTitle = 'Innovative Field Series FSPR2 Paul Rennick Marching Snare Drumsticks Review';
$singleReviewContent = "SAMPLE REVIEW OF THE DRUMSTICK. IT'S PRETTY ALRIGHT! (get this info from sql backend)";

$shop_response = array();

$steveweissSlug = 'innovative-paul-rennick-fspr2';
$steve_weiss_response = getSWProduct($steveweissSlug);
if ($steve_weiss_response) {
    array_push($shop_response, $steve_weiss_response);
}

$lonestarSlug = 'Sticks-Mallets/Marching-Snare-Drum-Sticks/Innovative-Percussion-FSPR2';
$lonestar_response = getLSProduct($lonestarSlug);
if ($steve_weiss_response) {
    array_push($shop_response, $lonestar_response);
}

// $amazonSlug = 'Innovative-Percussion-Drumstick-inch-FSPR2/dp/B001LG9Y04/ref=sr_1_2?crid=AXJ9GUSINWI2&dchild=1&keywords=paul+rennick+snare+sticks&qid=1611166198&sprefix=paul+rennick+%2Caps%2C368&sr=8-2';
// $amazon_response = getAZProduct($amazonSlug);
// if ($amazon_response) {
//     array_push($shop_response, $amazon_response);
// }

$guitarCenterSlug = 'Innovative-Percussion/Paul-Rennick-Signature-Marching-Drumsticks-Hickory-1274228076721.gc';
$guitar_center_response = getGCProduct($guitarCenterSlug);
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
    <link rel="stylesheet" type="text/css" href="/css/single-reviews.css">
</head>

<body>
    <?php getNav(); ?>
    <div id="content">
        <div id="review-subpage">
            <div class="background">
                <h1> <?php echo $singleReviewTitle ?> </h1>
                <div class="reviews-container">
                    <div class="site-review">
                        <img src="//s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_large.jpg" srcset="//s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_thumb.jpg 155w,
                        //s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_large.jpg 315w,
                        //s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_popup.jpg 575w" sizes="(min-width: 569px) 315px,
                        96vw" width="315" height="315" alt="innovative field series fspr2 paul rennick marching snare drumsticks">
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
<?php
include('../nav.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/reviews.css">
</head>

<body>
    <?php getNav(); ?>
    <div id="content">
        <div id="review-page">
            <div class="background">
                <h1> Find a review of your favorite product today! </h1>
                <div class="reviews-container">
                    <?php
                    for ($i = 0; $i < 6; $i++) { // change later for each product available in backend
                    ?>
                        <div class="single-review-info">
                            <a href="/pages/single-review.php">
                                <?php // get this from backend 
                                ?>
                                <img class="store-logo" src="//s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_large.jpg" srcset="//s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_thumb.jpg 155w,
                        //s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_large.jpg 315w,
                        //s3.amazonaws.com/images.static.steveweissmusic.com/products/images/uploads/1108889_30386_popup.jpg 575w" sizes="(min-width: 569px) 315px,
                        96vw" width="315" height="315" alt="innovative field series fspr2 paul rennick marching snare drumsticks">
                                <?php // get this from backend 
                                ?>
                                <h3>
                                    Sample Product:
                                </h3>
                                <?php // get this from backend 
                                ?>
                                <p>
                                    tag 1
                                </p>
                                <?php // get this from backend 
                                ?>
                                <p>
                                    tag 2
                                </p>
                                <?php // get this from backend 
                                ?>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
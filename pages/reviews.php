<?php
include("../components/connection.php");
include("../components/util.php");
include("../components/getComments.php");
include("../components/getReviewPages.php");

session_start();
$user_data = check_login($con);
$page_id = 3;
$comments = getCommentSection($con, $page_id);
$reviewSubpages = getReviewPages($con);
$page_name = "reviews";

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/reviews.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
</head>

<body>
    <?php require_once "../nav.php"; ?>
    <div id="content">
        <div id="review-page">
            <div class="background">
                <h1> Find a review of your favorite product today! </h1>
                <div class="reviews-container">
                    <?php foreach ($reviewSubpages as &$subpage) {
                    ?>
                        <div class="review-subpage-info">
                            <a href="/pages/reviewSubpage.php?productID=<?php echo $subpage["productID"] ?>">
                                <img class="store-logo" src=<?php echo $subpage["productImage"]; ?>>
                                <h3 class="product-name">
                                    <?php echo $subpage["productTitle"]; ?>
                                </h3>
                                <p class="tags">
                                    <?php echo $subpage["pageTag"]; ?>
                                </p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <h3 class="next-review">What should we review next?</h3>
                <?php require_once "../components/comments.php"; ?>
            </div>
        </div>
    </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
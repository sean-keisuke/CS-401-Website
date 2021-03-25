<style>
    <?php include '../css/slideshow.css'; ?>
</style>

<?php
function getSlideShow($imgArray)
{
?>
    <div class="slideshow-container">
        <?php
        foreach ($imgArray as $image) {
        ?>
            <div class="mySlides">
                <img class="myPictures" src=<?php echo $image->imgURL; ?> alt=<?php echo $image->imgAlt ?>role="button">
                <div class="hide slide-img-description"><?php echo $image->imgDesc ?></div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
?>
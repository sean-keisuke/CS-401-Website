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
                <img class="myPictures" src=<?php echo $image->imgURL; ?> alt=<?php echo $image->imgAlt ?> onclick="plusDivs(1)" role="button">
                <div class="hide slide-img-description" onclick="plusDivs(1)"><?php echo $image->imgDesc ?></div>
            </div>
        <?php
        }
        ?>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var picArray = document.getElementsByClassName("mySlides");
            var descArray = document.getElementsByClassName("hide");
            if (n > picArray.length) {
                slideIndex = 1 // reset back to the first slide
            }
            if (n < 1) {
                slideIndex = picArray.length
            }
            for (i = 0; i < picArray.length; i++) {
                picArray[i].style.display = "none";

            }
            picArray[slideIndex - 1].style.display = "block";
        }
    </script>
<?php
}
?>
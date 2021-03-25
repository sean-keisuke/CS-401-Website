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

    <script>
        $(function () {
            var slideIndex = 1;
            showDivs(slideIndex);
            $(".mySlides").click(function() {
                showDivs(slideIndex += 1);
            })

            function showDivs(n) {
                var i;
                var picArray = $(".mySlides");
                if (n > picArray.length) {
                    slideIndex = 1 // reset back to the first slide
                    console.log(slideIndex)
                }
                if (n < 1) {
                    slideIndex = picArray.length
                }
                for (i = 0; i < picArray.length; i++) {
                    $(picArray[i]).css("display", "none")
                }
                $(picArray[slideIndex - 1]).css("display", "block")
            }
        })
    </script>
<?php
}
?>
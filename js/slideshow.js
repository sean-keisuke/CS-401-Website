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
<?php
include('./slideshow.php');

function getAboutMePics() {
    class images
    {
        public $imgURL;
        public $imgAlt;
        public $imgDesc;
    };
    
    $img1 = new images();
    $img1->imgURL = ' /images/Rocky.png';
    $img1->imgAlt = 'rocky-teach';
    $img1->imgDesc = 'Rocky Mountain High School Fall 2020';
    
    $img2 = new images();
    $img2->imgURL = ' /images/MVHS.png';
    $img2->imgAlt = 'mv-teach';
    $img2->imgDesc = 'Mountain View High School Winter 2020';
    
    $img3 = new images();
    $img3->imgURL = ' /images/Btal.png';
    $img3->imgAlt = 'btal';
    $img3->imgDesc = 'The Battalion Drum and Bugle Corps 2019';
    
    $imgArray = array($img1, $img2, $img3);
    
    getSlideShow($imgArray);
}


?>
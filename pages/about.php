<?php 
    include('../components/aboutMeImages.php');
    include('../components/slideshow.php');
    include('../nav.php');
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/PGR.css">
    <link rel="stylesheet" type="text/css" href="/css/about.css">
</head>

<body>
    <?php getNav(); ?>
    <div id="content">
        <div id="about-page">
            <div class="background">
                <h1> About Marching Percussion Gear Reviews </h1>
                <div class="about-us-container">
                    <div class="about-us-text-container">
                        <p>
                            Started by Sean Mullarkey, a review site that was made for CS401.
                            Sean has been playing percussion for over a decade with a wide background in teaching and performing.
                            </br></br>
                            He has performed with:
                            <li>Boise State University</li>
                            <li>University of Idaho</li>
                            <li>The Battalion Drum and Bugle Corps</li>
                            </br></br>
                            And has taught drumlines at:
                            <li>
                                <a href="https://www.westada.org/RMHS">
                                    Rocky Mountain High School
                                </a>
                            </li>
                            <li>
                                <a href="https://www.westada.org/Domain/57">
                                    Mountain View High School
                                </a>
                            </li>
                            <li>
                                <a href="https://armadacorps.org/">
                                    Rhythm Armada Drumline
                                </a>
                            </li>
                        </p>
                    </div>
                    <div class="about-us-images">
                        <label for="slideshow" class="slideshow-label">Click on image to see more</label>
                        <div id="slideshow">
                            <?php
                                 getAboutMePics();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "../footer.php"; ?>
</body>

</html>
<?php
$pageID = 1;
?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="/css/PGR.css">
  <link rel="stylesheet" type="text/css" href="/css/index.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
</head>

<body>
  <div id="homepage">
    <div class="background-video">
      <video autoplay muted loop id="myVideo">
        <source src="/images/MileHigh.mp4" type="video/mp4">
      </video>
    </div>
    <div class="logo">
      <img src="/images/PGR-logo.png" alt="logo">
    </div>
    <div id="content">
      <h1>Marching Percussion Gear Reviews</h1>
      <div class="page-links">
        <a href="/pages/reviews.php">ENTER SITE!</a>
      </div>
    </div>
    <?php require_once "footer.php"; ?>
  </div>
</body>

</html>
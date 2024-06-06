<!doctype html>

<?php
$is_showNumber = 0;
?>

<html lang="en">
  <head>
    <?php echo("<title>$page_title</title>");?>
    <meta name="keywords" content="<?php echo("$meta_keywords")?>">
    <meta name="description" content="<?php echo("$meta_content")?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="author" content=""> -->
    
    <link rel="icon" href="images/Logo.png">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/custom.css" media="all">-->
    <link rel="preload" href="css/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/custom.css"></noscript>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/custom-animation.css">


  <title>SOK Academy</title>
  </head>

  <body>
    <div id="loading" class="animate__animated animate__fadeIn">
      <img id="loading-image" src="css/loader.gif" alt="Loading..." />
    </div>
    <header>
      <div class="container">
          <div class="row reveal">
            <div class="col-md-2 LogoCol">
                <a href="index">
                <img src="images/Logo.png" alt="SOK Academy Logo">
                </a>
            </div>
            <div class="col-7 MenuCol">
                <ul class="main-menu">
                <li <?php echo ($thisPage == 'Home') ? ' class="currentPage"' : ''; ?>><a href="index">Home</a></li>
                <li <?php echo ($thisPage == 'Coaches') ? ' class="currentPage"' : ''; ?>><a href="coaches">Coaches</a></li>
                <li <?php echo ($thisPage == 'Packages') ? ' class="currentPage"' : ''; ?>><a href="packages">Packages</a></li>
                <li <?php echo ($thisPage == 'Shop') ? ' class="currentPage"' : ''; ?>><a href="#">Shop</a></li>
                <li <?php echo ($thisPage == 'Sessions And Locations') ? ' class="currentPage"' : ''; ?>><a href="sessions-and-locations">Sessions & Locations</a></li>
                <li <?php echo ($thisPage == 'Holiday Courses') ? ' class="currentPage"' : ''; ?>><a href="holiday-courses">Holiday Courses</a></li>
                <li <?php echo ($thisPage == 'Contact Us') ? ' class="currentPage"' : ''; ?>><a href="contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 RightCol">
                <a href="#"><i class="fa-solid fa-magnifying-glass IconMain"></i></a>
                <a href="sign-up"><i class="fa-regular fa-user IconMain"></i></a> 
                <a href="contact-us" class="BtnMain">Get A Quote</a>
            </div>
          </div>
      </div>
    </header>
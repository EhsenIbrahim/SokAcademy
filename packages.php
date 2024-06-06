<?php $page_title = "Training Packages - Goalkeeper coaching for goalkeepers, by goalkeepers"; ?>
<?php $meta_keywords="Keyword"; ?>
<?php $meta_content=""; ?>
<?php $thisPage='Packages'; ?>

<?php include_once('includes/header.php'); ?>

    <!-- Start Banner -->

    <div id="BannerMain" class="Training-Packages">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <span class="01">Training</span>
              <span class="02">Packages</span>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!-- End Banner -->

    <!-- Start Packages -->

    <section id="PackagesSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="HeaderMain PrincingHeader">
                        <p class="reveal">We have a number of packages available to suit <a href="#">goalkeepers</a> of all levels, ages and abilities.</p>
                    </div>
                </div>
            </div>
            <div class="row reveal">
                <div class="col-md-4">
                    <div class="PrincingDiv Elite-Package">
                        <div class="Title">
                            <h2>Elite</h2>
                        </div>
                        <div class="Pricing-Txt">
                            <h2 class="Price">
                                &#163;80.00
                            </h2>
                            <p class="SubTxt">Per Month</p>
                        </div>
                        <div class="DescriptionTxt">
                            <p>Access to all sessions available to students age group Elite Sessions </p><br>
                            <p>Exclusive 20% discount code for the Oneglove Company</p>
                        </div>
                        <div class="PricingBtn">
                            <a href="#" class="BtnMain">Selected Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="PrincingDiv Basic-Package">
                        <div class="Title">
                            <h2>Basic Training</h2>
                        </div>
                        <div class="Pricing-Txt">
                            <h2 class="Price">
                                &#163;45.00
                            </h2>
                            <p class="SubTxt">Per Month</p>
                        </div>
                        <div class="DescriptionTxt">
                            <p>Training once a week </p><br>
                            <p>Exclusive 20% discount code for the Oneglove Company.</p>
                        </div>
                        <div class="PricingBtn">
                            <a href="#" class="BtnMain">Selected Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="PrincingDiv One-to-One-Package">
                        <div class="Title">
                            <h2>1 To 1's</h2>
                        </div>
                        <div class="Pricing-Txt">
                            <h2 class="Price">
                                &#163;/One off
                            </h2>
                            <p class="SubTxt">Per Month</p>
                        </div>
                        <div class="DescriptionTxt">
                            <p>In addition to current 1:1’s we will be offer 45 minute 1:1’s on a Saturday morning at Horsham FC from 11 a.m.</p>
                            <p>Please enquire for availability and pricing at <a href="mailto:sokgkoffice@gmail.com">sokgkoffice@gmail.com</a></p>
                        </div>
                        <div class="PricingBtn">
                            <a href="#" class="BtnMain">Selected Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Start Gallery -->
    <div class="GalleryImages InnerGallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="ImagesMain">
                        <a data-fancybox="gallery" href="images/PackageGallery01.jpg">
                          <img src="images/PackageGallery01.jpg" class="reveal" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ImagesMain">
                        <a data-fancybox="gallery" href="images/PackageGallery02.jpg">
                          <img src="images/PackageGallery02.jpg" class="reveal" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ImagesMain">
                        <a data-fancybox="gallery" href="images/PackageGallery03.jpg">
                          <img src="images/PackageGallery03.jpg" class="reveal" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ImagesMain">
                        <a data-fancybox="gallery" href="images/PackageGallery04.jpg">
                          <img src="images/PackageGallery04.jpg" class="reveal" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Contact Sec -->

    <section id="ContactSec" class="PackagesContactSec ShrinkBg reveal">
      <div class="container">
        <div class="HeaderMain">
          <h4 class="UpperHead reveal">CONTACT US TO BOOK YOUR</h4>
          <h2 class="reveal">FREE TASTER SESSION START <br>YOUR FOOTBALL JOURNEY</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="ContactForm InnerContact">
               <form action="sendmail" method="post">
                <div class="Inline">
                  <input type="text" name="f-name" required="" placeholder="Full Name*">
                  <input type="tel" name="phone-no" required="" placeholder="Phone*">
                </div>
                <input type="email" name="email" required="" placeholder="Email Address*">
                <textarea name="message" placeholder="Message"></textarea>
                <input type="submit" value="Submit Now">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Contact Sec -->

    <?php include_once('includes/footer.php'); ?>
<?php $page_title = "Contact Us - Goalkeeper coaching for goalkeepers, by goalkeepers"; ?>
<?php $meta_keywords="Keyword"; ?>
<?php $meta_content=""; ?>
<?php $thisPage='Contact Us'; ?>

<?php include_once('includes/header.php'); ?>

    <!-- Start Banner -->

    <div id="BannerMain" class="Contact-Us">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <span class="01">Contact</span>
              <span class="02">Us</span>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!-- End Banner -->

    <!-- Start Contact Sec -->

    <section id="ContactSec" class="Contact-Page">
      <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="HeaderMain LeftHeader reveal">
                    <h2>Get In Touch</h2>
                    <p>Here are just a few testimonials from coaches and goalkeepers that we have worked with at SOK Pro Goalkeeping</p>
                </div>
                <div class="Contact-Details reveal">
                    <div class="IconsDiv">
                        <div class="IconMain">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="IconDetails">
                            <h4 class="Title">Phone:</h4>
                            <a href="tel:07738 282471">07738 282471</a>
                        </div>
                    </div>

                    <div class="IconsDiv">
                        <div class="IconMain">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="IconDetails">
                            <h4 class="Title">Email Address:</h4>
                            <a href="mailto:sokgkoffice@gmail.com">sokgkoffice@gmail.com</a>
                        </div>
                    </div>

                    <div class="IconsDiv">
                        <div class="IconMain">
                            <div class="MessangerImg">
                                <img src="images/MessengerIcon.png" alt="">
                            </div>
                        </div>
                        <div class="IconDetails">
                            <h4 class="Title">Messenger:</h4>
                            <a href="https:m.me/sokacademy">m.me/sokacademy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="ContactForm Contact-Page reveal">
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

    <div class="Map-Location reveal">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16831.020699726614!2d0.24415411328319112!3d51.16478132013877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df45ed6784899d%3A0xd3a40059fcb6be6d!2sSouthborough%2C%20UK!5e0!3m2!1sen!2s!4v1713964015233!5m2!1sen!2s" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- End Contact Sec -->

    <?php include_once('includes/footer.php'); ?>
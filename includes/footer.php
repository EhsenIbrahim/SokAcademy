<footer>
      <div class="FooterOuter reveal">
        <div class="container">
          <div class="row">
            <div class="col-md-3 ColMain1 reveal">
              <div class="LogoDiv">
                <div class="logoImg">
                  <a href="#">
                    <img src="images/Logo.png" alt="">
                  </a>
                </div>
                <div class="ContentMain">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. </p>
                </div>
                <div class="SocialIcons">
                  <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 ColMain2 reveal">
              <div class="LinksMainDiv QuickLinks">
                <div class="TitleMain">
                  <h2>Quick Links</h2>
                </div>
                <div class="FooterLinks">
                  <ul>
                    <li <?php echo ($thisPage == 'Home') ? ' class="current-page"' : ''; ?>><a href="index">Home</a></li>
                    <li <?php echo ($thisPage == 'Coaches') ? ' class="current-page"' : ''; ?>><a href="coaches">Coaches</a></li>
                    <li <?php echo ($thisPage == 'FAQ') ? ' class="current-page"' : ''; ?>><a href="faq">FAQ's</a></li>
                    <li <?php echo ($thisPage == 'Forms') ? ' class="current-page"' : ''; ?>><a href="#">Forms</a></li>
                    <li <?php echo ($thisPage == 'Holiday Courses') ? ' class="current-page"' : ''; ?>><a href="holiday-courses">Holiday Courses</a></li>
                    <li <?php echo ($thisPage == 'New Form') ? ' class="current-page"' : ''; ?>><a href="#">New Form</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 ColMain3 reveal">
              <div class="LinksMainDiv UsefulLinks">
                <div class="TitleMain">
                  <h2>Useful Links</h2>
                </div>
                <div class="FooterLinks">
                  <ul>
                    <li <?php echo ($thisPage == 'Packages') ? ' class="current-page"' : ''; ?>><a href="packages">Packages</a></li>
                    <li <?php echo ($thisPage == 'Sessions And Locations') ? ' class="current-page"' : ''; ?>><a href="sessions-and-locations">Sessions &amp; Locations</a></li>
                    <li <?php echo ($thisPage == 'Testimonials') ? ' class="current-page"' : ''; ?>><a href="#">Testimonials</a></li>
                    <li <?php echo ($thisPage == 'Contact Us') ? ' class="current-page"' : ''; ?>><a href="contact-us">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-3 ColMain4 reveal">
              <div class="LinksMainDiv GetInTouch">
                <div class="TitleMain">
                  <h2>Get In Touch</h2>
                </div>
                <div class="FooterLinks">
                  <ul>
                    <li><a href="mailto:sokgkoffice@gmail.com"><i class="fa-regular fa-envelope"></i>sokgkoffice@gmail.com</a></li>
                    <li><a href="tel:07738282471"><i class="fa-solid fa-phone"></i>07738 282471</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="CopyrightRow">
            <div class="ContentMain reveal">
              <p>Copyright © 2024 <a href="#">SOk Goalkeeping.</a> All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- End Footer -->

    <!-- Start Back To Top -->

    <a id="button"></a>

    <!-- End Back To Top -->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/7d11c6dc57.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Counter Script -->
    <script>

      const counters = document.querySelectorAll('.counter');
      const speed = 1000;

      counters.forEach(counter => {
          const updateCount = () => {
              const target = +counter.getAttribute('data-target');
              let count = +counter.innerText;

              const inc = target / speed;

              if (count < target) {
                  counter.innerText = Math.ceil(count + inc);

                  setTimeout(updateCount, 80);
              } else {
                  counter.innerText = target;
              }
          };

          updateCount();
      });

    </script>
    <!-- End Counter Script -->

    <!-- Back to Top Button -->
    <script>
        var btn = $('#button');

      $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
          btn.addClass('show');
        } else {
          btn.removeClass('show');
        }
      });

      btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
      });
    </script>
    <!-- End to Top Button -->

    <!-- Start Testimonials -->
    <script>
      $(' .owl_1').owlCarousel({
        loop:true,
        margin:0,	
        responsiveClass:true,
        autoplayHoverPause:true,
        autoplay:false,
        slideSpeed: 3000,
        paginationSpeed: 400,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:2,
                nav:true,
                loop:true
            },
            600:{
                items:3,
                nav:true,
                loop:true
            },
            1000:{
                items:6,
                nav:true,
                loop:true
            }
        }
      })

    $(document).on("click",".item li a",function(e){
    $(".owl-stage .owl-item li a ").removeClass("active")
    $(this).addClass("active")
    var item = $(this).prop("hash");
    item = item.replace("#" , "")
    $(".tab-content .tab-pane").removeClass("active")
    $("#"+item).addClass("active")
    
    })

    </script>
    <!-- End Testimonials -->
    
    <!-- Start Active Page -->
    
      <script>
      
      var active_menu = $('header li a').click(function(){
          active_menu.removeClass('active');
          $(this).addClass('active');
      });
      
      </script>

    <!-- End Active Page -->

    <!-- Start Loader -->
    <script>
      $(window).on('load', function () {
        $('#loading').show();
    
        setTimeout(function() {
          $('#loading').hide();
        }, 100); 
      }) 

    </script>
    
    <!-- End Loader -->

  </body>
</html>
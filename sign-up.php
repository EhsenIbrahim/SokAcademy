<?php $page_title = "Sign Up - Goalkeeper coaching for goalkeepers, by goalkeepers"; ?>
<?php $meta_keywords="Keyword"; ?>
<?php $meta_content=""; ?>
<?php $thisPage='Sign Up'; ?>

<?php include_once('includes/header.php'); ?>

    <!-- Start Banner -->

    <div id="BannerMain" class="Sign-up-bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <span class="01">Sign</span>
              <span class="02">Up</span>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!-- End Banner -->

    <section id="Sign-Sec" class="Sign-up-page reveal">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Form-Div">
                        <div class="Sign-Up-Form">
                            <form action="">
                                <div class="Inline">
                                    <input type="text" placeholder="First Name" name="f-name" required="">
                                    <input type="text" placeholder="Last Name" name="l-name" required="">
                                </div>
                                <input type="email" placeholder="Email" required="">
                                <input type="password" placeholder="password" required="" name="Pass">
                                <input type="submit" value="Sign Up">
                            </form>
                        </div>
                        <div class="OrTxt">
                            <p>OR</p>
                        </div>
                        <div class="Google-Account">
                            <div class="GoogleBtn">
                                <a href="#"><img src="images/google-icon.png" alt="icon">Create Account with Email</a>
                            </div>
                        </div>
                        <div class="No-Account-Div">
                            <p>Don’t have an account yet ? <a href="#">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php'); ?>
<section class="bg-fixed bg-grey wide-80 contacts-section division" style="margin-top: 130px;">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-md-10 offset-md-1 section-title">

                <!-- Title 	-->
                <h2 class="h3-lg">Log into Account</h2>


            </div>
        </div>
        <!-- END SECTION TITLE -->


        <!-- CONTACT FORM -->
        <div class="row">
            <div id="signup" class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                <div class="form-holder">
                    <form name="contactform" method="post" action="repository/process-account.php" class="row contact-form">

                        <div class="col-lg-12">
                            <input type="text" name="emailL" class="form-control email"
                                   placeholder="Email Address*">
                        </div>

                        <div class="col-lg-12">
                            <input type="password" name="passwordL" class="form-control password"
                                   placeholder="Password*">
                        </div>


                        <div class="col-md-12">
                            <a href="?forgot-password">Forgot password?</a>
                        </div>

                        <!-- Contact Form Button -->
                        <div class="col-lg-12 m-top-15 form-btn text-center">
                            <button type="submit" name="loginBtn" class="btn btn-lightgreen submit" style="width: 200px; background: #3b7715; border:none">Sign In</button>
                        </div>

                        <div class="col-md-12 text-center pt-3">
                            <a href="?register">New account? Register</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        <!-- END CONTACT FORM -->


    </div>
    <!-- End container -->
</section>
<section class="bg-fixed bg-grey wide-80 contacts-section division" style="margin-top: 130px;">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-md-10 offset-md-1 section-title">

                <!-- Title 	-->
                <h2 class="h3-lg">Verify your account</h2><br/>
                    <p>Enter the Verification Code that was sent to your email address</p>

            </div>
        </div>
        <!-- END SECTION TITLE -->


        <!-- CONTACT FORM -->
        <div class="row">
            <div id="signup" class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                <div class="form-holder">
                    <form name="contactform" method="post" action="repository/process-account.php" class="row contact-form">

                        <div class="col-lg-12">
                            <input type="number" name="code" class="form-control code"
                                   placeholder="Verification Code*">
                        </div>

                        <!-- Contact Form Button -->
                        <div class="col-lg-12 m-top-15 form-btn text-center">
                            <button type="submit" name="verifyBtn" class="btn btn-lightgreen submit" style="width: 200px; background: #3b7715; border: none">Verify</button>
                        </div>

                        <div class="col-md-12 text-center pt-3">
                            <a href="?login">Login into another account</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- END CONTACT FORM -->


    </div>
    <!-- End container -->
</section>
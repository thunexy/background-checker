<section class="bg-fixed bg-grey wide-80 contacts-section division" style="margin-top: 130px;">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-md-10 offset-md-1 section-title">

                <!-- Title 	-->
                <h2 class="h3-lg">Sign up to create an account</h2>


            </div>
        </div>
        <!-- END SECTION TITLE -->


        <!-- CONTACT FORM -->
        <div class="row">
            <div id="signup" class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                <div class="form-holder">
                    <form method="post" action="repository/process-account.php" class="row contact-form">

                        <div class="col-lg-12">
                            <input type="text" name="nameR" class="form-control nameR"
                                   placeholder="Full Name*">
                        </div>

                        <div class="col-lg-12">
                            <input type="text" name="emailR" class="form-control emailR"
                                   placeholder="Email Address*">
                        </div>

                        <div class="col-lg-12">
                            <input type="password" name="passwordR" class="form-control passwordR"
                                   placeholder="Password*">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="addressR" class="form-control addressR"
                                   placeholder="Address*">
                        </div>
                        <div class="col-lg-12">
                            <select class="form-control" name="categoryR" required=""
                                    data-bv-field="categoryR" style="height: 54px;">
                                <option>Select Account Category...</option>
                                <option value="admin">Admin</option>
                                <option value="agent">Agent</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="coyR" class="form-control coyR"
                                   placeholder="Company Name*">
                        </div>


                        <!-- Contact Form Button -->
                        <div class="col-lg-12 m-top-15 form-btn text-center">
                            <button type="submit" name="registerBtn" class="btn btn-lightgreen submit" style="width: 200px; background: #3b7715; border: none">Create Account</button>
                        </div>

                        <div class="col-md-12 text-center pt-3">
                            <a href="?login">Already have an account? Login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- END CONTACT FORM -->


    </div>
    <!-- End container -->
</section>
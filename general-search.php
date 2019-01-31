<!-- CONTACTS-1
        ============================================= -->
<section id="contact" class="bg-fixed bg-grey wide-80 contacts-section division" style="margin-top: 130px;">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-md-10 offset-md-1 section-title">

                <!-- Title 	-->
                <h2 class="h2-lg">Alpha-Check General Search</h2>

                <!-- Text -->
                <p>Fill the following fields to search for the details of a user. At least two fields are needed for the
                    search.</p>


            </div>
        </div>
        <!-- END SECTION TITLE -->


        <!-- CONTACT FORM -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="form-holder">
                    <form name="" action="repository/process-search.php" method="post" class="row contact-form">

                        <div class="col-sm-3">
                            <label for="name">Full Name</label>
                            <input id="name" type="text" name="name" class="form-control"/>
                        </div>
                        <div class="col-sm-3">
                            <label for="name">Year of Birth</label>
                            <input id="dob" type="number" placeholder="YYYY" name="dob" maxlength="4"
                                   class="form-control"/>
                        </div>
                        <div class="col-sm-3">
                            <label for="name">Gender</label>
                            <select id="gender" name="gender" class="form-control" style="height: 54px;">
                                <option value="">Select Gender...</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="name">Post Code</label>
                            <input type="text" name="postcode" class="form-control" id="postcode"
                                   placeholder="Enter Post Code">
                        </div>
                        <div class="col-sm-12 hidden"
                        <label for="name">Residential Address</label>
                        <textarea name="address" class="form-control" id="address"
                                  placeholder="Enter Address"></textarea>
                </div>
                <div class="row col-sm-12" style="margin: 20px auto">
                    <div class="col-sm-4" style="margin: 0 auto">
                        <button id="basic_searchBtn" name="basic_searchBtn" type="submit" style="border: 2px solid #28a745!important"
                                class="btn btn-default form-control bg-success text-white">General Search
                        </button>
                    </div>
                </div>

                <div class="col-md-12 text-center pt-3">
                    <a href="?advanced-search">Switch to Advanced Search</a>
                </div>

                </form>
            </div>
        </div>
    </div>
    <!-- END CONTACT FORM -->


    </div>
    <!-- End container -->
</section>
<!-- END CONTACTS-1 -->



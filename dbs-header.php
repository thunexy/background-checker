<header id="header" class="header">
    <nav class="navbar fixed-top navbar-light navbar-expand-lg bg-tra scroll" style="background: #fff">
        <div class="container">


            <!-- LOGO IMAGE -->
            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 260 x 60 pixels) -->
            <a href="" class="navbar-brand logo-white"><h4>ALPHA-CHECK</h4><i>… background checks &amp; enquiries for employees</i></a>
            <a href="" class="navbar-brand logo-black"><h4>ALPHA-CHECK</h4><i>… background checks &amp; enquiries for employees</i></a>


            <!-- Responsive Menu Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Navigation Menu -->
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php if(Session::checkSession("users")) {echo 'app.php?general-search'; } else { echo 'app.php?login';}?>">DBS-Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact Us</a></li>

                    <?php if(Session::checkSession("users")) echo '<li class="nav-item" style="background: #970a0a">
					  <a href="repository/logout.php" class="nav-link text-white">Logout</a>
					</li>';?>

                </ul>
            </div>
            <!-- End Navigation Menu -->


        </div>
        <!-- End container -->
    </nav>
    <!-- End navbar  -->
</header>
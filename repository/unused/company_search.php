<?php
include "framework/otherClasses.php";
Session::startSession();
$resultSize = count(Session::sessionArray("results"));
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DBS</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
    <meta name="author" content="itembridge.com">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

    <!-- Plagins CSS -->
    <link rel="stylesheet" href="css/buttons/buttons.css">
    <link rel="stylesheet" href="css/buttons/social-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jslider.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/video-js.min.css">
    <link rel="stylesheet" href="css/morris.css">
    <link rel="stylesheet" href="css/royalslider/royalslider.css">
    <link rel="stylesheet" href="css/royalslider/skins/minimal-white/rs-minimal-white.css">
    <link rel="stylesheet" href="css/layerslider/layerslider.css">
    <link rel="stylesheet" href="css/ladda.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/jquery.scrollbar.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/customizer/pages.css">

    <!-- IE Styles-->
    <link rel='stylesheet' href="css/ie/ie.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel='stylesheet' href="css/ie/ie8.css">
    <![endif]-->
</head>
<body>
<div class="page-box">
    <div class="page-box-content">

        <?php include "header.php"; ?>

        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="index.php">DBS</a></li>
                    <li><a href="company_search.php">Company Search</a></li>

                </ul>
            </div>
        </div>
        <!-- .breadcrumb-box -->

        <section id="main" class="page" style="padding: 30px 0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 30px">
                        <h2>Company-Search Results</h2>

                        <p>Here is the list of individuals that match the searched parameters.</p>
                    </div>
                    <article class="col-sm-12 col-md-12 content">
                        <div class="my-account">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered text-left my-orders-table">
                                    <thead>
                                    <tr class="first last">
                                        <th>#</th>
                                        <th>Full Names</th>
                                        <th>Certificate Number</th>
                                        <th>Date of Issue</th>
                                        <th>Counter Signatory Details</th>
                                        <th>Employer</th>
                                        <th>Position</th>
                                        <th>Employment Details</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($resultSize == 0){
                                        echo "<tr><td colspan='9' style='text-align: center'>No record found</td></tr>";
                                    }
                                    else{
                                        for($i=0; $i < $resultSize; $i++){
                                            echo "<tr>";
                                            echo "<td>". ($i + 1) ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["name"] ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["certificate_no"] ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["doi"] ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["countersignatory_details"] ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["employer"] ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["position"] ."</td>";
                                            echo "<td>". Session::sessionArray("results")[$i]["employment_details"] ."</td>";
                                            echo "<td class='text-center last'><div class='btn-group'><a style='white-space:nowrap' href='user_info.php?req=".Session::sessionArray("results")[$i]["user_id"]."' class='btn btn-sm btn-info'>Basic Information</a><br/><br/><a style='white-space:nowrap' href='user_info.php?req=".Session::sessionArray("results")[$i]["user_id"]."' class='btn btn-sm btn-danger'>Criminal Records</a></div></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination-box">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><span>1</span></li>
                                    <!--                            <li><a href="#">2</a></li>-->
                                    <!--                            <li><a href="#">3</a></li>-->
                                    <!--                            <li class="disabled"><a href="#">...</a></li>-->
                                    <!--                            <li><a href="#">9</a></li>-->
                                    <li class="disabled"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                <i class="pagination-text">Displaying <?php echo ($resultSize>0)? 1: 0?> to <?php echo "$resultSize (of $resultSize post(s))";?></i>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/price-regulator/jshashtable-2.1_src.js"></script>
        <script src="js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
        <script src="js/price-regulator/tmpl.js"></script>
        <script src="js/price-regulator/jquery.dependClass-0.1.js"></script>
        <script src="js/price-regulator/draggable-0.1.js"></script>
        <script src="js/price-regulator/jquery.slider.js"></script>
        <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script src="js/jquery.imagesloaded.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.selectBox.min.js"></script>
        <script src="js/jquery.royalslider.min.js"></script>
        <script src="js/jquery.tubular.1.0.js"></script>
        <script src="js/SmoothScroll.js"></script>
        <script src="js/country.js"></script>
        <script src="js/spin.min.js"></script>
        <script src="js/ladda.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/raphael.min.js"></script>
        <script src="js/video.js"></script>
        <script src="js/pixastic.custom.js"></script>
        <script src="js/livicons-1.3.min.js"></script>
        <script src="js/layerslider/greensock.js"></script>
        <script src="js/layerslider/layerslider.transitions.js"></script>
        <script src="js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
        <script src="js/revolution/jquery.themepunch.plugins.min.js"></script>
        <script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
        <script src="js/bootstrapValidator.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jplayer/jquery.jplayer.min.js"></script>
        <script src="js/jplayer/jplayer.playlist.min.js"></script>
        <script src="js/jquery.scrollbar.min.js"></script>
        <script src="js/main.js"></script>

</body>
</html>
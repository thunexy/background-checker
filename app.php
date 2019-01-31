<?php
@session_start();
include "repository/framework/otherClasses.php";
?>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content=""/>
    <meta name="description" content="Ajooo"/>
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- SITE TITLE -->
    <title>Alpha Check</title>

    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="css/fa-svg-with-js.css" rel="stylesheet">
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>


<body id="home">
<!-- PRELOADER
    ============================================= -->
<div id="loader-wrapper">
    <div id="loader">
        <ul class="cssload-flex-container">
            <li><span class="cssload-loading"></span></li>
        </ul>
    </div>
</div>


<!-- PAGE CONTENT
    ============================================= -->
<div id="page" class="page">


    <!-- HEADER
        ============================================= -->
    <?php
    include_once "dbs-header.php";

    $query = $_SERVER["QUERY_STRING"];
    if (!Session::checkSession("users") && $query == "login") {
        include "login.php";
    } elseif ($query == "register") {

        include "register.php";
    } elseif ($query == "forgot-password") {

        include "forgot-password.php";
    } elseif ($query == "verify-account") {

        include "verify-account.php";
    } elseif ($query == "general-search") {

        include "general-search.php";
    } elseif ($query == "advanced-search") {

        include "advanced-search.php";
    } elseif ($query == "advanced-search-matches") {

        include "advanced_search_matches.php";

    } elseif (strstr($query, "advanced-search-result&req=")) {

        include "advanced_search_result.php";

    }
    elseif($query == "general-search-matches"){
        include "general_search_matches.php";
    }
    elseif (strstr($query, "general-search-result&req=")) {

        include "general_search_result.php";

    }
    else{
        include "login.php";
    }
    ?>
    <!-- FOOTER-1
        ============================================= -->
    <footer id="footer-1" class="footer division">
        <div class="container">
            <div class="bottom-footer" style="border:none; padding-top: 0; margin-bottom: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright text-center">
                            <p>&copy; 2019 <span>Alpha Check</span>. All Rights Reserved</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END BOTTOM FOOTER -->


        </div>
        <!-- End container -->
    </footer>
    <!-- END FOOTER-1 -->


</div>
<!-- END PAGE CONTENT -->


<!-- EXTERNAL SCRIPTS
    ============================================= -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/retina.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.scrollto.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>

<!-- Custom Script -->
<script src="js/custom.js"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!-- [if lt IE 9]>
<script src="js/html5shiv.js" type="text/javascript"></script>
<script src="js/respond.min.js" type="text/javascript"></script>

<script src="repository/js/main.js"></script>
<script src="repository/js/FileSaver.js"></script>
<script type="text/javascript" src="repository/js/jspdf.debug.js"></script>
<script type="text/javascript" src="repository/js/basic.js"></script>

<script>
    $(document).ready(function () {
        $("#pdfBtn").click(function () {
            var x = 0;
            var pdf = new jsPDF('p', 'mm', 'a4');
            pdf.setFontSize(26);
            pdf.text('<?php echo $result["name"]; ?>', 105, x + 20, 'center');
            pdf.setFontSize(14);
            pdf.text('<?php echo $result["address"]; ?>', 105, x + 28, 'center');
            pdf.setFontSize(14);
            pdf.text('BASIC PROFILE', 20, x + 50);
            pdf.line(20, x + 52, 190, x + 52);
            pdf.setFontSize(12);
            pdf.text('Date of Birth:', 20, x + 62);
            pdf.text('<?php echo $result["dob"]; ?>', 70, x + 62);
            pdf.text('Gender:', 20, x + 70);
            pdf.text('<?php echo $result["gender"]; ?>', 70, x + 70);
            pdf.text('Post Code:', 20, x + 78);
            pdf.text('<?php echo $result["postcode"]; ?>', 70, x + 78);
            pdf.text('Address:', 20, x + 86);
            pdf.text('<?php echo $result["address"]; ?>', 70, x + 86);
            pdf.setFontSize(14);
            pdf.text('EMPLOYMENT DETAILS', 20, x + 106);
            pdf.line(20, x + 108, 190, x + 108);
            pdf.setFontSize(12);
            pdf.text('Employer:', 20, x + 118);
            pdf.text('<?php echo $result["employer"]; ?>', 70, x + 118);
            pdf.text('Position:', 20, x + 126);
            pdf.text('<?php echo $result["position"]; ?>', 70, x + 126);
            pdf.text('Certification No.:', 20, x + 134);
            pdf.text('<?php echo $result["certificate_no"]; ?>', 70, x + 134);
            pdf.text('Date of Issue:', 20, x + 142);
            pdf.text('<?php echo $result["doi"]; ?>', 70, x + 142);
            pdf.text('Countersignatory:', 20, x + 150);
            pdf.text('<?php echo $result["countersignatory_details"]; ?>', 70, x + 150);
            pdf.setFontSize(14);
            pdf.text('CRIMINAL RECORDS', 20, x + 170);
            pdf.line(20, x + 172, 190, x + 172);
            pdf.setFontSize(12);
            pdf.text('Employer:', 20, x + 182);
            pdf.text('<?php echo $result["employer"]; ?>', 70, x + 182);
            pdf.text('Position:', 20, x + 190);
            pdf.text('<?php echo $result["position"]; ?>', 70, x + 190);
            pdf.text('Certification No.:', 20, x + 198);
            pdf.text('<?php echo $result["certificate_no"]; ?>', 70, x + 198);
            pdf.text('Date of Issue:', 20, x + 206);
            pdf.text('<?php echo $result["doi"]; ?>', 70, x + 206);
            pdf.text('Countersignatory:', 20, x + 214);
            pdf.text('<?php echo $result["countersignatory_details"]; ?>', 70, x + 214);
            pdf.save("<?php echo $result['name'];?>.pdf");
        });
    }
</script>
<![endif] -->

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<!--
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-X']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    -->


</body>


</html>
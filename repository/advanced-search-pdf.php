<?php
include "framework/otherClasses.php";
Session::startSession();
$userInfo = new UserInfo();
$result = $userInfo->displayUserInformation($_GET["req"]);
foreach($result as $key => $value){
    $result[$key] = ($value == "")? "No information available." : $value;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DBS</title>
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
        <!-- .breadcrumb-box -->

        <section id="main" class="page" style="padding: 30px 0; background-color:#fff">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center" style="margin-bottom: 10px">
                        <span style="font-size: 36px; font-weight:bold"><?php echo $result["name"]; ?></span>
                    </div>
                    <div class="col-sm-12 text-center" style="margin-bottom: 30px">
                        <span style="font-weight: bold; font-size: 18px"><?php echo $result["address"]; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 30px">
                        <div class="col-sm-12">
                            <div style="font-weight:bold; border-bottom: solid 2px black; font-size: 18px;">BASIC
                                PROFILE<br/>

                                <div style="width: 100%; height: 2px; background: #000"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" style="margin-top: 20px; font-size: 18px; line-height: 36px;">
                                    Date of Birth:
                                </div>
                                <div class="col-sm-9" style="margin-top: 20px; font-size: 18px; line-height: 36px;">
                                    <?php echo $result["dob"]; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 18px; line-height: 36px;">
                                    Gender:
                                </div>
                                <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                    <?php echo $result["gender"]; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 18px; line-height: 36px;">
                                    Post Code:
                                </div>
                                <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                    <?php echo $result["postcode"]; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" style="font-size: 18px; line-height: 36px;">
                                    Address:
                                </div>
                                <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                    <?php echo $result["address"]; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <article class="col-sm-12 col-md-12 content">
                    <div class="my-account">
                        <div class="table-responsive">
                            <div class="text-left my-orders-table">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div style="font-weight:bold; border-bottom: solid 2px black; font-size: 18px;">
                                            EMPLOYMENT HISTORY
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3"
                                                 style="margin-top: 20px; font-size: 18px; line-height: 36px;">
                                                Employer:
                                            </div>
                                            <div class="col-xs-9"
                                                 style="margin-top: 20px; font-size: 18px; line-height: 36px;">
                                                <?php echo ($result["employer"]) ? $result["employer"] : "No information available"; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3" style="font-size: 18px; line-height: 36px;">
                                                Position:
                                            </div>
                                            <div class="col-xs-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo ($result["position"]) ? $result["position"] : "Not available"; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3" style="font-size: 18px; line-height: 36px;">
                                                Certificate No:
                                            </div>
                                            <div class="col-xs-8" style="font-size: 18px; line-height: 36px;">
                                                <?php echo $result["certificate_no"]; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3" style="font-size: 18px; line-height: 36px;">
                                                Date of issue:
                                            </div>
                                            <div class="col-xs-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo $result["doi"]; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3" style="font-size: 18px; line-height: 36px;">
                                                Countersignatory:
                                            </div>
                                            <div class="col-xs-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo ($result["countersignatory"]) ? $result["countersignatory"] : "Not available"; ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-12" style="margin-top: 40px;">
                                        <div style="font-weight:bold; border-bottom: solid 2px black; font-size: 18px;">
                                            CRIMINAL RECORDS
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"
                                                 style="margin-top: 20px; font-size: 18px; line-height: 36px;">
                                                Employer:
                                            </div>
                                            <div class="col-sm-9"
                                                 style="margin-top: 20px; font-size: 18px; line-height: 36px;">
                                                <?php echo ($result["employer"]) ? $result["employer"] : "No information available"; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3" style="font-size: 18px; line-height: 36px;">
                                                Position:
                                            </div>
                                            <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo ($result["position"]) ? $result["position"] : "Not available"; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3" style="font-size: 18px; line-height: 36px;">
                                                Certificate No:
                                            </div>
                                            <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo $result["certificate_no"]; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3" style="font-size: 18px; line-height: 36px;">
                                                Date of issue:
                                            </div>
                                            <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo $result["doi"]; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3" style="font-size: 18px; line-height: 36px;">
                                                Countersignatory:
                                            </div>
                                            <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                                <?php echo ($result["countersignatory"]) ? $result["countersignatory"] : "Not available"; ?>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
    </div>
</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="js/price-regulator/tmpl.js"></script>
<script src="js/price-regulator/jquery.dependClass-0.1.js"></script>
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
<script src="js/FileSaver.js"></script>
<script type="text/javascript" src="js/jspdf.debug.js"></script>
<script type="text/javascript" src="js/basic.js"></script>

<script>
    $(document).ready(function () {
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
        pdf.save("Text.pdf");
    });
</script>
</body>

</html>
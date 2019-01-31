<?php
$userInfo = new UserInfo();
$result = $userInfo->displayUserInformation($_GET["req"]);
foreach ($result as $key => $value) {
    $result[$key] = ($value == "") ? "No information available." : $value;
}
?>


<section id="print" style="height: 80px; color:#fff; position: fixed; bottom: 50%; left: 5px; z-index: 999">
    <a id="pdfBtn" style="padding-left: 0; padding-right: 0" class="btn btn-default form-control">Save as PDF
    </a>
</section>


<section id="contact" class="bg-fixed bg-grey wide-80 contacts-section division" style="margin-top: 130px;">
    <div class="container">

        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 30px">
                <h2><?php echo $result["name"]; ?></h2>

                <p>The summary of the advanced search is found below.</p>
            </div>
            <div class="col-sm-12 col-md-12 content">
                <div class="text-left my-orders-table">
                    <div class="row">
                        <div style="background-color: #f9f9f9; text-align: center;" class="col-sm-3">
                            <div class="col-sm-12" style="margin: 30px 0 10px 0; padding: 0">
                                <img src="repository/img/profile_image.jpg"/><br/><br/>
                                <b style="font-size: 18px; margin-top: 20px;"><?php echo $result["name"]; ?></b>
                                <hr style="margin: 10px 0; padding: 0"/>
                                <br/>

                                <div class="row">
                                    <div class="col-sm-5 text-right" style="padding:0">
                                        Date of Birth:
                                    </div>
                                    <div class="col-sm-7 text-left" style="padding:0 0 0 20px;">
                                        <?php echo $result["dob"]; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-right" style="padding: 0">
                                        Gender:
                                    </div>
                                    <div class="col-sm-7 text-left" style="padding:0 0 0 20px">
                                        <?php echo $result["gender"]; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-right" style="padding: 0">
                                        Post Code:
                                    </div>
                                    <div class="col-sm-7 text-left" style="padding: 0 0 0 20px;">
                                        <?php echo $result["postcode"]; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-right" style="padding: 0">
                                        Employer:
                                    </div>
                                    <div class="col-sm-7 text-left" style="padding: 0 0 0 20px;">
                                        <?php echo ($result["employer"]) ? $result["employer"] : "No information available"; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-right" style="padding: 0;">
                                        Address:
                                    </div>
                                    <div class="col-sm-7 text-left" style="padding: 0 0 0 20px;">
                                        <?php echo $result["address"]; ?>
                                    </div>
                                </div>

                                <hr style="margin: 30px 0; padding:0"/>

                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div style="font-weight:bold; border-bottom: solid 2px black; font-size: 18px;">
                                EMPLOYMENT HISTORY
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
                                    Counter Signatory:
                                </div>
                                <div class="col-sm-9" style="font-size: 18px; line-height: 36px;">
                                    <?php echo ($result["countersignatory"]) ? $result["countersignatory"] : "Not available"; ?>
                                </div>
                            </div>


                            <div style="font-weight:bold; border-bottom: solid 2px black; font-size: 18px; margin-top: 40px;">
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
                                    Counter Signatory:
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

    </div>
    <!-- END CONTACT FORM -->


    </div>
    <!-- End container -->
</section>
<script src="repository/js/jquery.min.js"></script>
<script src="repository/js/bootstrap.min.js"></script>
<script src="repository/js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="repository/js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="repository/js/price-regulator/tmpl.js"></script>
<script src="repository/js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="repository/js/price-regulator/draggable-0.1.js"></script>
<script src="repository/js/price-regulator/jquery.slider.js"></script>
<script src="repository/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="repository/js/jquery.touchSwipe.min.js"></script>
<script src="repository/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="repository/js/jquery.imagesloaded.min.js"></script>
<script src="repository/js/jquery.appear.js"></script>
<script src="repository/js/jquery.sparkline.min.js"></script>
<script src="repository/js/jquery.easypiechart.min.js"></script>
<script src="repository/js/jquery.easing.1.3.js"></script>
<script src="repository/js/jquery.fancybox.pack.js"></script>
<script src="repository/js/isotope.pkgd.min.js"></script>
<script src="repository/js/jquery.knob.js"></script>
<script src="repository/js/jquery.stellar.min.js"></script>
<script src="repository/js/jquery.selectBox.min.js"></script>
<script src="repository/js/jquery.royalslider.min.js"></script>
<script src="repository/js/jquery.tubular.1.0.js"></script>
<script src="repository/js/SmoothScroll.js"></script>
<script src="repository/js/country.js"></script>
<script src="repository/js/spin.min.js"></script>
<script src="repository/js/ladda.min.js"></script>
<script src="repository/js/masonry.pkgd.min.js"></script>
<script src="repository/js/morris.min.js"></script>
<script src="repository/js/raphael.min.js"></script>
<script src="repository/js/video.js"></script>
<script src="repository/js/pixastic.custom.js"></script>
<script src="repository/js/livicons-1.3.min.js"></script>
<script src="repository/js/layerslider/greensock.js"></script>
<script src="repository/js/layerslider/layerslider.transitions.js"></script>
<script src="repository/js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="repository/js/revolution/jquery.themepunch.plugins.min.js"></script>
<script src="repository/js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="repository/js/bootstrapValidator.min.js"></script>
<script src="repository/js/bootstrap-datepicker.js"></script>
<script src="repository/js/jplayer/jquery.jplayer.min.js"></script>
<script src="repository/js/jplayer/jplayer.playlist.min.js"></script>
<script src="repository/js/jquery.scrollbar.min.js"></script>
<script src="repository/js/main.js"></script>
<script src="repository/js/FileSaver.js"></script>
<script type="text/javascript" src="repository/js/jspdf.debug.js"></script>
<script type="text/javascript" src="repository/js/basic.js"></script>

<script>
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
</script>
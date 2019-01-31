<?php
$resultSize = count(Session::sessionArray("results"));
?>
<section id="contact" class="bg-fixed bg-grey wide-80 contacts-section division" style="margin-top: 130px;">
    <div class="container">


        <!-- CONTACT FORM -->
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 30px">
                <h2>General Search Results</h2>

                <p>Here is the list of individuals that match the searched parameters.</p>
            </div>
            <article class="col-sm-12 col-md-12 content">
                <div class="my-account">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-left my-orders-table" style="background: #fff">
                            <thead>
                            <tr class="first last">
                                <th>#</th>
                                <th>Full Names</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Post Code</th>
                                <th>Address</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($resultSize == 0){
                                echo "<tr><td colspan='9' style='text-align: center;'>No record found</td></tr>";
                            }
                            else{
                                $i = 0;
                                foreach(Session::sessionArray("results") as $key=>$value){
                                    echo "<tr>";
                                    echo "<td style='vertical-align: middle'>". ($i + 1) ."</td>";
                                    echo "<td style='vertical-align: middle'>". $value["name"] ."</td>";
                                    echo "<td style='vertical-align: middle'>". $value["dob"] ."</td>";
                                    echo "<td style='vertical-align: middle'>". $value["gender"] ."</td>";
                                    echo "<td style='vertical-align: middle'>". $value["postcode"] ."</td>";
                                    echo "<td style='vertical-align: middle'>". $value["address"] ."</td>";
                                    echo "<td class='text-center last'><div class='btn-group'><a style='white-space:nowrap' href='app.php?general-search-result&req=".$value["user_id"]."' class='btn btn-sm btn-info'>View Profile</a></div></td>";
                                    echo "</tr>";
                                    $i++;
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
                        <i class="pagination-text">Displaying <?php echo ($resultSize>0)? 1: 0?> to <?php echo " $resultSize (of $resultSize post(s))";?></i>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <!-- END CONTACT FORM -->


    </div>
    <!-- End container -->
</section>
<!-- END CONTACTS-1 -->


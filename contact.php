<?php include_once("inc/head.php"); ?>

<?php include_once("inc/mainnav.php"); ?>

<?php include_once("inc/logo.php"); ?>

<?php include_once("inc/mainslide.php"); ?>


<!-- start content section -->
    <div class="container-fluid">
        <div class="row mt-sm">
            <div class="container">

                <!-- start course column -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="content-box-fullwidth">
                            <div class="content-head">
                                ติดต่อเรา
                                <div class="content-head-desc">Contact Us</div>
                            </div>
                            <div class="col-xs-12">
                                <p>
                                    3/2 ซ.ลาดพร้าว 69 ถ.ลาดพร้าว แขวงสะพานสอง  <br>
                                    เขตวังทองหลาง กรุงเทพฯ 10310 <br>
                                    โทร. 02-276-5260, มือถือ 08-9665-3599  <br>
                                    โทรสาร 02-933-0969 <br>
                                    Email Address : info@achance.co.th, achancelearning@gmail.com  <br>
                                    เวลาทำการ 9.00 - 17.00 น. หยุดทุกวันอังคาร
                                </p>
                                <p>
                                    <button class="btn btn-default" data-toggle="modal" data-target="#imageMap"><i class="glyphicon glyphicon-eye-open"></i> ดูแผนที่</button>
                                    <button class="btn btn-default" data-toggle="modal" data-target="#googleMap"><i class="glyphicon glyphicon-globe"></i> ดู Google Map</button>
                                </p>
                                <div class="row mt-xs">
                                    <div class="col-lg-12">
                                        <ul class="list-inline list-social">
                                            <li><a href=""><img src="assets/img/facebook.png" alt=""></a></li>
                                            <li><a href=""><img src="assets/img/twitter.png" alt=""></a></li>
                                            <li><a href=""><img src="assets/img/instagram.png" alt=""></a></li>
                                            <li><a href=""><img src="assets/img/line.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="content-head mt-lg">
                                    สอบถามข้อสงสัย
                                    <div class="content-head-desc">Contact Form</div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-horizontal mt-sm">
                                <div class="form-group">
                                    <lable class="control-label col-xs-3 text-right">หัวข้อ</lable>
                                    <div class="col-xs-6">
                                        <select name="" id="" class="form-control">
                                            <option value="">--เลือกหัวข้อติดต่อ--</option>
                                            <option value="">สอบถามคอร์สเรียน</option>
                                            <option value="">แจ้งการชำระเงิน</option>
                                            <option value="">ติชม</option>
                                            <option value="">อื่นๆ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="control-label col-xs-3 text-right">ชื่อ-นามสกุล</lable>
                                    <div class="col-xs-6">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="control-label col-xs-3 text-right">อีเมล</lable>
                                    <div class="col-xs-6">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="control-label col-xs-3 text-right">เบอร์โทรศัพท์</lable>
                                    <div class="col-xs-6">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable class="control-label col-xs-3 text-right">รายละเอียด</lable>
                                    <div class="col-xs-6">
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6 col-xs-offset-3">
                                        <input type="submit" value="ส่งข้อความ" class="btn btn-primary">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    
                </div><!-- end course column -->

                <?php include_once("inc/sidebar.php"); ?>

            </div>
        </div>
    </div>
<!-- end content section -->

<!-- Image map box Modal -->
<div class="modal fade" id="imageMap" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="">แผนที่</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xs-12 img-fill-width">
                <p>
                    3/2 ซ.ลาดพร้าว 69 ถ.ลาดพร้าว แขวงสะพานสอง
                    เขตวังทองหลาง กรุงเทพฯ 10310 <br>
                    โทร. 02-276-5260, มือถือ 08-9665-3599
                    โทรสาร 02-933-0969 <br>
                    Email Address : info@achance.co.th, achancelearning@gmail.com  <br>
                    เวลาทำการ 9.00 - 17.00 น. หยุดทุกวันอังคาร
                </p>
                <img src="assets/img/ac-map.jpg" alt="">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>


<!-- Google map box Modal -->
<div class="modal fade" id="googleMap" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="">Google Map</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    3/2 ซ.ลาดพร้าว 69 ถ.ลาดพร้าว แขวงสะพานสอง
                    เขตวังทองหลาง กรุงเทพฯ 10310 <br>
                    โทร. 02-276-5260, มือถือ 08-9665-3599
                    โทรสาร 02-933-0969 <br>
                    Email Address : info@achance.co.th, achancelearning@gmail.com  <br>
                    เวลาทำการ 9.00 - 17.00 น. หยุดทุกวันอังคาร
                </p>
                <div id="googleMapBox" ></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>


<?php include_once("inc/searchmodal_footer.php"); ?>

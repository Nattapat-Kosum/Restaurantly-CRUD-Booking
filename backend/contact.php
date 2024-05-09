<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head><?php include("inc_header.php"); ?></head>
<body>
    <div id="wrapper">
    
    <?php 
      include("inc_left_menu.php"); 
      include "../connect/connect.php";
    ?>

        <!-- ENG section -->
        <?php if(isset($_GET['action'])){

            $sql = $conn->query("SELECT * FROM contact_us");
            $row = $sql->fetch();

            switch($_GET){
              case ($_GET['action'] == 'en');
        ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">
              
                <!--banner-->
                <div class="banner">
                    <h2>
                        <i class="fa fa-angle-right"></i>
                        <span>Contact</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Contact US Form</h3>
                        <form method="POST" action="add_class.php?action=contact">
                            <div class="form-group">
                                <label for="exampleInputaddress1">Address</label>
                                <textarea class="form-control" name="addressContact"><?php echo $row['address_contact']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtext1">Open Hours Details</label>
                                <input type="text" class="form-control" name="openhours_details" value="<?php echo $row['detail_op']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email_contact" placeholder="" value="<?php echo $row['email']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputtel1">Call</label>
                                <input type="tel" class="form-control" id="exampleInputtel1" name="tel_contact" placeholder="" value="<?php echo $row['phone']; ?>">
                            </div>

                            <button type="submit" class="btn btn-default" style="margin-top: 10px;">submit</button>
                    </div>
                    </form>
                    <?php break; ?>

                    
                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 

                      $sql = $conn->query("SELECT * FROM contact_us_th");
                      $row = $sql->fetch();
                    ?>

                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                    <i class="fa fa-angle-right"></i>
                                    <span>ช่องทางการติดต่อ</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ฟอร์มช่องทางการติดต่อ</h3>
                                    <form method="POST" action="add_class_th.php?action=contact_r_th">
                                        <div class="form-group">
                                            <label for="exampleInputaddress1">ที่อยู่</label>
                                            <textarea class="form-control" name="address_th"><?php echo $row['address_contact_th']; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputtext1">รายละเอียดเวลาเปิด</label>
                                            <input type="text" class="form-control" name="openhours_details_th" value="<?php echo $row['detail_op_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">อีเมลล์</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email_contact_th" placeholder="" value="<?php echo $row['email_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputtel1">เบอร์โทรติดต่อ</label>
                                            <input type="tel" class="form-control" id="exampleInputtel1" name="tel_contact_th" placeholder="" value="<?php echo $row['phone_th']; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-default" style="margin-top: 10px;">บันทึก</button>
                                </div>
                                </form>

                                <?php break; } ?>
                                <?php } ?>



                                            <!---->
                                            <?php include("inc_copy.php"); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <!---->
                            <?php include("js.php"); ?>
</body>
</html>
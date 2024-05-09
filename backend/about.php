<?php session_start(); ?>

<!DOCTYPE HTML>
<html>

<head><?php include("inc_header.php"); ?></head>

<body>
    <div id="wrapper">
        <?php 
            include "../connect/connect.php";
            include("inc_left_menu.php");  
        ?>

        <!-- Eng section -->
        <?php if(isset($_GET['action'])){
    
            $sql = $conn->query("SELECT * FROM about");
            $row = $sql->fetch();

            switch($_GET){
            case ($_GET['action'] == 'en');
        ?>

        <div id="wrapper">
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="content-main">

                    <!--banner-->
                    <div class="banner">
                        <h2>
                            <i class="fa fa-angle-right"></i>
                            <span>About</span>
                        </h2>
                    </div>
                    <!--//banner-->

                    <!--grid-->
                    <div class="grid-form">
                        <div class="grid-form1">
                            <h3 id="forms-example" class="">About Form</h3>
                            <form method="POST" action="add_class.php?action=about_r" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputtitle1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputtile1" name="title_about" placeholder="input you r title" value="<?php echo $row['title_about']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputdetail1">Details1</label>
                                    <textarea class="form-control" name="details_about1" placeholder="input you r Details1"><?php echo $row['detail1']; ?></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputsection1">Section1</label>
                                    <input type="text" class="form-control" id="exampleInputsection1" name="title_section1" placeholder="input you r Section1" value="<?php echo $row['check1']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputsection2">Section2</label>
                                    <input type="text" class="form-control" id="exampleInputsection2" name="title_section2" placeholder="input you r Section2" value="<?php echo $row['check2']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputsection3">Section3</label>
                                    <input type="text" class="form-control" id="exampleInputsection3" name="title_section3" placeholder="input you r Section3" value="<?php echo $row['check3']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputdetail2">Details2</label>
                                    <textarea class="form-control" name="details_about2" placeholder="input you r Details2"><?php echo $row['detail2']; ?></textarea>
                                </div><br>

                                <div class="form-group">
                                    <label for="exampleInputFile">File Image </label>
                                    <input type="file" name="img_photo" multiple="multiple" id="exampleInputFile">
                                </div>

                                <div class="pabel-footer">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-off-set-2">
                                            <br>
                                            <button type="submit" class="btn-primary btn" name="upload">Submit</button>
                                        </div>
                                    </div>
                            </form>


                        </div>
                        <?php break; ?>

                        <!-- TH section -->
                        <?php case ($_GET['action'] == 'th'); 

                            $sql = $conn->query("SELECT * FROM about_th");
                            $row = $sql->fetch();
                        ?>

                        <div id="wrapper">
                            <div id="page-wrapper" class="gray-bg dashbard-1">
                                <div class="content-main">

                                    <!--banner-->
                                    <div class="banner">
                                        <h2>
                                            <i class="fa fa-angle-right"></i>
                                            <span>เกี่ยวกับเรา</span>
                                        </h2>
                                    </div>
                                    <!--//banner-->

                                    <!--grid-->
                                    <div class="grid-form">
                                        <div class="grid-form1">
                                            <h3 id="forms-example" class="">ฟอร์มเกี่ยวกับเรา</h3>
                                            <form method="POST" action="add_class_th.php?action=about_r_th" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">หัวข้อ</label>
                                                    <input type="text" class="form-control" id="exampleInputtile1" name="title_about_th" placeholder="กรอกหัวข้อ" value="<?php echo $row['title_about_th']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputdetail1">รายละเอียด1</label>
                                                    <textarea class="form-control" name="details_about1_th" placeholder="กรอกรายละเอียด1"><?php echo $row['detail1_th']; ?></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputsection1">รายละเอียดย่อย1</label>
                                                    <input type="text" class="form-control" id="exampleInputsection1" name="title_section1_th" placeholder="กรอกข้อมูลย่อย1" value="<?php echo $row['check1_th']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputsection2">รายละเอียดย่อย2</label>
                                                    <input type="text" class="form-control" id="exampleInputsection2" name="title_section2_th" placeholder="กรอกข้อมูลย่อย2" value="<?php echo $row['check2_th']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputsection3">รายละเอียด3</label>
                                                    <input type="text" class="form-control" id="exampleInputsection3" name="title_section3_th" placeholder="กรอกข้อมูลย่อย3" value="<?php echo $row['check3_th']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputdetail2">รายละเอียด2</label>
                                                    <textarea class="form-control" name="details_about2_th" placeholder="กรอกรายละเอียด2"><?php echo $row['detail2_th']; ?></textarea>
                                                </div><br>

                                                <div class="form-group">
                                                    <label for="exampleInputFile">อัพโหลดรูปภาพ </label>
                                                    <input type="file" name="img_photo" multiple="multiple" id="exampleInputFile">
                                                </div>

                                                <div class="pabel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-off-set-2">
                                                            <br>
                                                            <button type="submit" class="btn-primary btn" name="upload">บันทึก</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                        
                                        <?php break; } }?>

        
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
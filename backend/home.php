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
        <?php 
            if(isset($_GET['action'])){
                $sql = $conn->query("SELECT * FROM home");
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
                        <span>Home</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Home Form</h3>
                        <form method="POST" action="add_class.php?action=home_r" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title_home" placeholder="input you r title" value="<?php echo $row['title']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDescription1">Description</label>
                                <textarea class="form-control" name="description_home"><?php echo $row['drescription']; ?></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default" name="upload">submit</button>
                        </form>
                    </div>
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 
                        $sql = $conn->query("SELECT * FROM home_th");
                        $row = $sql->fetch();
                    ?>

                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                    <i class="fa fa-angle-right"></i>
                                    <span>หน้าแรก</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ฟอร์มหน้าแรก</h3>
                                    <form method="POST" action="add_class_th.php?action=home_r_th" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputTitle1">หัวข้อ</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="title_home_th" placeholder="input you r title" value="<?php echo $row['title_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputDescription1">รายละเอียด</label>
                                            <textarea class="form-control" name="description_home_th"><?php echo $row['drescription_th']; ?></textarea>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-default" name="upload">บันทึก</button>
                                    </form>
                                </div>
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
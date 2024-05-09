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

            $specialsId = $_GET['id'];

            $sql = $conn->prepare("SELECT * FROM specials WHERE id = :id");
            $sql->bindParam(':id', $specialsId);
            $sql->execute();

            $row = $sql->fetch();

            switch($_GET){
              case ($_GET['action'] == 'en');
        ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                    <h2>
                        <a href="specials.php?action=en">back</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Specials</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Specials Form</h3>
                        <form method="POST" action="add_class.php?action=specialsmenu" enctype=multipart/form-data>

                            <div class="form-group">
                                <label for="exampleInputtopic1">Specials Topic</label>
                                <input type="text" class="form-control" id="exampleInputtopic1" name="special_topic" placeholder="" value="<?php echo $row['group_menu']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputmenuname1">Specials Menu Name</label>
                                <input type="text" class="form-control" id="exampleInputmenuname1" name="menu_name1" placeholder="" value="<?php echo $row['groupname']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDescription1">Description</label>
                                <textarea class="form-control" name="description_home"><?php echo $row['detail_specials']; ?></textarea>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    <h4>Mene Specials Image</h4>
                                </label>
                                <input type="file" id="exampleInputFile" name="img_photo">
                                <p class="help-block">Choose Image here.</p>
                            </div>

                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <button type="submit" class="btn btn-default" name="upload">submit</button>

                        </form>
                    </div>
                    <?php break; ?>

                    
                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 

                      $specialsId = $_GET['id'];

                      $sql = $conn->prepare("SELECT * FROM specials_th WHERE id = :id");
                      $sql->bindParam(':id', $specialsId);
                      $sql->execute();

                      $row = $sql->fetch();
                    ?>

                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                    <a href="specials.php?action=th">ย้อนกลับ</a>
                                    <i class="fa fa-angle-right"></i>
                                    <span>เมนูพิเศษ</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">เมนูพิเศษฟอร์ม</h3>
                                    <form method="POST" action="add_class_th.php?action=specialsmenu_th" enctype=multipart/form-data>

                                        <div class="form-group">
                                            <label for="exampleInputtopic1">หัวข้อ</label>
                                            <input type="text" class="form-control" id="exampleInputtopic1" name="special_topic_th" placeholder="" value="<?php echo $row['group_menu_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputmenuname1">ชื่อเมนูพิเศษ</label>
                                            <input type="text" class="form-control" id="exampleInputmenuname1" name="menu_name1_th" placeholder="" value="<?php echo $row['groupname_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputDescription1">รายละเอียด</label>
                                            <textarea class="form-control" name="description_home_th"><?php echo $row['detail_specials_th']; ?></textarea>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputFile">
                                                <h4>รูปภาพเมนูพิเศษ</h4>
                                            </label>
                                            <input type="file" id="exampleInputFile" name="img_photo">
                                            <p class="help-block">เลือกรูปภาพที่นี่.</p>
                                        </div>

                                        <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                        <button type="submit" class="btn btn-default" name="upload">บันทึก</button>
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
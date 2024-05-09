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

            $chefsid = $_GET['id'];

            $sql = $conn->prepare("SELECT * FROM chefs WHERE id = :id");
            $sql->bindParam(':id', $chefsid);
            $sql->execute();
            $rows = $sql->fetchAll();

            
            switch($_GET){
              case ($_GET['action'] == 'en');

            ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                    <h2>
                    <script>
                        document.write('<a href="' + document.referrer + '">Go Back</a>');
                    </script>
                        <i class="fa fa-angle-right"></i>
                        <span>Chefs</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Chefs Form</h3>

                        <?php 
                            foreach ($rows as $row) { 
                        ?>

                        <form method="POST" action="add_class.php?action=chefs" enctype=multipart/form-data>
                            <div class="form-group">
                                <label for="exampleInputchefs1">Chefs Name</label>
                                <input type="text" class="form-control" id="exampleInputchefs1" name="name_chefs" placeholder="input you r Chefs name" value="<?php echo $row['chefs_name']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputposition1">Chefs Position</label>
                                <input type="text" class="form-control" id="exampleInputposition1" name="position_chefs" placeholder="input you r Chefs position" value="<?php echo $row['chefs_position']; ?>">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    <h4>Chefs Image</h4>
                                </label>
                                <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                            </div>

                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <button type="submit" class="btn btn-default" name="upload" style="margin-top: 10px;">submit</button>
                            <?php  } ?>
                        </form>
                    </div>
                    
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th');

                        $chefsid = $_GET['id'];

                        $sql = $conn->prepare("SELECT * FROM chefs_th WHERE id = :id");
                        $sql->bindParam(':id', $chefsid);
                        $sql->execute();
                        $rows = $sql->fetchAll();
                    ?>

                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>                                 
                                <script>
                                    document.write('<a href="' + document.referrer + '">ย้อนกลับ</a>');
                                </script>
                                    <i class="fa fa-angle-right"></i>
                                    <span>Chefs</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ฟอร์มเชฟ</h3>

                                    <?php 
                                        foreach ($rows as $row) { 
                                    ?>
                                    
                                    <form method="POST" action="add_class_th.php?action=chefs" enctype=multipart/form-data>
                                        <div class="form-group">
                                            <label for="exampleInputchefs1">ชื่อเชฟ</label>
                                            <input type="text" class="form-control" id="exampleInputchefs1" name="name_chefs_th" placeholder="input you r Chefs name" value="<?php echo $row['chefs_name_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputposition1">ตำแหน่งเชฟ</label>
                                            <input type="text" class="form-control" id="exampleInputposition1" name="position_chefs_th" placeholder="input you r Chefs position" value="<?php echo $row['chefs_position_th']; ?>">
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputFile">
                                                <h4>รูปภาพเชฟ</h4>
                                            </label>
                                            <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                        </div>

                                        <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                        <button type="submit" class="btn btn-default" name="upload" style="margin-top: 10px;">บันทึก</button>
                                        <?php  } ?>
                                    </form>
                                </div>
                                <?php break; ?>

                                <?php } }?>



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
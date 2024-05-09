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

            $mesId = $_GET['id'];

            $sql = $conn->prepare("SELECT * FROM user_message WHERE id = :id");
            $sql->bindParam(':id', $mesId);
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
                        <script>document.write('<a href="' + document.referrer + '">Go Back</a>');</script>
                        <i class="fa fa-angle-right"></i>
                        <span>Reply Contact</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Reply Contact From</h3>
                        <form method="POST" action="add_class.php?action=reply_message">
                            <div class="form-group">
                                <label for="exampleInputaddress1">Reply</label>
                                <textarea class="form-control" name="reply"></textarea>
                            </div>
                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <input name="color" type="hidden" value="danger" />
                            <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                    </form>
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 

                      $mesId = $_GET['id'];

                      $sql = $conn->prepare("SELECT * FROM user_message WHERE id = :id");
                      $sql->bindParam(':id', $mesId);
                      $sql->execute();
                      $row = $sql->fetch();
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
                                    <span>ตอบกลับ</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ตอบกลับข้อความ</h3>
                                    <form method="POST" action="add_class.php?action=reply_message">
                                        <div class="form-group">
                                            <label for="exampleInputaddress1">ตอบกลับ</label>
                                            <textarea class="form-control" name="reply"></textarea>
                                        </div>
                                        <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                        <input name="color" type="hidden" value="danger" />
                                        <button type="submit" class="btn btn-primary">ส่งข้อความ</button>
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
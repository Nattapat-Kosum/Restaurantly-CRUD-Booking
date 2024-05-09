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

            $eventId = $_GET['id'];

            $sql = $conn->prepare("SELECT * FROM event_me WHERE id= :id");
            $sql->bindParam(':id', $eventId);
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
                    <script>
                        document.write('<a href="' + document.referrer + '">Go Back</a>');
                    </script>
                        <i class="fa fa-angle-right"></i>
                        <span>Event</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Event Form</h3>
                        <form method="POST" action="add_class.php?action=eventbackend" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputtitle1">Title</label>
                                <input type="text" class="form-control" id="exampleInputtitle1" name="title_event" placeholder="input you r title" value="<?php echo $row['title_event']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDetail">Details1</label>
                                <textarea class="form-control" name="details_event"><?php echo $row['detail_event1']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputsection1">Section1</label>
                                <input type="text" class="form-control" id="exampleInputsection1" name="event_section1" placeholder="input you r Section1" value="<?php echo $row['text1']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputsection2">Section2</label>
                                <input type="text" class="form-control" id="exampleInputsection2" name="event_section2" placeholder="input you r Section2" value="<?php echo $row['text2']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputsection3">Section3</label>
                                <input type="text" class="form-control" id="exampleInputsection3" name="event_section3" placeholder="input you r Section3" value="<?php echo $row['text3']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDetail">Details2</label>
                                <textarea class="form-control" name="details_event2"><?php echo $row['detail_event2']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPrice1">Price</label>
                                <input type="text" class="form-control" id="exampleInputPrice1" name="event_price" placeholder="" value="<?php echo $row['price_event']; ?>">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputFile">
                                    <h4>Event Image</h4>
                                </label>
                                <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                            </div>

                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <button type="submit" class="btn btn-default" name="upload" style="margin-top: 10px;">submit</button>
                        </form>
                    </div>
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 

                      $eventId = $_GET['id'];

                      $sql = $conn->prepare("SELECT * FROM event_me_th WHERE id= :id");
                      $sql->bindParam(':id', $eventId);
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
                                    <span>Event</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ฟอร์มอีเวนท์</h3>
                                    <form method="POST" action="add_class_th.php?action=eventbackend_th" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputtitle1">หัวข้อ</label>
                                            <input type="text" class="form-control" id="exampleInputtitle1" name="title_event_th" placeholder="" value="<?php echo $row['title_event_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputDetail">รายละเอียด1</label>
                                            <textarea class="form-control" name="details_event_th"><?php echo $row['detail_event1_th']; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputsection1">รายละเอียดย่อย1</label>
                                            <input type="text" class="form-control" id="exampleInputsection1" name="event_section1_th" placeholder="" value="<?php echo $row['text1_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputsection2">รายละเอียดย่อย2</label>
                                            <input type="text" class="form-control" id="exampleInputsection2" name="event_section2_th" placeholder="" value="<?php echo $row['text2_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputsection3">รายละเอียดย่อย3</label>
                                            <input type="text" class="form-control" id="exampleInputsection3" name="event_section3_th" placeholder="" value="<?php echo $row['text3_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputDetail">รายละเอียด2</label>
                                            <textarea class="form-control" name="details_event2_th"><?php echo $row['detail_event2_th']; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPrice1">ราคา</label>
                                            <input type="text" class="form-control" id="exampleInputPrice1" name="event_price_th" placeholder="" value="<?php echo $row['price_event_th']; ?>">
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="exampleInputFile">
                                                <h4>รูปภาพอีเวนท์</h4>
                                            </label>
                                            <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                        </div>

                                        <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                        <button type="submit" class="btn btn-default" name="upload" style="margin-top: 10px;">บันทึก</button>
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
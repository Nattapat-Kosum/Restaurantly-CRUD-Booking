<?php session_start(); ?>

<!DOCTYPE HTML>
<html>

<head><?php include("inc_header.php");?> </head>

<body>

    <?php 
      include "../connect/connect.php";
      include("inc_left_menu.php");
   ?>

    <!-- ENG section -->
    <?php 
       if(isset($_GET['action'])){
 
         $bookId = $_GET['id'];

         $sql = $conn->prepare("SELECT * FROM book_a_table WHERE id = :id");
         $sql->bindParam(':id', $bookId);
         $sql->execute();
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
                        <a href="book_a_table.php?action=en">back</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Book a table</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Book a table Details</h3>
                        <form method="POST" action="add_class.php?action=status_check">
                            <div class="form-group">
                                <label for="exampleInputUserName1">User Name</label>
                                <input type="text" class="form-control" id="exampleInputUserName1" name="username1" placeholder="" value="<?php echo $row['name_user']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">User Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="useremail1" placeholder="" value="<?php echo $row['user_email']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPhone1">User Phone</label>
                                <input type="tel" class="form-control" id="exampleInputPhone1" name="UserPhone1" placeholder="" value="<?php echo $row['user_phone']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDate1">Date</label>
                                <input type="date" class="form-control" id="exampleInputDate1" name="date" placeholder="" value="<?php echo $row['date_book']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputTime1">Startime</label>
                                <input type="time" class="form-control" id="exampleInputTime1" name="star_time" placeholder="" value="<?php echo $row['startime']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPeple1">#Of peple</label>
                                <input type="number" class="form-control" id="exampleInputPeople1" name="people" placeholder="" value="<?php echo $row['of_people']; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputMessage1">#Table</label>
                                <div>
                                  <select name="table_a" id="table_a" class="form-control" readonly>
                                        <option value="<?php echo $row['tablebooking']; ?>"><?php echo $row['tablebooking']; ?></option>
                                  </select>
                                </div><br>

                                <div class="form-group">
                                    <label for="exampleInputMessage1">Message</label>
                                    <textarea class="form-control" name="message" placeholder="" readonly><?php echo $row['user_message']; ?></textarea>
                                </div>
                                <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                <input name="statusCheck" type="hidden" value="Check in" />
                                <input name="color" type="hidden" value="success" />
                                <button type="submit" class="btn btn-success">Check in</button>
                        </form>
                        <?php break; ?>


                        <!-- TH Section -->
                        <?php 
                          case ($_GET['action'] == 'th'); 

                          $bookId = $_GET['id'];

                          $sql = $conn->prepare("SELECT * FROM book_a_table WHERE id = :id");
                          $sql->bindParam(':id', $bookId);
                          $sql->execute();
                          $row = $sql->fetch();
                        ?>

                        <div id="wrapper">
                            <div id="page-wrapper" class="gray-bg dashbard-1">
                                <div class="content-main">

                                    <!--banner-->
                                    <div class="banner">
                                        <h2>
                                            <a href="book_a_table.php?action=th">ย้อนกลับ</a>
                                            <i class="fa fa-angle-right"></i>
                                            <span>การจองโต๊ะ</span>
                                        </h2>
                                    </div>
                                    <!--//banner-->

                                    <!--grid-->
                                    <div class="grid-form">
                                        <div class="grid-form1">
                                            <h3 id="forms-example" class="">รายละเอียดการจองโต๊ะ</h3>
                                            <form method="POST" action="add_class.php?action=status_check">
                                                <div class="form-group">
                                                    <label for="exampleInputUserName1">ชื่อลูกค้า</label>
                                                    <input type="text" class="form-control" id="exampleInputUserName1" name="username1" placeholder="" value="<?php echo $row['name_user']; ?> " readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">อีเมลล์ลูกค้า</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" name="useremail1" placeholder="" value="<?php echo $row['user_email']; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPhone1">เบอร์โทร</label>
                                                    <input type="tel" class="form-control" id="exampleInputPhone1" name="UserPhone1" placeholder="" value="<?php echo $row['user_phone']; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputDate1">วันที่</label>
                                                    <input type="date" class="form-control" id="exampleInputDate1" name="date" placeholder="" value="<?php echo $row['date_book']; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputTime1">เวลา</label>
                                                    <input type="time" class="form-control" id="exampleInputTime1" name="star_time" placeholder="" value="<?php echo $row['startime']; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPeple1">#จำนวนคน</label>
                                                    <input type="number" class="form-control" id="exampleInputPeople1" name="people" placeholder="" value="<?php echo $row['of_people']; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputMessage1">#โต๊ะ</label>
                                                    <div>
                                                      <select name="table_a" id="table_a" class="form-control" readonly>

                                                            
                                                            <option value="<?php echo $row['tablebooking']; ?>"><?php echo $row['tablebooking']; ?></option>
                                                            

                                                      </select>
                                                    </div><br>

                                                    <div class="form-group">
                                                        <label for="exampleInputMessage1">ข้อความ</label>
                                                        <textarea class="form-control" name="message" placeholder="" readonly><?php echo $row['user_message']; ?></textarea>
                                                    </div>
                                                    <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                                    <input name="statusCheck" type="hidden" value="Check in" />
                                                    <input name="color" type="hidden" value="success" />
                                                    <button type="submit" class="btn btn-success">เช็คอิน</button>
                                            </form>
                                            <?php break; } }?>



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
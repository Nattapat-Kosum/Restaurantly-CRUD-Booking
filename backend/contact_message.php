
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

            $sql = $conn->query("SELECT * FROM user_message");
            $rows = $sql->fetchAll();
            
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
                            <span>Contact Message</span>
                        </h2>
                    </div>

                    <div class="grid-form">
                        <div class="grid-form1">
                            <h3 id="forms-example" class="">Contact Message List <span
                                    style="color: green; font-size:medium;">(green color = not respond </span>|<span
                                    style="color: red; font-size:medium;"> red = respond)</span></h3>
                            <form>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="tablelist_menu" class="display" style="width: 100%;">
                                            <thead class=" text-primary">
                                                <th>Status</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Date/Time</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                  foreach ($rows as $row) {
                                                ?>

                                                <tr>
                                                    <td><button class="btn btn-<?php echo $row['color']; ?>" style="width:5px;height:20px" type="button"></button></td>
                                                    <td><?php echo $row['Cus_Name']; ?></td>
                                                    <td><?php echo $row['Cus_Email']; ?></td>
                                                    <td><?php echo $row['Date_Message']; ?></td>
                                                    <td><?php echo $row['Cus_Subject']; ?></td>
                                                    <td><?php echo $row['Cus_Message']; ?></td>
                                                    <td>
                                                        <a
                                                            href="reply_message.php?id=<?php echo $row['id'];?>&action=en">
                                                            <button class="btn btn-primary" type="button">Reply</button>
                                                        </a>

                                                        <a
                                                            href="Delete/delete_contactmassg.php?id=<?php echo $row['id'];?>">
                                                            <button class="btn btn-danger" type="button" onclick="return Myfunction();"> Delete </button>
                                                        </a>

                                                        <script>
                                                        function Myfunction() {
                                                            return confirm("Confirm Delete?");
                                                        }
                                                        </script>

                                                    </td>
                                                </tr>
                                                <?php  } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 

                      $sql = $conn->query("SELECT * FROM user_message");
                      $rows = $sql->fetchAll();
                    ?>

                    <div id="wrapper">
                        <div id="page-wrapper" class="gray-bg dashbard-1">
                            <div class="content-main">

                                <!--banner-->
                                <div class="banner">
                                    <h2>
                                        <i class="fa fa-angle-right"></i>
                                        <span>ข้อความการติดต่อ</span>
                                    </h2>
                                </div>

                                <div class="grid-form">
                                    <div class="grid-form1">
                                        <h3 id="forms-example" class="">ข้อความการติดต่อ <span
                                                style="color: green; font-size:medium;">(สีเขียว = ยังไม่ตอบ </span>|<span
                                                style="color: red; font-size:medium;"> สีแดง = ตอบแล้ว)</span></h3>
                                        <form>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="tablelist_menu" class="display" style="width: 100%;">
                                                        <thead class=" text-primary">
                                                            <th>สถานะ</th>
                                                            <th>ชื่อ</th>
                                                            <th>อีเมล์</th>
                                                            <th>วันที่/เวลา</th>
                                                            <th>เรื่อง</th>
                                                            <th>ข้อความ</th>
                                                            <th>สถานะ</th>
                                                        </thead>

                                                        <tbody>
                                                            <?php 
                                                              foreach ($rows as $row) {
                                                            ?>

                                                            <tr>
                                                                <td><button class="btn btn-<?php echo $row['color']; ?>" style="width:5px;height:20px" type="button"></button></td>
                                                                <td><?php echo $row['Cus_Name']; ?></td>
                                                                <td><?php echo $row['Cus_Email']; ?></td>
                                                                <td><?php echo $row['Date_Message']; ?></td>
                                                                <td><?php echo $row['Cus_Subject']; ?></td>
                                                                <td><?php echo $row['Cus_Message']; ?></td>
                                                                <td>
                                                                    <a
                                                                        href="reply_message.php?id=<?php echo $row['id'];?>&action=th">
                                                                        <button class="btn btn-primary" type="button">ตอบกลับ </button>
                                                                    </a>

                                                                    <a
                                                                        href="Delete/delete_contactmassg.php?id=<?php echo $row['id'];?>">
                                                                        <button class="btn btn-danger" type="button" onclick="return Myfunction();"> ลบ</button>
                                                                    </a>

                                                                    <script>
                                                                    function Myfunction() {
                                                                        return confirm("ยืนยันการลบ?");
                                                                    }
                                                                    </script>

                                                                </td>
                                                            </tr>
                                                            <?php  } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
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
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
  <?php 
    include("inc_header.php"); 
    include "../connect/connect.php";
    include("inc_left_menu.php");
    include("que.php");
   ?>
</head>

<body>
    <!-- ENG section -->
        <?php 
            if(isset($_GET['action'])){

            $sql = $conn->query("SELECT * FROM book_a_table");
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
                        <span>book a table</span>
                    </h2>
                </div>

                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example">Book a table Form</h3>
                        <form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tablelist_menu" class="display" style="width: 100%;">
                                        <thead class=" text-primary">
                                            <th>Status</th>
                                            <th>#Que</th>
                                            <th>Customer Name</th>
                                            <th>Phone</th>
                                            <th>Date</th>
                                            <th>Startime</th>
                                            <th>Endtime</th>
                                            <th>#Customer Table</th>
                                            <th>Manage</th>
                                        </thead>

                                        <tbody>
                                            <?php 
                                              foreach($rows as $row) {
                                            ?>

                                            <tr>
                                                <td><button class="btn btn-<?php echo $row['color']; ?>" style="width:150px;height:35px" type="button"><?php echo $row['Cus_status']; ?></button></td>
                                                <td><?php echo $row['Cus_que']?></td>
                                                <td><?php echo $row['name_user']; ?></td>
                                                <!-- <td>ASD</td> -->
                                                <td><?php echo $row['user_phone']; ?></td>
                                                <td><?php echo $row['date_book']; ?></td>
                                                <td><?php echo $row['startime']; ?></td>
                                                <td><?php echo $row['endtime']; ?></td>
                                                <td><?php echo $row['tablebooking']; ?></td>
                                                <td>
                                                    <a
                                                        href="view_book_table.php?id=<?php echo $row['id'];?>&action=en">
                                                        <button class="btn btn-success" type="button"> Check in</button>
                                                    </a>

                                                    <a href="./Delete/delete_book_table.php?id=<?php echo $row['id'];?>">
                                                        <button class="btn btn-danger" type="button" onclick="return Myfunction();"> Cancle </button>
                                                    </a>

                                                    <script>
                                                    function Myfunction() {
                                                        return confirm("Confirm to Cencle?");
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

                  $sql = $conn->query("SELECT * FROM book_a_table");
                  $rows = $sql->fetchAll();
                ?>

                <div id="wrapper">
                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                    <i class="fa fa-angle-right"></i>
                                    <span>การจองโต๊ะ</span>
                                </h2>
                            </div>

                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">รายการจองโต๊ะ</h3>
                                    <form>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="tablelist_menu" class="display" style="width: 100%;">
                                                    <thead class=" text-primary">
                                                        <th>สถานะ</th>
                                                        <th>#คิวที่</th>
                                                        <th>ชื่อลูกค้า</th>
                                                        <th>เบอร์โทร</th>
                                                        <th>วันที่จอง</th>
                                                        <th>เริ่ม</th>
                                                        <th>สิ้นสุด</th>
                                                        <th>#โต๊ะ</th>
                                                        <th>จัดการ</th>
                                                    </thead>

                                                    <tbody>
                                                        <?php 
                                                          foreach($rows as $row) {
                                                        ?>

                                                        <tr>
                                                            <td><button class="btn btn-<?php echo $row['color']; ?>" style="width:150px;height:35px" type="button"><?php echo $row['Cus_status']; ?></button></td>
                                                            <td><?php echo $row['Cus_que']?></td>
                                                            <td><?php echo $row['name_user']; ?></td>
                                                            <!-- <td>ASD</td> -->
                                                            <td><?php echo $row['user_phone']; ?></td>
                                                            <td><?php echo $row['date_book']; ?></td>
                                                            <td><?php echo $row['startime']; ?></td>
                                                            <td><?php echo $row['endtime']; ?></td>
                                                            <td><?php echo $row['tablebooking']; ?></td>
                                                            <td>
                                                                <a
                                                                    href="view_book_table.php?id=<?php echo $row['id'];?>&action=th">
                                                                    <button class="btn btn-success" type="button">เช็คอิน </button>
                                                                </a>

                                                                <a
                                                                    href="./Delete/delete_book_table.php?id=<?php echo $row['id'];?>">
                                                                    <button class="btn btn-danger" type="button" onclick="return Myfunction();"> ยกเลิก
                                                                    </button>
                                                                </a>

                                                                <script>
                                                                function Myfunction() {
                                                                    return confirm("ยืนยันการยกเลิก?");
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
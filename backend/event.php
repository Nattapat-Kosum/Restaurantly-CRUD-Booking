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

            $sql = $conn->query("SELECT * FROM event_me");
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
                            <span>Event</span>
                        </h2>
                    </div>

                    <div class="grid-form">
                        <div class="grid-form1">
                            <h3 id="forms-example" class="">Event Form</h3>
                            <form>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="tablelist_menu" class="display" style="width: 100%;">
                                            <thead class=" text-primary">
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Price</th>
                                                <th>Manage</th>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                  foreach ($rows as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['title_event']; ?></td>
                                                    <td><?php echo $row['detail_event1']; ?></td>
                                                    <td><?php echo $row['price_event']; ?></td>

                                                    <td>
                                                        <a href="edit_event.php?id=<?php echo $row['id'];?>&action=en">
                                                            <button class="btn btn-secondary" type="button"> Edit</button>
                                                        </a>

                                                        <a href="./Delete/deleteEventEng.php?id=<?php echo $row['id'];?>">
                                                            <button class="btn btn-danger" type="button" onclick="return Myfunction()"> Delete </button>
                                                        </a>

                                                        <script>
                                                            function Myfunction() {
                                                                return confirm("Delete?");
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

                       $sql = $conn->query("SELECT * FROM event_me_th");
                       $rows = $sql->fetchAll();
                    ?>

                    <div id="wrapper">
                        <div id="page-wrapper" class="gray-bg dashbard-1">
                            <div class="content-main">

                                <!--banner-->
                                <div class="banner">
                                    <h2>
                                        <i class="fa fa-angle-right"></i>
                                        <span>อีเวนท์</span>
                                    </h2>
                                </div>

                                <div class="grid-form">
                                    <div class="grid-form1">
                                        <h3 id="forms-example" class="">ฟอร์มอีเวนท์</h3>
                                        <form>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="tablelist_menu" class="display" style="width: 100%;">
                                                        <thead class=" text-primary">
                                                            <th>หัวข้อ</th>
                                                            <th>รายละเอียด1</th>                                                     
                                                            <th>ราคา</th>
                                                            <th>จัดการ</th>
                                                        </thead>

                                                        <tbody>
                                                            <?php 
                                                              foreach ($rows as $row) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['title_event_th']; ?></td>
                                                                <td><?php echo $row['detail_event1_th']; ?></td>
                                                                <td><?php echo $row['price_event_th']; ?></td>

                                                                <td>
                                                                    <a
                                                                        href="edit_event.php?id=<?php echo $row['id'];?>&action=th">
                                                                        <button class="btn btn-secondary" type="button">แก้ไข </button>
                                                                    </a>

                                                                    <a
                                                                        href="./Delete/deleteEventTh.php?id=<?php echo $row['id'];?>">
                                                                        <button class="btn btn-danger" type="button" onclick="return Myfunction()"> ลบ </button>
                                                                    </a>
                                                                    
                                                                    <script>
                                                                        function Myfunction() {
                                                                            return confirm("ต้องการลบ?");
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
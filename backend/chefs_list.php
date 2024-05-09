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
        if (isset($_GET['action'])) {

            $sql = $conn->prepare("SELECT * FROM chefs");
            $sql->execute();

            switch ($_GET) {
                case ($_GET['action'] == 'en');
        ?>

                    <div id="wrapper">
                        <div id="page-wrapper" class="gray-bg dashbard-1">
                            <div class="content-main">

                                <!--banner-->
                                <div class="banner">
                                    <h2>
                                        <i class="fa fa-angle-right"></i>
                                        <span>Chefs</span>
                                    </h2>
                                </div>

                                <div class="grid-form">
                                    <div class="grid-form1">
                                        <h3 id="forms-example" class="">Chefs Form</h3>
                                        <form>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="tablelist_menu" class="display" style="width: 100%;">
                                                        <thead class=" text-primary">
                                                            <th>Chef Name</th>
                                                            <th>Position</th>
                                                            <th>Manage</th>
                                                        </thead>

                                                        <tbody>
                                                            <?php
                                                            while ($data = $sql->fetch()) {
                                                            ?>

                                                                <tr>
                                                                    <td><?php echo $data['chefs_name']; ?></td>
                                                                    <td><?php echo $data['chefs_position']; ?></td>

                                                                    <td>
                                                                        <a href="edit_chefs.php?id=<?php echo $data['id']; ?>&action=en">
                                                                            <button class="btn btn-secondary" type="button"> Edit</button>
                                                                        </a>

                                                                        <a href="./Delete/deleteChefsEng.php?id=<?php echo $data['id']; ?>&action=en">
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
                            <?php
                            case ($_GET['action'] == 'th');

                                $sql = $conn->query("SELECT * FROM chefs_th");
                                $rows = $sql->fetchAll();
                            ?>

                                <div id="wrapper">
                                    <div id="page-wrapper" class="gray-bg dashbard-1">
                                        <div class="content-main">

                                            <!--banner-->
                                            <div class="banner">
                                                <h2>
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>เชฟ</span>
                                                </h2>
                                            </div>

                                            <div class="grid-form">
                                                <div class="grid-form1">
                                                    <h3 id="forms-example" class="">เชฟทั้งหมด</h3>
                                                    <form>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table id="tablelist_menu" class="display" style="width: 100%;">
                                                                    <thead class=" text-primary">
                                                                        <th>ชื่อเชฟ</th>
                                                                        <th>ตำแหน่ง</th>
                                                                        <th>การจัดการ</th>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        foreach ($rows as $row) {
                                                                        ?>

                                                                            <tr>
                                                                                <td><?php echo $row['chefs_name_th']; ?></td>
                                                                                <td><?php echo $row['chefs_position_th']; ?></td>

                                                                                <td>
                                                                                    <a href="edit_chefs.php?id=<?php echo $row['id']; ?>&action=th">
                                                                                        <button class="btn btn-secondary" type="button">แก้ไข </button>
                                                                                    </a>

                                                                                    <a href="./Delete/deleteChefsTh.php?id=<?php echo $row['id']; ?>&action=th">
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

                                    <?php break;
                            } ?>
                                <?php } ?>

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
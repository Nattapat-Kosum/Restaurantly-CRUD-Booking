<?php session_start(); ?>

<!DOCTYPE HTML>
<html>

<head>
  <?php 
    include("inc_header.php"); 
    include "../connect/connect.php";
    include("inc_left_menu.php");
   ?>
</head>

<body>
    <!-- ENG section -->
    <?php 
          if(isset($_GET['action'])){

            $sql = $conn->query("SELECT * FROM menu");
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
                        <span>Menulist</span>
                    </h2>
                </div>

                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Menu List Form</h3>
                        <form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tablelist_menu" class="display" style="width: 100%;">
                                        <thead class=" text-primary">
                                            <th>Menu Name</th>
                                            <th>Menu Description</th>
                                            <th>Price</th>
                                            <th>Manage</th>
                                        </thead>

                                        <tbody>
                                            <?php 
                                              foreach ($rows as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name_menu']; ?></td>
                                                <td><?php echo $row['description_menu']; ?></td>
                                                <td><?php echo $row['price_menu']; ?></td>
                                                <td>
                                                    <a href="edit_menu.php?id=<?php echo $row['id'];?>&action=en">
                                                        <button class="btn btn-secondary" type="button"> Edit </button>
                                                    </a>

                                                    <a href="./Delete/menu_delete.php?id=<?php echo $row['id'];?>">
                                                        <button class="btn btn-danger" type="button" onclick="return Myfunction();"> Delete </button>
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
              $sql = $conn->query("SELECT * FROM menu_th");
              $rows = $sql->fetchAll();
            ?>

                <div id="wrapper">
                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                    <i class="fa fa-angle-right"></i>
                                    <span>รายการเมนู</span>
                                </h2>
                            </div>

                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">รายการเมนู</h3>
                                    <form>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class=" text-primary">
                                                        <th>ชื่อเมนู</th>
                                                        <th>รายละเอียดเมนู</th>
                                                        <th>ราคา</th>
                                                        <th>การจัดการ</th>
                                                    </thead>

                                                    <tbody>
                                                        <?php 
                                                          foreach ($rows as $row) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['name_menu_th']; ?></td>
                                                            <td><?php echo $row['description_menu_th']; ?></td>
                                                            <td><?php echo $row['price_menu_th']; ?></td>
                                                            <td>
                                                                <a
                                                                    href="edit_menu.php?id=<?php echo $row['id'];?>&action=th">
                                                                    <button class="btn btn-secondary" type="button">แก้ไข </button>
                                                                </a>

                                                                <a
                                                                    href="./Delete/menu_delete_th.php?id=<?php echo $row['id'];?>&action=th">
                                                                    <button class="btn btn-danger" type="button" onclick="return Myfunction()"> ลบ </button>
                                                                </a>

                                                                <script>
                                                                  function Myfunction() {
                                                                    return confirm("ลบรายการนี้?");
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


                            <?php 
                            }else{
                                $sql = $conn->query("SELECT * FROM menu");
                                $rows = $sql->fetchAll();
                            ?>

                            <div id="wrapper">
                                <div id="page-wrapper" class="gray-bg dashbard-1">
                                    <div class="content-main">

                                        <!--banner-->
                                        <div class="banner">
                                            <h2>
                                                <i class="fa fa-angle-right"></i>
                                                <span>Menulist</span>
                                            </h2>
                                        </div>

                                        <div class="grid-form">
                                            <div class="grid-form1">
                                                <h3 id="forms-example" class="">Menu List Form</h3>
                                                <form>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class=" text-primary">
                                                                    <th>Menu Name</th>
                                                                    <th>Menu Description</th>
                                                                    <th>Price</th>
                                                                    <th>Manage</th>
                                                                </thead>

                                                                <tbody>
                                                                    <?php 
                                                                      foreach ($rows as $row) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $row['name_menu']; ?></td>
                                                                        <td><?php echo $row['description_menu']; ?></td>
                                                                        <td><?php echo $row['price_menu']; ?></td>
                                                                        <td>
                                                                            <a
                                                                                href="edit_menu.php?id=<?php echo $row['id'];?>">
                                                                                <button class="btn btn-secondary" type="button"> Edit </button>
                                                                            </a>

                                                                            <a
                                                                                href="./Delete/menu_delete.php?id=<?php echo $row['id'];?>">
                                                                                <button class="btn btn-danger" type="button" onclick="return Myfunction()"> Delete</button>
                                                                            </a>

                                                                            <script>
                                                                              function Myfunction() {
                                                                                  return confirm("Delete!");
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
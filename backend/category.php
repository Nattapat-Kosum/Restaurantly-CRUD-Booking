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
    <?php if(isset($_GET['action'])){
        $sql = $conn->query("SELECT * FROM category_menu");
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

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
                        <span>Category</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Category Form</h3>
                        <form method="POST" action="add_class.php?action=categoryt">
                            <div class="form-group">
                                <label for="exampleInputcategory1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputcategory1" name="category_name"
                                    placeholder="input Catagory name">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>

                    <div class="grid-form">
                        <div class="grid-form1">
                            <h3 id="forms-example" class="">Category Form</h3>
                            <form>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="tablelist_menu" class="display" style="width: 100%;">
                                            <thead class=" text-primary">
                                                <th>Category Name</th>
                                                <th>Manage</th>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                  foreach($rows as $row) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $row['cate_name']; ?></td>
                                                    <td>
                                                        <a
                                                            href="category_edit.php?id=<?php echo $row['id'];?>&action=en">
                                                            <button class="btn btn-secondary" type="button"> Edit</button>
                                                        </a>

                                                        <a href="./Delete/deleteCateEng.php?id=<?php echo $row['id'];?>">
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
                    <?php 
                      case ($_GET['action'] == 'th'); 
                        $sql = $conn->query("SELECT * FROM category_menu_th");
                        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <div id="wrapper">
                        <div id="page-wrapper" class="gray-bg dashbard-1">
                            <div class="content-main">

                                <!--banner-->
                                <div class="banner">
                                    <h2>
                                        <i class="fa fa-angle-right"></i>
                                        <span>ประเภทสินค้า</span>
                                    </h2>
                                </div>
                                <!--//banner-->
                                
                                <!--grid-->
                                <div class="grid-form">
                                    <div class="grid-form1">
                                        <h3 id="forms-example" class="">ฟอร์มการเพิ่มประเภทสินค้า</h3>
                                        <form method="POST" action="add_class_th.php?action=categoryt">
                                            <div class="form-group">
                                                <label for="exampleInputcategory1">ชื่อประเภทสินค้า</label>
                                                <input type="text" class="form-control" id="exampleInputcategory1" name="category_name_th" placeholder="ใส่ชื่อประเภทสินค้า">
                                            </div>
                                            <button type="submit" class="btn btn-primary">เพิ่ม</button>
                                        </form>
                                    </div>

                                    <div class="grid-form">
                                        <div class="grid-form1">
                                            <h3 id="forms-example" class="">รายการประเภทสินค้า</h3>
                                            <form>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="tablelist_menu" class="display" style="width: 100%;">
                                                            <thead class=" text-primary">
                                                                <th>ชื่อประเภทสินค้า</th>
                                                                <th>จัดการ</th>
                                                            </thead>

                                                            <tbody>
                                                                <?php 
                                                                    foreach($rows as $row) {
                                                                ?>

                                                                <tr>
                                                                    <td><?php echo $row['cate_name_th']; ?></td>
                                                                    <!-- <td>ASD</td> -->
                                                                    <td>
                                                                        <a
                                                                            href="category_edit.php?id=<?php echo $row['id'];?>&action=th">
                                                                            <button class="btn btn-secondary" type="button"> แก้ไข </button>
                                                                        </a>

                                                                        <a
                                                                            href="./Delete/deleteCateTh.php?id=<?php echo $row['id'];?>">
                                                                            <button class="btn btn-danger" type="button" onclick="return Myfunction();"> ลบ
                                                                            </button>
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
                                    <?php  } ?>
                                                    
          <!---->
                   <?php include("inc_copy.php"); ?>
                   </div>
                  </div>
                <div class="clearfix"> </div>
              </div>
          <!---->

    <?php include("js.php"); ?>
</body>
</html>
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
            <?php if(isset($_GET['id'])){
                $cate_id = $_GET['id'];

                $query = $conn->prepare("SELECT * FROM category_menu WHERE id = :id");
                $query->bindParam(":id", $cate_id);
                $query->execute();
                $row = $query->fetch(PDO::FETCH_ASSOC);

               switch($_GET){
               case ($_GET['action'] == 'en');
            ?>

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                    <h2>
                        <a href="category.php?action=en">Go Back</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Category</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Category Edit</h3>
                        <form form method="POST" action="add_class.php?action=categoryedit">
                            <div class="form-group">
                                <label for="exampleInputcategory1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputcategory1" name="category_name_edit" placeholder="" value="<?php echo $row['cate_name']; ?>">
                            </div>
                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <button type="submit" class="btn btn-default">Edit</button>
                        </form>
                    </div>
                    <?php break; ?>

                    <!-- TH Section -->
                    <?php 
                     case ($_GET['action'] == 'th'); 
                     $cate_id = $_GET['id'];

                     $query = $conn->prepare("SELECT * FROM category_menu_th WHERE id = :id");
                     $query->bindParam(":id", $cate_id);
                     $query->execute();
                     $row = $query->fetch(PDO::FETCH_ASSOC);
                    ?>

                    <div id="wrapper">
                        <div id="page-wrapper" class="gray-bg dashbard-1">
                            <div class="content-main">

                                <!--banner-->
                                <div class="banner">
                                    <h2>
                                        <a href="category.php?action=th">ย้อนกลับ</a>
                                        <i class="fa fa-angle-right"></i>
                                        <span>ประเภทสินค้า</span>
                                    </h2>
                                </div>
                                <!--//banner-->

                                <!--grid-->
                                <div class="grid-form">
                                    <div class="grid-form1">
                                        <h3 id="forms-example" class="">แก้ไขประเภทสินค้า</h3>
                                        <form form method="POST" action="add_class_th.php?action=categoryedit_th">
                                            <div class="form-group">
                                                <label for="exampleInputcategory1">ชื่อประเภทสินค้า</label>
                                                <input type="text" class="form-control" id="exampleInputcategory1" name="category_name_edit" placeholder="" value="<?php echo $row['cate_name_th']; ?>">
                                            </div>
                                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                                            <button type="submit" class="btn btn-default">แก้ไข</button>
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
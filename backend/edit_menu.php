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

            $menuID = $_GET['id'];

            $query = $conn->query("SELECT * FROM category_menu");
            $rows = $query->fetchAll();

            $query2 = $conn->prepare("SELECT * FROM menu WHERE id = :id");
            $query2->bindParam(':id', $menuID);
            $query2->execute();
            $data = $query2->fetch();

            switch($_GET){
              case ($_GET['action'] == 'en');
          ?>


        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                    <h2>
                        <a href="menu_list.php?action=en">back</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Edit_Menu</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Edit Menu Form</h3>
                        <form method="POST" action="add_class.php?action=menuedit" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputMenuName1">Menu Name</label>
                                <input type="text" class="form-control" id="exampleInputMenuName1" name="menu_name" placeholder="input Menu Name" value="<?php echo $data['name_menu']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="selector1" class="col-sm-12 control-label">Category Select</label>

                                <div class="col-sm-8">
                                  <select name="selector1" id="selector1" class="form-control">
                                        <?php foreach ($rows as $row) { ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['cate_name']; ?></option><?php }?>
                                  </select>
                                </div>
                                <br><br><br>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Menu Description</label>
                                    <textarea class="form-control" name="details_menu"><?php echo $data['description_menu']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPrice1">Price</label>
                                    <input type="text" class="form-control" id="exampleInputPrice1" name="menu_price" placeholder="" value="<?php echo $data['price_menu']; ?>">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleInputFile">
                                        <h4>Menu Image</h4>
                                    </label>
                                    <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                </div>

                                <input name="menuID" type="hidden" value="<?php echo $data['id']; ?>" />
                                <button type="submit" class="btn btn-default">edit</button>
                        </form>
                    </div>
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 
                    
                      $menuID = $_GET['id'];

                      $query = $conn->query("SELECT * FROM category_menu_th");
                      $rows = $query->fetchAll();

                      $query2 = $conn->prepare("SELECT * FROM menu_th WHERE id = :id");
                      $query2->bindParam(':id', $menuID);
                      $query2->execute();
                      $data = $query2->fetch();
                    ?>

                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                <a href="menu_list.php?action=th">ย้อนกลับ</a>
                                    <i class="fa fa-angle-right"></i>
                                    <span>แก้ไขเมนู</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ฟอร์มแก้ไขเมนู</h3>
                                    <form method="POST" action="add_class_th.php?action=menuedit_th" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputMenuName1">ชื่อเมนู</label>
                                            <input type="text" class="form-control" id="exampleInputMenuName1" name="menu_name_th" placeholder="" value="<?php echo $data['name_menu_th']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="selector1" class="col-sm-12 control-label">เลือกประเภทสินค้า</label>

                                            <div class="col-sm-8">
                                              <select name="selector1_menu_th" id="selector1" class="form-control">
                                                    <?php foreach ($rows as $row){ ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['cate_name_th']; ?></option><?php }?>
                                              </select>
                                            </div>
                                            <br><br><br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">รายละเอียดเมนู</label>
                                                <textarea class="form-control" name="details_menu_th"><?php echo $data['description_menu_th']; ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPrice1">ราคา</label>
                                                <input type="text" class="form-control" id="exampleInputPrice1" name="menu_price_th" placeholder="" value="<?php echo $data['price_menu_th']; ?>">
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputFile">
                                                    <h4>รูปภาพเมนู</h4>
                                                </label>
                                                <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                            </div>

                                            <input name="menuID" type="hidden" value="<?php echo $data['id']; ?>" />
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
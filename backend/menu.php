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

            $sql = $conn->query("SELECT * FROM category_menu");
            $rows = $sql->fetchAll();
   
            switch($_GET){
              case ($_GET['action'] == 'en');  
        ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                    <h2>
                        <i class="fa fa-angle-right"></i>
                        <span>Menu</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Menu Form</h3>
                        <form method="POST" action="add_class.php?action=menu_r" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputMenuName1">Menu Name</label>
                                <input type="text" class="form-control" id="exampleInputMenuName1" name="menu_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="selector1" class="col-sm-12 control-label">Category Select</label>
                                <div class="col-sm-8">
                                  <select name="selector1" id="selector1" class="form-control">

                                        <?php  
                                          foreach ($rows as $row) { 
                                        ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['cate_name']; ?></option>
                                        <?php } ?>
                                  </select>
                                </div>
                                <br><br><br>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Menu Description</label>
                                    <textarea class="form-control" name="details_menu"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPrice1">Price</label>
                                    <input type="text" class="form-control" id="exampleInputPrice1" name="menu_price" placeholder="">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleInputFile">
                                        <h4>Menu Image</h4>
                                    </label>
                                    <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                </div>

                                <button type="submit" class="btn btn-default">submit</button>
                        </form>
                    </div>
                    <?php break; ?>


                    <!-- TH Section -->
                    <?php case ($_GET['action'] == 'th'); 
                        $sql = $conn->query("SELECT * FROM category_menu_th");
                        $rows = $sql->fetchAll();
                    ?>

                    <div id="page-wrapper" class="gray-bg dashbard-1">
                        <div class="content-main">

                            <!--banner-->
                            <div class="banner">
                                <h2>
                                    <i class="fa fa-angle-right"></i>
                                    <span>เมนู</span>
                                </h2>
                            </div>
                            <!--//banner-->

                            <!--grid-->
                            <div class="grid-form">
                                <div class="grid-form1">
                                    <h3 id="forms-example" class="">ฟอร์มเมนู</h3>
                                    <form method="POST" action="add_class_th.php?action=menu_r_th" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputMenuName1">ชื่อเมนู</label>
                                            <input type="text" class="form-control" id="exampleInputMenuName1" name="menu_name_r_th" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="selector1" class="col-sm-12 control-label">เลือกประเภทสินค้า</label>
                                            <div class="col-sm-8">
                                              <select name="selector1_th" id="selector1" class="form-control">

                                                    <?php  
                                                      foreach ($rows as $row) {  
                                                    ?>

                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['cate_name_th']; ?></option>
                                                    <?php } ?>
                                              </select>
                                            </div>
                                            <br><br><br>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">รายละเอียดเมนู</label>
                                                <textarea class="form-control" name="details_menu_r_th"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPrice1">ราคา</label>
                                                <input type="text" class="form-control" id="exampleInputPrice1" name="menu_price_r_th" placeholder="">
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="exampleInputFile">
                                                    <h4>รูปภาพเมนู</h4>
                                                </label>
                                                <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                            </div>

                                            <button type="submit" class="btn btn-default">บันทึก</button>
                                    </form>
                                </div>
                                <?php break; } ?>


                                <?php 
                                  }else{
                                    $sql = $conn->query("SELECT * FROM category_menu");
                                    $rows = $sql->fetchAll();
                                ?>

                                <div id="page-wrapper" class="gray-bg dashbard-1">
                                    <div class="content-main">

                                        <!--banner-->
                                        <div class="banner">
                                            <h2>
                                                <i class="fa fa-angle-right"></i>
                                                <span>Menu</span>
                                            </h2>
                                        </div>
                                        <!--//banner-->

                                        <!--grid-->
                                        <div class="grid-form">
                                            <div class="grid-form1">
                                                <h3 id="forms-example" class="">Menu Form</h3>
                                                <form method="POST" action="add_class.php?action=menu_r" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="exampleInputMenuName1">Menu Name</label>
                                                        <input type="text" class="form-control" id="exampleInputMenuName1" name="menu_name" placeholder="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="selector1" class="col-sm-12 control-label">Category Select</label>
                                                        <div class="col-sm-8">
                                                          <select name="selector1" id="selector1" class="form-control">

                                                                <?php  
                                                                  while($data = mysqli_fetch_array($query)){
                                                                ?>

                                                                <option value="<?php echo $data['id']; ?>"><?php echo $data['cate_name']; ?></option>
                                                                <?php } ?>
                                                          </select>
                                                        </div>
                                                        <br><br><br>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Menu Description</label>
                                                            <textarea class="form-control" name="details_menu"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPrice1">Price</label>
                                                            <input type="text" class="form-control" id="exampleInputPrice1" name="menu_price" placeholder="">
                                                        </div>
                                                        <br>

                                                        <div class="form-group">
                                                            <label for="exampleInputFile">
                                                                <h4>Menu Image</h4>
                                                            </label>
                                                            <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                                                        </div>

                                                        <button type="submit" class="btn btn-default">submit</button>
                                                </form>
                                            </div>
                                            <?php }?>

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
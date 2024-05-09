<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head><?php include("inc_header.php"); ?></head>
<body>
    <div id="wrapper">

   <?php  
    include("inc_left_menu.php");
    include "../connect/connect.php";

    $galleryId = $_GET['id'];

    $sql = $conn->prepare("SELECT * FROM gallery WHERE id = :id");
    $sql->bindParam(':id', $galleryId);
    $sql->execute();
    $row = $sql->fetch();
   ?>
        
        
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                  <h2>
                    <script>
                        document.write('<a href="' + document.referrer + '">Go Back</a>');
                    </script>
                        <i class="fa fa-angle-right"></i>
                        <span>Gallery(แกลลอรี่)</span>
                  </h2>
                </div>
                <!--//banner-->

                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                        <h3 id="forms-example" class="">Gallery Form(แกลลอรี่ฟอร์ม)</h3><br/>
                        <form method="POST" action="add_class.php?action=gallery_me" enctype=multipart/form-data>
                            <div class="form-group">
                                <label for="exampleInputFile">
                                    <h4>Gallery Image</h4><br/>
                                </label>
                                <input type="file" class="form-control" id="exampleInputFile" name="img_photo">
                            </div>
                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <button type="submit" class="btn btn-default" name="upload" style="margin-top: 10px;">submit</button>
                        </form>
                    </div>

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
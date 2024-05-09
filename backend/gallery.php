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
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="container-main">

                <?php if(isset($_GET['action'])){

                  $sql = $conn->query("SELECT * FROM gallery");
                  $rows = $sql->fetchAll();

                  switch($_GET){
                  case ($_GET['action'] == 'en');
                ?>

                <!--banner-->
                <div class="banner">
                    <h2>
                        <i class="fa fa-angle-right"></i>
                        <span>Gallery</span>
                    </h2>
                </div>
                <!--//banner-->

                <section id="gallery" class="gallery">
                    <div class="container" data-aos="fade-up">
                        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                            <div class="row g-0">
                                <?php  
                                  foreach ($rows as $row) {
                                ?>

                                <div class="col-lg-3 col-md">
                                    <div class="gallery-item">
                                        <h5 style="padding-bottom: 10px; margin-top: 10px;">
                                            <a href="../backend/edit_gallery.php?id=<?php echo $row['id'];?>&action=en">Edit</a>
                                        </h5>
                                        <a href="../backend/img/<?php echo $row['gallery_img']; ?>" class="gallery-lightbox" data-gall="gallery-item">
                                            <img src="../backend/img/<?php echo $row['gallery_img']; ?>" alt="" class="img-fluid" width="215" height="170">
                                        </a>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                </section>
                <?php break; ?>


                <!-- TH Section -->
                <div id="page-wrapper" class="gray-bg dashbard-1">
                    <div class="container-main">
                        <?php case ($_GET['action'] == 'th'); 

                          $sql = $conn->query("SELECT * FROM gallery");
                          $rows = $sql->fetchAll();
                        ?>

                        <!--banner-->
                        <div class="banner">
                            <h2>
                                <i class="fa fa-angle-right"></i>
                                <span>แกลลอรี่</span>
                            </h2>
                        </div>
                        <!--//banner-->

                        <section id="gallery" class="gallery">
                            <div class="container" data-aos="fade-up">
                                <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row g-0">
                                        <?php  
                                          foreach ($rows as $row) {
                                        ?>

                                        <div class="col-lg-3 col-md">
                                            <div class="gallery-item">
                                                <h5 style="padding-bottom: 10px; margin-top: 10px;">
                                                    <a href="../backend/edit_gallery.php?id=<?php echo $row['id'];?>&action=th">แก้ไข</a>
                                                </h5>
                                                <a href="../backend/img/<?php echo $row['gallery_img']; ?>" class="gallery-lightbox" data-gall="gallery-item">
                                                    <img src="../backend/img/<?php echo $row['gallery_img']; ?>" alt="" class="img-fluid" width="215" height="170">
                                                </a>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                        </section>

                        <?php break; } ?>
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
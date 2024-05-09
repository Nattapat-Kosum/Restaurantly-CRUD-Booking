<!-- ======= Gallery Section ======= -->
<?php
  include './connect/connect.php';  
?>

<section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <!-- EN -->
      <?php if(isset($_GET['action'])){
        $sql = $conn->query("SELECT * FROM gallery");
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

        switch($_GET){
          case ($_GET['action'] == 'en');
      ?>

        <div class="section-title">
            <h2>Gallery</h2>
            <p>Some photos from Our Restaurant</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

            <?php  
              foreach($rows as $row) {
            ?>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="./backend/img/<?php echo $row['gallery_img']; ?>" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="./backend/img/<?php echo $row['gallery_img']; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <?php }?>
        </div>
        <?php break; ?>


        <!-- TH -->
        <?php case ($_GET['action'] == 'th'); 
           $sql = $conn->query("SELECT * FROM gallery");
           $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>แกลลอรี่</h2>
            <p>รูปภาพบางส่วนร้านอาหารของเรา</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

            <?php  
              foreach($rows as $row) {
            ?>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="./backend/img/<?php echo $row['gallery_img']; ?>" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="./backend/img/<?php echo $row['gallery_img']; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
          <?php }?>
        </div>
        <?php break; } ?>


        <!-- else -->
        <?php }else{
          $sql = $conn->query("SELECT * FROM gallery");
          $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>Gallery</h2>
            <p>Some photos from Our Restaurant</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">

            <?php  
              foreach($rows as $row) {
            ?>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="./backend/img/<?php echo $row['gallery_img']; ?>" class="gallery-lightbox" data-gall="gallery-item">
                        <img src="./backend/img/<?php echo $row['gallery_img']; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
          <?php }?>
        </div>
    </div>
  <?php } ?>
</section>

<!-- End Gallery Section -->
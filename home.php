<!-- ======= Hero Section ======= -->
<?php
   include 'head.php';
   include './inc_header.php';
   include './connect/connect.php'; 
?>

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">

    <!-- EN -->
    <?php if($_GET){
        $sql = $conn->query("SELECT * FROM home WHERE 1");
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

        switch($_GET){
            case ($_GET['action'] == 'en'); 
    ?>

        <div class="row">
            <div class="col-lg-8">
                <?php 
                    foreach ($rows as $row) { 
                 ?>
                <h1><?php echo $row['title']; ?></h1>
                <h2><?php echo $row['drescription']; ?></h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
            </div>
        </div>
        <?php } ?>
        <?php break; ?>


        <!-- TH -->
        <?php case ($_GET['action'] == 'th'); 
            $sql = $conn->prepare("SELECT * FROM home_th WHERE 1");
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="row">
            <div class="col-lg-8">
                <h1><?php echo $row['title_th']; ?></h1>
                <h2><?php echo $row['drescription_th']; ?></h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">เมนูของเรา</a>
                    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">จองโต๊ะอาหาร</a>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
            </div>

        </div>
        <?php break; } ?>


        <!-- else -->
        <?php }else{ 
            $sql = $conn->query("SELECT * FROM home WHERE 1");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC); 
        ?>

        <div class="row">
            <div class="col-lg-8">
                <?php 
                    foreach ($rows as $row) { 
                 ?>
                <h1><?php echo $row['title']; ?></h1>
                <h2><?php echo $row['drescription']; ?></h2>

                <div class="btns">
                    <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
            </div>
        </div>
    </div>
  <?php } }?>
</section>

<!-- End Hero -->
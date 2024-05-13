<!-- ======= Hero Section ======= -->
<?php
    include 'head.php';
    include './inc_header.php';
    include './connect/connect.php'; 
?>

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">

        <!-- Check if 'action' is set in $_GET -->
        <?php if(isset($_GET['action'])){ 
            // Fetch data based on language selection
            switch($_GET['action']){
                case 'en': 
                    $sql = $conn->query("SELECT * FROM home");
                    $row = $sql->fetch(PDO::FETCH_ASSOC);
                    ?>

                    <div class="row">
                        <div class="col-lg-8">
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
                <?php break; ?>

                <?php case 'th': 
                    $sql = $conn->query("SELECT * FROM home_th WHERE 1");
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
                <?php break; ?>
            <?php } ?>

        <!-- If 'action' is not set or invalid, show default content in English -->
        <?php } else { 
            $sql = $conn->query("SELECT * FROM home");
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            ?>

            <div class="row">
                <div class="col-lg-8">
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
    </div>
</section>

<!-- End Hero Section -->

<!-- ======= Chefs Section ======= -->
<?php
    include 'head.php';
    include './inc_header.php';
    include './connect/connect.php';  
?>

<section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

        <!-- Eng section -->
        <?php 
            if(isset($_GET['action'])){
            $sql = $conn->query("SELECT * FROM chefs");
            $rows = $sql->fetchAll();

            switch($_GET){
                case ($_GET['action'] == 'en');
        ?>

        <div class="section-title">
            <h2>Chefs</h2>
            <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

            <?php  
                foreach($rows as $row) {
            ?>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="./backend/img/<?php echo $row['chefs_img']; ?>" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4><?php echo $row['chefs_name']; ?></h4>
                            <span><?php echo $row['chefs_position']; ?></span>
                        </div>

                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
        <?php break; ?>


        <!-- TH section -->
        <?php case ($_GET['action'] == 'th'); 
            $sql = $conn->query("SELECT * FROM chefs_th");
            $rows = $sql->fetchAll();
        ?>
            
        <div class="section-title">
            <h2>เชฟ</h2>
            <p>เชฟมืออาชีพของเรา</p>
        </div>

        <div class="row">

            <?php  
              foreach($rows as $row) {
            ?>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="./backend/img/<?php echo $row['chefs_img_th']; ?>" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4><?php echo $row['chefs_name_th']; ?></h4>
                            <span><?php echo $row['chefs_position_th']; ?></span>
                        </div>

                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
        <?php break; } ?>



        <!-- else -->
        <?php }else{
            $sql = $conn->query("SELECT * FROM chefs");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>Chefs</h2>
            <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">
            <?php  
                foreach($rows as $row) {
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="./backend/img/<?php echo $row['chefs_img']; ?>" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4><?php echo $row['chefs_name']; ?></h4>
                            <span><?php echo $row['chefs_position']; ?></span>
                        </div>

                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
    </div>
    <?php }?>
</section>

<!-- End Chefs Section -->
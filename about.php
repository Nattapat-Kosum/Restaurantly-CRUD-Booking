    <!-- ======= About Section ======= -->
    <?php
      include 'head.php';
      include './inc_header.php';
      include './connect/connect.php';
    ?>

    <section id="about" class="about">
    <div class="container" data-aos="fade-up">

            <!--EN-->
            <?php 
              if(isset($_GET['action'])){
                $sql = $conn->query("SELECT * FROM about");
                $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                
                switch($_GET){
                  case ($_GET['action'] == 'en'); 
            ?>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <?php 
                            foreach ($rows as $row) { 
                        ?>

                        <img src="./backend/img/<?php echo $row['img_about']; ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3><?php echo $row['title_about']; ?></h3>
                    <p class="fst-italic"><?php echo $row['detail1']; ?></p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i><?php echo $row['check1']; ?></li>
                        <li><i class="bi bi-check-circle"></i><?php echo $row['check2']; ?></li>
                        <li><i class="bi bi-check-circle"></i> <?php echo $row['check3']; ?></li>
                    </ul>
                    <p><?php echo $row['detail2']; ?></p>
                </div>
                <?php } ?>

                <?php break; ?>


                <!--TH-->
                <?php case ($_GET['action'] == 'th'); 
                    $sql = $conn->query("SELECT * FROM about_th");
                    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                        <?php 
                            foreach ($rows as $row) { 
                        ?>
                            <img src="./backend/img/<?php echo $row['img_about_th']; ?>" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3><?php echo $row['title_about_th']; ?></h3>
                        <p class="fst-italic"><?php echo $row['detail1_th']; ?></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i><?php echo $row['check1_th']; ?></li>
                            <li><i class="bi bi-check-circle"></i><?php echo $row['check2_th']; ?></li>
                            <li><i class="bi bi-check-circle"></i> <?php echo $row['check3_th']; ?></li>
                        </ul>
                        <p><?php echo $row['detail2_th']; ?></p>
                    </div>
                </div>
                    <?php } ?>
                    <?php break; } ?>



                    <?php 
                    }else{ 
                        $sql = $conn->query("SELECT * FROM about");
                        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                            <div class="about-img">
                            <?php 
                                foreach ($rows as $row) { 
                            ?>
                                <img src="./backend/img/<?php echo $row['img_about']; ?>" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                            <h3><?php echo $row['title_about']; ?></h3>
                            <p class="fst-italic"><?php echo $row['detail1']; ?></p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i><?php echo $row['check1']; ?></li>
                                <li><i class="bi bi-check-circle"></i><?php echo $row['check2']; ?></li>
                                <li><i class="bi bi-check-circle"></i> <?php echo $row['check3']; ?></li>
                            </ul>
                            <p><?php echo $row['detail2']; ?></p>
                        </div>
                        <?php } ?>
                </div>
        </div>
        <?php } ?>
    </section><!-- End About Section -->
<!-- ======= Events Section ======= -->
<?php
  include 'head.php';
  include './inc_header.php';
  include './connect/connect.php';  
?>

<!-- ======= Events Section ======= -->
<section id="events" class="events">
    <div class="container" data-aos="fade-up">

        <!-- EN -->
        <?php 
        if(isset($_GET['action'])){
            $sql = $conn->query("SELECT * FROM event_me");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

            switch($_GET){
                case ($_GET['action'] == 'en');
        ?>

        <div class="section-title">
            <h2>Events</h2>
            <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php  foreach ($rows as $row) { ?>

                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="./backend/img/<?php echo $row['img_event']; ?>" class="img-fluid" width="500" height="800" alt=""><br>
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3><?php echo $row['title_event']; ?></h3>
                            <div class="price">
                                <p><span><?php echo $row['price_event']; ?></span></p>
                            </div>

                            <p class="fst-italic">
                                <?php echo $row['detail_event1']; ?>
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text1']; ?></li>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text2']; ?></li>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text3']; ?></li>
                            </ul>
                            <p>
                                <?php echo $row['detail_event2']; ?>
                            </p>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
          <div class="swiper-pagination"></div>
        </div>
      <?php break; ?>


        <!-- TH -->
        <?php case ($_GET['action'] == 'th'); 
            $sql = $conn->query("SELECT * FROM event_me_th");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>อีเวนท์ของเรา</h2>
            <p>ส่วนหนึ่งบริการอีเวนท์ของเรา</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php  
                  foreach ($rows as $row ) {
                ?>

                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="./backend/img/<?php echo $row['img_event_th']; ?>" class="img-fluid" width="500" height="800" alt=""><br>
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3><?php echo $row['title_event_th']; ?></h3>
                            <div class="price">
                                <p><span><?php echo $row['price_event_th']; ?></span></p>
                            </div>

                            <p class="fst-italic">
                                <?php echo $row['detail_event1_th']; ?>
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text1_th']; ?></li>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text2_th']; ?></li>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text3_th']; ?></li>
                            </ul>
                            <p>
                                <?php echo $row['detail_event2_th']; ?>
                            </p>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
          <div class="swiper-pagination"></div>
        </div>
      <?php break; } ?>


      <!-- else -->
        <?php }else{
          $sql = $conn->query("SELECT * FROM event_me");
          $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>Events</h2>
            <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php  
                  foreach ($rows as $row ) {
                ?>

                <div class="swiper-slide">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="./backend/img/<?php echo $row['img_event']; ?>" class="img-fluid" width="500" height="800" alt=""><br>
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3><?php echo $row['title_event']; ?></h3>
                            <div class="price">
                                <p><span><?php echo $row['price_event']; ?></span></p>
                            </div>

                            <p class="fst-italic">
                                <?php echo $row['detail_event1']; ?>
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text1']; ?></li>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text2']; ?></li>
                                <li><i class="bi bi-check-circled"></i><?php echo $row['text3']; ?></li>
                            </ul>
                            <p>
                                <?php echo $row['detail_event2']; ?>
                            </p>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
          <div class="swiper-pagination"></div>
        </div>
    </div>
    <?php } ?>
</section>

<!-- End Events Section -->
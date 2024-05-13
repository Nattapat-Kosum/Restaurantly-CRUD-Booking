<!-- ======= Specials Section ======= -->
<?php
include 'head.php';
include './inc_header.php';
include './connect/connect.php';  
?>

<section id="specials" class="specials">
    <div class="container" data-aos="fade-up">

        <?php 
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            switch($action){
                case "en":
                    $sql = $conn->query("SELECT * FROM specials");
                    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>Specials</h2>
            <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">

                    <?php  
                    foreach ($rows as $row) {
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-<?php echo $row['id']; ?>"><?php echo $row['group_menu'] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">

                    <?php  
                    foreach ($rows as $row) {
                    ?>

                    <div class="tab-pane" id="tab-<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3><?php echo $row['groupname']; ?></h3>
                                <p class="fst-italic"><?php echo $row['detail_specials']; ?></p>
                            </div>

                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="./backend/img/<?php echo $row['img_specials']; ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php break; ?>

        <?php case "th": 
            $sql = $conn->query("SELECT * FROM specials_th");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>พิเศษ</h2>
            <p>เมนูพิเศษของเรา</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">

                    <?php  
                    foreach ($rows as $row) {
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-<?php echo $row['id']; ?>"><?php echo $row['group_menu_th'] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">

                    <?php  
                    foreach ($rows as $row) {
                    ?>

                    <div class="tab-pane" id="tab-<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3><?php echo $row['groupname_th']; ?></h3>
                                <p class="fst-italic"><?php echo $row['detail_specials_th']; ?></p>
                            </div>

                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="./backend/img/<?php echo $row['img_specials_th']; ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php break; } ?>

        <!-- else -->
        <?php }else{
            $sql = $conn->query("SELECT * FROM specials");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>Specials</h2>
            <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">

                    <?php  
                    foreach ($rows as $row) {
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-<?php echo $row['id']; ?>"><?php echo $row['group_menu'] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">

                    <?php  
                    foreach ($rows as $row) {
                    ?>

                    <div class="tab-pane" id="tab-<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3><?php echo $row['groupname']; ?></h3>
                                <p class="fst-italic"><?php echo $row['detail_specials']; ?></p>
                            </div>

                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="./backend/img/<?php echo $row['img_specials']; ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
    <?php } ?>
</section>
<!-- End Specials Section -->

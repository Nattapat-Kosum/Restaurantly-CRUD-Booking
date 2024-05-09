<?php
  include './connect/connect.php';  
?>


<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <?php if(isset($_GET['action'])){
            $sql = $conn->query("SELECT * FROM category_menu");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

            $sql2 = $conn->query("SELECT * FROM menu");
            $rows2 = $sql2->fetchAll(PDO::FETCH_ASSOC);

            switch($_GET){
                case ($_GET['action'] == 'en');
       ?>

        <div class="section-title">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">All</li>

                    <?php foreach ($rows as $row) { ?>

                    <li data-filter=".filter-<?php echo $row['id']; ?>"><?php echo $row['cate_name']; ?></li>
                    <?php }?>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($rows2 as $row2){ ?>

            <div class="col-lg-6 menu-item filter-<?php echo $row2['cate_id']; ?>">
                <img src="./backend/img/<?php echo $row2['menu_img']; ?>" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#"><?php echo $row2['name_menu']; ?></a><span>$<?php echo $row2['price_menu']; ?></span>
                </div>

                <div class="menu-ingredients">
                    <?php echo $row2['description_menu']; ?>
                </div>
            </div>
            <?php }?>
        </div>
        <?php break; ?>
        <!-- End Eng -->


        <!-- Start Th -->
        <?php case ($_GET['action'] == 'th'); 
            $sql = $conn->query("SELECT * FROM category_menu_th");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

            $sql2 = $conn->query("SELECT * FROM menu_th");
            $rows2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>เมนู</h2>
            <p>เมนูพิเศษของเรา</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">ทั้งหมด</li>

                    <?php foreach ($rows as $row) { ?>
                      
                    <li data-filter=".filter-<?php echo $row['id']; ?>"><?php echo $row['cate_name_th']; ?></li>
                    <?php }?>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($rows2 as $row2) { ?>

            <div class="col-lg-6 menu-item filter-<?php echo $row2['cate_id']; ?>">
                <img src="./backend/img/<?php echo $row2['menu_img_th']; ?>" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#"><?php echo $row2['name_menu_th']; ?></a><span>$<?php echo $row2['price_menu_th']; ?></span>
                </div>

                <div class="menu-ingredients">
                    <?php echo $row2['description_menu_th']; ?>
                </div>
            </div>
            <?php }?>
        </div>
        <?php break; } ?>

        
        <!-- else -->
        <?php }else{  
            $sql = $conn->query("SELECT * FROM category_menu");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

            $sql2 = $conn->query("SELECT * FROM menu");
            $rows2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="section-title">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">All</li>

                    <?php foreach ($rows as $row) { ?>

                    <li data-filter=".filter-<?php echo $row['id']; ?>"><?php echo $row['cate_name']; ?></li>
                    <?php }?>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <?php foreach ($rows2 as $row2) { ?>

            <div class="col-lg-6 menu-item filter-<?php echo $row2['cate_id']; ?>">
                <img src="./backend/img/<?php echo $row2['menu_img']; ?>" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#"><?php echo $row2['name_menu']; ?></a><span>$<?php echo $row2['price_menu']; ?></span>
                </div>

                <div class="menu-ingredients">
                    <?php echo $row2['description_menu']; ?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
  <?php }?>
</section>

<!-- End Menu Section -->
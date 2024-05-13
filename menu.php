<?php 
  include './connect/connect.php';  
?>

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">
        <?php 
            if(isset($_GET['action'])){
                $action = $_GET['action'];
                switch($action){
                    case "en":
                        $sql = $conn->query("SELECT * FROM category_menu");
                        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

                        $sql2 = $conn->query("SELECT * FROM menu");
                        $rows2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
                        
                        // English content
                        echo '
                            <div class="section-title">
                                <h2>Menu</h2>
                                <p>Check Our Tasty Menu</p>
                            </div>
                            <div class="row" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <ul id="menu-flters">
                                        <li data-filter="*" class="filter-active">All</li>';
                                        foreach ($rows as $row) {
                                            echo '<li data-filter=".filter-'.$row['id'].'">'.$row['cate_name'].'</li>';
                                        }
                        echo '      </ul>
                                </div>
                            </div>
                            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">';
                            foreach ($rows2 as $row2){
                                echo '
                                    <div class="col-lg-6 menu-item filter-'.$row2['cate_id'].'">
                                        <img src="./backend/img/'.$row2['menu_img'].'" class="menu-img" alt="">
                                        <div class="menu-content">
                                            <a href="#">'.$row2['name_menu'].'</a><span>$'.$row2['price_menu'].'</span>
                                        </div>
                                        <div class="menu-ingredients">
                                            '.$row2['description_menu'].'
                                        </div>
                                    </div>';
                            }
                        echo '</div>';
                        break;
                    case "th":
                        $sql = $conn->query("SELECT * FROM category_menu_th");
                        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

                        $sql2 = $conn->query("SELECT * FROM menu_th");
                        $rows2 = $sql2->fetchAll(PDO::FETCH_ASSOC);

                        // Thai content
                        echo '
                            <div class="section-title">
                                <h2>เมนู</h2>
                                <p>เมนูพิเศษของเรา</p>
                            </div>
                            <div class="row" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <ul id="menu-flters">
                                        <li data-filter="*" class="filter-active">ทั้งหมด</li>';
                                        foreach ($rows as $row) {
                                            echo '<li data-filter=".filter-'.$row['id'].'">'.$row['cate_name_th'].'</li>';
                                        }
                        echo '      </ul>
                                </div>
                            </div>
                            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">';
                            foreach ($rows2 as $row2){
                                echo '
                                    <div class="col-lg-6 menu-item filter-'.$row2['cate_id'].'">
                                        <img src="./backend/img/'.$row2['menu_img_th'].'" class="menu-img" alt="">
                                        <div class="menu-content">
                                            <a href="#">'.$row2['name_menu_th'].'</a><span>$'.$row2['price_menu_th'].'</span>
                                        </div>
                                        <div class="menu-ingredients">
                                            '.$row2['description_menu_th'].'
                                        </div>
                                    </div>';
                            }
                        echo '</div>';
                        break;
                    default:
                        echo '<p>No action specified.</p>';
                        break;
                }
            } else {
                // Default content if 'action' parameter is not set
                echo '<p>No action specified.</p>';
            }
        ?>
    </div>
</section>
<!-- End Menu Section -->

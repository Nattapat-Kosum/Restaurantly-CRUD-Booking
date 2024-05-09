<script src="https://kit.fontawesome.com/b28b7531d3.js" crossorigin="anonymous"></script>
<!--Get your code at fontawesome.com-->


<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="fa-solid fa-user d-flex align-items-center ms-4" style="padding-right: 5px;"></i>
            
            <?php if (isset($_SESSION["name"])) { ?>

                <a href="./backend/index.php?action=en"><span style="background-color:black; padding:5px 5px; border-radius:15px;"> Backend Manage (เข้าส่วนหลังบ้าน)</span></a></i>
                <?php }else{  ?>
                <a href="./backend/login/login.php"><span style="background-color:black; padding:5px;"> Backend Manage (เข้าส่วนหลังบ้าน)</span></a>
            </i>
            <?php } ?>
            <i class="bi bi-phone d-flex align-items-center" style="margin-left: 15px;"><span>+1 5589 55488 55</span></i>
            <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
        </div>

        <div class="languages d-none d-md-flex align-items-center">
            <ul>
                <li><a href="index.php?action=en">En</a></li>
                <li><a href="index.php?action=th">Th</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- End Top Bar -->
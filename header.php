<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <?php 
            if(isset($_GET['action'])){
                switch($_GET['action']){
                    case 'en': 
        ?>
        <h1 class="logo me-auto me-lg-0"><a href="index.php?action=en">Restaurantly</a></h1>
        <?php break; ?>

        <?php case 'th': ?>
        <h1 class="logo me-auto me-lg-0"><a href="index.php?action=th">Restaurantly</a></h1>
        <?php break; ?>
        <?php } ?>
        <?php }else{ ?>
        <h1 class="logo me-auto me-lg-0"><a href="index.php?action=en">Restaurantly</a></h1>
        <?php } ?>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <?php if(isset($_GET['action']) && $_GET['action'] == 'th'){ ?>
                <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
                <li><a class="nav-link scrollto" href="#about">เกี่ยวกับเรา</a></li>
                <li><a class="nav-link scrollto" href="#menu">เมนู</a></li>
                <li><a class="nav-link scrollto" href="#specials">เมนูพิเศษ</a></li>
                <li><a class="nav-link scrollto" href="#events">อีเวนท์</a></li>
                <li><a class="nav-link scrollto" href="#chefs">เชฟของเรา</a></li>
                <li><a class="nav-link scrollto" href="#gallery">แกลเลอรี่</a></li>
                <li><a class="nav-link scrollto" href="#contact">การติดต่อ</a></li>
                <li><a class="nav-link scrollto" href="customer_view.php" target="_blank" rel='noopener noreferrer'>เช็คสถานะการจอง</a></li>
                <li><a class="nav-link scrollto" href="#checktable">เช็คสถานะโต๊ะ</a></li>
                <?php }else{ ?>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                <li><a class="nav-link scrollto" href="#events">Events</a></li>
                <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="customer_view.php" target="_blank" rel='noopener noreferrer'>Check Booking status</a></li>
                <li><a class="nav-link scrollto" href="#checktable">Check table status</a></li>
                <?php } ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <?php if(isset($_GET['action']) && $_GET['action'] == 'th'){ ?>
        <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">จองโต๊ะอาหาร</a>
        <?php }else{ ?>
        <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>
        <?php } ?>
    </div>
</header>
<!-- End Header -->

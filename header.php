<!-- ======= Header ======= -->

<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <?php 
        if(isset($_GET['action'])){
          switch($_GET){
            case ($_GET['action'] == 'en'); 
      ?>
      
        <h1 class="logo me-auto me-lg-0"><a href="index.php?action=en">Restaurantly</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

      <?php break; ?>
      

      <!-- TH -->
      <?php  case ($_GET['action'] == 'th'); ?>
      <h1 class="logo me-auto me-lg-0"><a href="index.php?action=th">Restaurantly</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">จองโต๊ะอาหาร</a>
     
    <?php break; } ?>

      <!-- else -->
      <?php }else{ ?>
        <h1 class="logo me-auto me-lg-0"><a href="index.php?action=en">Restaurantly</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>
      <?php } ?>
    </div>
  </header>
  
  <!-- End Header -->
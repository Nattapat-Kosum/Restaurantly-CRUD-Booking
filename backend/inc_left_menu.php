
<!--Get your code at fontawesome.com-->
<script src="https://kit.fontawesome.com/b28b7531d3.js" crossorigin="anonymous"></script>

<nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1> 
            <a class="navbar-brand" href="../index.php?action=en " target="_blank">Restaurantly</a>
        </h1>
    </div>

    <div class=" border-bottom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="drop-men" style="padding-right: 15px; margin-top: 15px;">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='fas fa-user-alt' style='font-size:24px'></i>

                        <?php
                            if(isset($_SESSION["name"])) {
                        ?>
                        <span style="color: orange" >User: <?php echo $_SESSION["name"]; ?></span>
                        <?php 
                              }else{
                                 echo '<script>window.location="login/login.php"</script>';
                              }
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="login/logout.php">
                            <p style="text-align:right;">Logout.</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
        <?php 
            if(isset($_GET['action']) && isset($_SESSION["name"])) {
               switch($_GET['action']){
                   case 'en': 
        ?>

        <div class="clearfix"></div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span></a>
                    </li>

                    <li>
                        <a href="home.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span></a>
                    </li>

                    <li>
                        <a href="about.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">About</span></a>
                    </li>

                    <li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Manage Menu</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="menu.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Add Menu</a></i>
                            <li><a href="menu_list.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Menu List</a></i>
                        </ul>
                    </li>

                    <li>
                        <a href="category.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Category</span></a>
                    </li>

                    <li>
                        <a href="specials.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">SpecialsMenu</span></a>
                    </li>

                    <li>
                        <a href="event.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Event</span></a>
                    </li>

                    <li>
                        <a href="chefs_list.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Chefs</span></a>
                    </li>

                    <li>
                        <a href="gallery.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Gallery</span></a>
                    </li>

                    <li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Manage Contact</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contact.php?action=en" class="hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Contact</a></i>
                            <li><a href="contact_message.php?action=en" class="hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Contact Message</a></i>
                        </ul>
                    </li>

                    <li>
                        <a href="book_a_table.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Book a table</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Languages</span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="index.php?action=en" class="hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>English</a></i>
                            <li><a href="index.php?action=th" class="hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Thai</a></i>
                        </ul>
                    </li>
            </div>
        </div>
        <?php break; ?>


        <!-- TH section -->
        <?php  
            case 'th': 
        ?>

        <div class="clearfix"></div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">แดชบอร์ด</span></a>
                    </li>

                    <li>
                        <a href="home.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">หน้าแรก</span></a>
                    </li>

                    <li>
                        <a href="about.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">เกี่ยวกับเรา</span></a>
                    </li>

                    <li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">จัดการเมนู</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="menu.php?action=th" class="hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>เพิ่มเมนู</a></i>
                            <li><a href="menu_list.php?action=th" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>รายการเมนู</a></i>
                        </ul>
                    </li>

                    <li>
                        <a href="category.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">ประเภทสินค้า</span></a>
                    </li>

                    <li>
                        <a href="specials.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">เมนูพิเศษ</span></a>
                    </li>

                    <li>
                        <a href="event.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">อีเวนท์</span></a>
                    </li>

                    <li>
                        <a href="chefs_list.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">เชฟ</span></a>
                    </li>

                    <li>
                        <a href="gallery.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">แกลลอรี่</span></a>
                    </li>

                    <li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">ติดต่อ</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contact.php?action=th" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>ช่องทางการติดต่อ</a></i>
                            <li><a href="contact_message.php?action=th" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>รายการข้อความการติดต่อ</a></i>
                        </ul>
                    </li>

                    <li>
                        <a href="book_a_table.php?action=th" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">การจองโต๊ะ</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">ภาษา</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="index.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>ภาษาอังกฤษ</a></i>
                            <li><a href="index.php?action=th" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>ภาษาไทย</a></i>
                        </ul>
                    </li>
            </div>
        </div>
        <?php break; } ?>


        <?php }else{ ?>

        <div class="clearfix"></div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span></a>
                    </li>

                    <li>
                        <a href="home.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span></a>
                    </li>

                    <li>
                        <a href="about.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">About</span></a>
                    </li>

                    <li>
                        <a href="" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon"></i><span class="nav-label">Manage Menu</span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="menu.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Add Menu</a></i>
                            <li><a href="menu_list.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Menu List</a></i>
                        </ul>
                    </li>

                    <li>
                        <a href="category.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon"></i><span class="nav-label">Category</span></a>
                    </li>

                    <li>
                        <a href="specials.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">SpecialsMenu</span></a>
                    </li>

                    <li>
                        <a href="event.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Event</span></a>
                    </li>

                    <li>
                        <a href="chefs_list.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Chefs</span></a>
                    </li>

                    <li>
                        <a href="gallery.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Gallery</span></a>
                    </li>

                    <li>
                        <a href="contact.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Manage Contact</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contact.php?action=en" class="hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Contact</a></i>
                            <li><a href="contact_message.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Contact Message</a></i>
                        </ul>
                    </li>

                    <li>
                        <a href="book_a_table.php?action=en" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Book a table</span></a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Languages</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="index.php?action=en" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>English</a></i>
                            <li><a href="index.php?action=th" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Thai</a></i>
                        </ul>
                    </li>
            </div>
        </div>

        <?php }?>
</nav>

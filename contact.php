 <!-- ======= Contact Section ======= -->
 <?php
   include 'head.php';
   include './inc_header.php';
   include './connect/connect.php';
   date_default_timezone_set('asia/bangkok');
   $date=date('d-m-Y h:i:s');
?>

 <section id="contact" class="contact">
     <div class="container" data-aos="fade-up">

         <?php 
          if(isset($_GET['action'])){
            $sql = $conn->query("SELECT * FROM contact_us");
            $rows = $sql->fetch();
          
            switch($_GET){
                case ($_GET['action'] == 'en');
        ?>

         <div class="section-title">
             <h2>Contact</h2>
             <p>Contact Us</p>
         </div>
     </div>

     <div data-aos="fade-up">
         <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1398134.5263307053!2d7.103138438023295!3d46.809594749324155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64ef6f596d61%3A0x5c56b5110fcb7b15!2z4Liq4Lin4Li04LiV4LmA4LiL4Lit4Lij4LmM4LmB4Lil4LiZ4LiU4LmM!5e0!3m2!1sth!2sth!4v1642653044933!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
     </div>

     <div class="container" data-aos="fade-up">
         <div class="row mt-5">
             <div class="col-lg-4">
                 <div class="info">
                     <div class="address">
                         <i class="bi bi-geo-alt"></i>
                         <h4>Location:</h4>
                         <p><?php echo $rows['address_contact']; ?></p>
                     </div>

                     <div class="open-hours">
                         <i class="bi bi-clock"></i>
                         <h4>Open Hours:</h4>
                         <p><?php echo $rows['detail_op']; ?></p>
                     </div>

                     <div class="email">
                         <i class="bi bi-envelope"></i>
                         <h4>Email:</h4>
                         <p><?php echo $rows['email']; ?></p>
                     </div>

                     <div class="phone">
                         <i class="bi bi-phone"></i>
                         <h4>Call:</h4>
                         <p><?php echo $rows['phone']; ?></p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-8 mt-5 mt-lg-0">
                 <form action="./backend/add_class.php?action=contact_email" method="POST" role="form" class="">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <input type="text" name="cusName" class="form-control" id="name" placeholder="Your Name" required>
                         </div>

                         <div class="col-md-6 form-group mt-3 mt-md-0">
                             <input type="email" class="form-control" name="cusEmail" id="email" placeholder="Your Email" required>
                         </div>
                    </div>

                         <div class="form-group mt-3">
                             <input type="text" class="form-control" name="cusSubject" id="subject" placeholder="Subject" required>
                         </div>

                         <div class="form-group mt-3">
                             <textarea class="form-control" name="cusMessage" rows="8" placeholder="Message" required></textarea>
                         </div>

                         <input name="date" type="hidden" value="<?php echo $date ?>">
                         <input name="color" type="hidden" value="success" />
                         <div class="text-center"><button type="submit" class="btn btn-primary" style="color: white;">Send Message</button></div>
                 </form>
             </div>
         </div>
         <?php break; ?>


         <!-- TH section -->
         <?php case ($_GET['action'] == 'th'); 

            $sql = $conn->query("SELECT * FROM contact_us_th");
            $rows = $sql->fetch();
         ?>

         <div class="section-title">
             <h2>ช่องทางการติดต่อ</h2>
             <p>ติดต่อเรา</p>
         </div>
     </div>

     <div data-aos="fade-up">
         <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1398134.5263307053!2d7.103138438023295!3d46.809594749324155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64ef6f596d61%3A0x5c56b5110fcb7b15!2z4Liq4Lin4Li04LiV4LmA4LiL4Lit4Lij4LmM4LmB4Lil4LiZ4LiU4LmM!5e0!3m2!1sth!2sth!4v1642653044933!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
     </div>

     <div class="container" data-aos="fade-up">
         <div class="row mt-5">
             <div class="col-lg-4">
                 <div class="info">

                     <div class="address">
                         <i class="bi bi-geo-alt"></i>
                         <h4>สถานที่:</h4>
                         <p><?php echo $rows['address_contact_th']; ?></p>
                     </div>

                     <div class="open-hours">
                         <i class="bi bi-clock"></i>
                         <h4>เวลา:</h4>
                         <p><?php echo $rows['detail_op_th']; ?></p>
                     </div>

                     <div class="email">
                         <i class="bi bi-envelope"></i>
                         <h4>อีเมลล์:</h4>
                         <p><?php echo $rows['email_th']; ?></p>
                     </div>

                     <div class="phone">
                         <i class="bi bi-phone"></i>
                         <h4>เบอร์โทรติดต่อ:</h4>
                         <p><?php echo $rows['phone_th']; ?></p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-8 mt-5 mt-lg-0">
                 <form action="./backend/add_class.php?action=contact_email" method="post" role="form" class="">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <input type="text" name="cusName" class="form-control" id="name" placeholder="ชื่อของคุณ" required>
                         </div>

                         <div class="col-md-6 form-group mt-3 mt-md-0">
                             <input type="email" class="form-control" name="cusEmail" id="email" placeholder="อีเมล์ของคุณ" required>
                         </div>
                    </div>

                         <div class="form-group mt-3">
                             <input type="text" class="form-control" name="cusSubject" id="subject" placeholder="หัวข้อ" required>
                         </div>

                         <div class="form-group mt-3">
                             <textarea class="form-control" name="cusMessage" rows="8" placeholder="ข้อความ" required></textarea>
                         </div>

                         <input name="date" type="hidden" value="<?php echo $date ?>">
                         <input name="color" type="hidden" value="success" />
                         <div class="text-center"><button type="submit" class="btn btn-primary" style="color: white;">ส่งข้อความ</button></div>
                 </form>
             </div>
         </div>
         <?php break; } ?>

         
         <!-- else -->
         <?php }else{
            $sql = $conn->query("SELECT * FROM contact_us");
            $rows = $sql->fetch();
         ?>

         <div class="section-title">
             <h2>Contact</h2>
             <p>Contact Us</p>
         </div>
     </div>

     <div data-aos="fade-up">
         <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1398134.5263307053!2d7.103138438023295!3d46.809594749324155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64ef6f596d61%3A0x5c56b5110fcb7b15!2z4Liq4Lin4Li04LiV4LmA4LiL4Lit4Lij4LmM4LmB4Lil4LiZ4LiU4LmM!5e0!3m2!1sth!2sth!4v1642653044933!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
     </div>

     <div class="container" data-aos="fade-up">
         <div class="row mt-5">
             <div class="col-lg-4">
                 <div class="info">
                     <div class="address">
                         <i class="bi bi-geo-alt"></i>
                         <h4>Location:</h4>
                         <p><?php echo $rows['address_contact']; ?></p>
                     </div>

                     <div class="open-hours">
                         <i class="bi bi-clock"></i>
                         <h4>Open Hours:</h4>
                         <p><?php echo $rows['detail_op']; ?></p>
                     </div>

                     <div class="email">
                         <i class="bi bi-envelope"></i>
                         <h4>Email:</h4>
                         <p><?php echo $rows['email']; ?></p>
                     </div>

                     <div class="phone">
                         <i class="bi bi-phone"></i>
                         <h4>Call:</h4>
                         <p><?php echo $rows['phone']; ?></p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-8 mt-5 mt-lg-0">
                 <form action="./backend/add_class.php?action=contact_email" method="post" role="form" class="">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                         </div>

                         <div class="col-md-6 form-group mt-3 mt-md-0">
                             <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                         </div>
                     </div>

                     <div class="form-group mt-3">
                         <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                     </div>

                     <div class="form-group mt-3">
                         <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                     </div>

                     <input name="date" type="hidden" value="<?php echo $date ?>">
                     <input name="color" type="hidden" value="success" />
                     <div class="text-center"><button type="submit" class="btn btn-primary" style="color: white;">Send Message</button></div>
                 </form>
             </div>
         </div>
     </div>
     <?php }?>
 </section>
 
 <!-- End Contact Section -->
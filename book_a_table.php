<?php
    include 'head.php';
    include './inc_header.php';
    include './connect/connect.php';      
?>

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <!-- EN -->
        <?php if(isset($_GET['action'])){
            $sql = $conn->query("SELECT * FROM table_booking");
            $rows = $sql->fetchAll();

            switch($_GET){
                case ($_GET['action'] == 'en');
        ?>

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
        </div>
        <form action="forms/book-a-table1.php" method="POST" role="form" class="" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="username1" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="useremail1" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="tel" pattern="[0-9]{10}" maxlength="10" class="form-control" name="UserPhone1" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-2 col-md-1 form-group mt-3">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-2 col-md-1 form-group mt-3">
                    <input type="time" class="form-control" name="timeBook" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                    <div class="validate"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
                <select name="selector" id="selector" class="form-control">

                    <?php  
                      foreach ($rows as $row) {                    
                    ?>

                    <option><?php echo $row['tb_booking']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <div class="validate"></div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="messageUser" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>

            <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
            </div>

            <div class="panel-footer">
                <div class="text-center">
                    <input type="hidden" name="level" value="10">
                    <input type="hidden" name="size" value="10">
                    <input name="statusBook" type="hidden" value="wait for check in" />
                    <input name="color" type="hidden" value="default" />
                    <button type="submit" class="btn-primary btn">Book a Table</button>
                </div>
            </div>
        </form>
        <?php break; ?>


        <!-- TH -->
        <?php case ($_GET['action'] == 'th'); 

           $sql = $conn->query("SELECT * FROM table_booking");
           $rows = $sql->fetchAll();
        ?>

        <div class="section-title">
            <h2>การจอง</h2>
            <p>จองโต๊ะอาหาร</p>
        </div>

        <form action="forms/book-a-table1.php" method="POST" role="form" class="" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="username1" class="form-control" id="name" placeholder="ชื่อที่ใช้การจองของคุณ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="useremail1" id="email" placeholder="อีเมล์" data-rule="email" data-msg="Please enter a valid email" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="tel" pattern="[0-9]{10}" maxlength="10" class="form-control" name="UserPhone1" id="phone" placeholder="เบอร์โทรติดต่อ" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-2 col-md-1 form-group mt-3">
                    <input type="date" name="date" class="form-control" id="date" placeholder="วันที่"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-2 col-md-1 form-group mt-3">
                    <input type="time" class="form-control" name="timeBook" id="time" placeholder="เวลา" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="# จำนวนคน" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                    <div class="validate"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
                <select name="selector" id="selector" class="form-control">

                    <?php  
                      foreach ($rows as $row) {
                    ?>
                    <option><?php echo $row['tb_booking']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <div class="validate"></div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="messageUser" rows="5" placeholder="ข้อความ"></textarea>
                <div class="validate"></div>
            </div>

            <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
            </div>

            <div class="panel-footer">
                <div class="text-center">
                    <input type="hidden" name="level" value="10">
                    <input type="hidden" name="size" value="10">
                    <input name="statusBook" type="hidden" value="wait for check in" />
                    <input name="color" type="hidden" value="default" />
                    <button type="submit" class="btn-primary btn">จองโต๊ะอาหาร</button>
                </div>
            </div>
        </form>
        <?php break; } ?>


        <?php }else{
           $sql = $conn->query("SELECT * FROM table_booking");
           $rows = $sql->fetchAll();
        ?>

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
        </div>

        <form action="forms/book-a-table1.php" method="POST" role="form" class="" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="username1" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="useremail1" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="tel" pattern="[0-9]{10}" maxlength="10" class="form-control" name="UserPhone1" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-2 col-md-1 form-group mt-3">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-2 col-md-1 form-group mt-3">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                    <div class="validate"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
                <select name="selector" id="selector" class="form-control">

                    <?php  
                      foreach ($rows as $row) {  
                    ?>
                    <option><?php echo $row['tb_booking']; ?></option>
                    <?php } ?>

                </select>
            </div>

            <div class="validate"></div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>

            <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
            </div>

            <div class="panel-footer">
                <div class="text-center">
                    <input type="hidden" name="level" value="10">
                    <input type="hidden" name="size" value="10">
                    <input name="statusBook" type="hidden" value="wait for check in" />
                    <input name="color" type="hidden" value="default" />
                    <button type="submit" class="btn-primary btn">Book a Table</button>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
</section>

<!-- End Book A Table Section -->
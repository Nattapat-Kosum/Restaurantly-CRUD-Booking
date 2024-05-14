<!DOCTYPE html>
<html>

<?php
  include 'head.php';
  include './inc_header.php';
  include './connect/connect.php';  
  date_default_timezone_set('asia/bangkok');
  $datetoday = date('Y-m-d');
?>

<head>
    <!-- for Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- for Bootstrap 4 -->
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
    <link href='lib/main.css' rel='stylesheet' />
    <script src='lib/main.js'></script>
    <script src='js/theme-chooser.js'></script>


    <!-- Start EN -->
    <?php if(isset($_GET['action'])){
        $sql = $conn->query("SELECT * FROM book_a_table");
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

        switch($_GET){
          case ($_GET['action'] == 'en');
    ?>

    <section id="checktable" class="checktable">
        <div class="section-title">
            <h2>check reservation</h2>
            <p>Check the status of reserved tables</p>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar;

            initThemeChooser({
                init: function(themeSystem) {
                    calendar = new FullCalendar.Calendar(calendarEl, {
                        themeSystem: themeSystem,
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                        },
                        initialDate: '<?php echo $datetoday; ?>',
                        weekNumbers: true,
                        navLinks: true, // can click day/week names to navigate views
                        editable: false,
                        selectable: false,
                        nowIndicator: true,
                        dayMaxEvents: true, // allow "more" link when too many events
                        // showNonCurrentDates: false,
                        eventResizable: false,
                        eventDraggable: false,
                        eventStartEditable: false,
                        eventDurationEditable: false,


                        events: [
                            <?php foreach ($rows as $row ) { ?> {
                                title: '<?php echo $row['tablebooking']; ?> time <?php echo $row['startime']; ?> to <?php echo $row['endtime']; ?> already booking',
                                start: '<?php echo $row['date_book'];  ?>',
                                end: ''
                            },
                            <?php } ?>
                        ]
                    });
                    calendar.render();
                },

                change: function(themeSystem) {
                    calendar.setOption('themeSystem', themeSystem);
                }

            });

        });
        </script>

        <?php break; ?>


        <!-- Start Th -->
        <?php case ($_GET['action'] == 'th'); 
            $sql = $conn->query("SELECT * FROM book_a_table");
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($rows);
        ?>

        <section id="checktable" class="checktable">
            <div class="section-title">
                <h2>ตรวจสอบการจอง</h2>
                <p>สถานะการจองโต๊ะ (ถ้ามีการจองโต๊ะไหนในช่วงเวลานั้น ๆจะแสดงในปฏิทินนี้)</p>
            </div>
            </p>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar;

                initThemeChooser({
                    init: function(themeSystem) {
                        calendar = new FullCalendar.Calendar(calendarEl, {
                            themeSystem: themeSystem,
                            headerToolbar: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                            },
                            initialDate: '<?php echo $datetoday; ?>',
                            weekNumbers: true,
                            navLinks: true, // can click day/week names to navigate views
                            editable: false,
                            selectable: false,
                            nowIndicator: true,
                            dayMaxEvents: true, // allow "more" link when too many events
                            // showNonCurrentDates: false,
                            eventResizable: false,
                            eventDraggable: false,
                            eventStartEditable: false,
                            eventDurationEditable: false,

                            

                            events: [
                                <?php foreach ($rows as $row ) { ?> {
                                    title: '<?php echo $row['tablebooking']; ?> เวลา <?php echo $row['startime']; ?> ถึง <?php echo $row['endtime']; ?> ถูกจองแล้ว',
                                    start: '<?php echo $row['date_book']; ?>',
                                },
                                <?php } ?>
                            ]
                        });
                        calendar.render();
                    },

                    change: function(themeSystem) {
                        calendar.setOption('themeSystem', themeSystem);
                    }
                });
            });
            </script>

            <?php break; } ?>


            <!-- else -->
            <?php }else{
               $sql = $conn->query("SELECT * FROM book_a_table");
               $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <section id="checktable" class="checktable">
                <div class="section-title">
                    <h2>check reservation</h2>
                    <p>Check the status of reserved tables</p>
                </div>
                </p>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    var calendar;

                    initThemeChooser({
                        init: function(themeSystem) {
                            calendar = new FullCalendar.Calendar(calendarEl, {
                                themeSystem: themeSystem,
                                headerToolbar: {
                                    left: 'prev,next today',
                                    center: 'title',
                                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                                },
                                initialDate: '<?php echo $datetoday; ?>',
                                weekNumbers: true,
                                navLinks: true, // can click day/week names to navigate views
                                editable: false,
                                selectable: false,
                                nowIndicator: true,
                                dayMaxEvents: true, // allow "more" link when too many events
                                // showNonCurrentDates: false,
                                eventResizable: false,
                                eventDraggable: false,
                                eventStartEditable: false,
                                eventDurationEditable: false,




                                events: [
                                    <?php foreach ($rows as $row ) { ?> {
                                        title: '<?php echo $row['tablebooking']; ?> time <?php echo $row['startime']; ?> to <?php echo $row['endtime']; ?> already booking',
                                        start: '<?php echo $row['date_book'];  ?>',
                                        end: ''
                                    },
                                    <?php } ?>
                                ]
                            });
                            calendar.render();
                        },

                        change: function(themeSystem) {
                            calendar.setOption('themeSystem', themeSystem);
                        }
                    });
                });
                </script>
                <?php } ?>


                <!-- CSS Style for calender Book a table status-->
                <style>
                body {
                    margin: 0;
                    padding: 0;
                    font-size: 14px;
                }

                #top,
                #calendar.fc-theme-standard {
                    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                }

                #calendar.fc-theme-bootstrap {
                    font-size: 14px;
                }

                #top {
                    background: #eee;
                    border-bottom: 1px solid #ddd;
                    padding: 0 10px;
                    line-height: 40px;
                    font-size: 12px;
                    color: #000;
                }

                #top .selector {
                    display: inline-block;
                    margin-right: 10px;
                }

                #top select {
                    font: inherit;
                    /* mock what Boostrap does, don't compete  */
                }

                .left {
                    float: left
                }

                .right {
                    float: right
                }

                .clear {
                    clear: both
                }

                #calendar {
                    max-width: 1100px;
                    margin: 40px auto;
                    padding: 0 10px;
                }
            </style>
</head>

<body>
    <div id='top'>
        <div class='left'>
            <div id='theme-system-selector' class='selector'>
                Theme System:
                <select>
                    <option value='bootstrap5' selected>Bootstrap 5</option>
                    <option value='bootstrap'>Bootstrap 4</option>
                    <option value='standard'>unthemed</option>
                </select>
            </div>

            <div data-theme-system="bootstrap,bootstrap5" class='selector' style='display:none'>
                Theme Name:
                <select>
                    <option value='' selected>Default</option>
                    <option value='cerulean'>Cerulean</option>
                    <option value='cosmo'>Cosmo</option>
                    <option value='cyborg'>Cyborg</option>
                    <option value='darkly'>Darkly</option>
                    <option value='flatly'>Flatly</option>
                    <option value='journal'>Journal</option>
                    <option value='litera'>Litera</option>
                    <option value='lumen'>Lumen</option>
                    <option value='lux'>Lux</option>
                    <option value='materia'>Materia</option>
                    <option value='minty'>Minty</option>
                    <option value='pulse'>Pulse</option>
                    <option value='sandstone'>Sandstone</option>
                    <option value='simplex'>Simplex</option>
                    <option value='sketchy'>Sketchy</option>
                    <option value='slate'>Slate</option>
                    <option value='solar'>Solar</option>
                    <option value='spacelab'>Spacelab</option>
                    <option value='superhero'>Superhero</option>
                    <option value='united'>United</option>
                    <option value='yeti'>Yeti</option>
                </select>
            </div>
            <span id='loading' style='display:none'>loading theme...</span>
        </div>

        <div class='right'>
            <span class='credits' data-credit-id='bootstrap-standard' style='display:none'>
                <a href='https://getbootstrap.com/docs/3.3/' target='_blank' rel='noopener noreferrer'>Theme by Bootstrap</a>
            </span>
            
            <span class='credits' data-credit-id='bootstrap-custom' style='display:none'>
                <a href='https://bootswatch.com/' target='_blank' rel='noopener noreferrer'>Theme by Bootswatch</a>
            </span>
        </div>
    <div class='clear'></div>
</div>

<div id='calendar'></div>

</body>

</html>
</section>
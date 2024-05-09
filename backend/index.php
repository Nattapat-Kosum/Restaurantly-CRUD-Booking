<?php session_start(); ?>

<!DOCTYPE HTML>
<html>

<head><?php include("inc_header.php"); ?></head>

<body>
    <div id="wrapper">
        <?php include("inc_left_menu.php"); ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">

                <!--banner-->
                <div class="banner">
                    <h2>
                        <i class="fa fa-angle-right"></i>
                        <span>Dashboards</span>
                    </h2>
                </div>
                <!--//banner-->

                <!--content-->
                <div class="content-top">
                    <div class="col-md-12">
                        <div class="content-top-1">
                            <div class="col-md-6 top-content">
                                <h4>Test</h4>
                                <label>999999</label>
                            </div>

                            <div class="col-md-6 top-content1">
                                <div id="demo-pie-1" class="pie-title-center" data-percent="25">
                                    <span class="pie-value"></span>
                                </div>
                            </div>

                            <div class="clearfix"> </div>

                        </div>

                        <div class="content-top-1">
                            <div class="col-md-6 top-content">
                                <h5>Points</h5>
                                <label>6295</label>
                            </div>

                            <div class="col-md-6 top-content1">
                                <div id="demo-pie-2" class="pie-title-center" data-percent="50">
                                    <span class="pie-value"></span>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>

                        <div class="content-top-1">
                            <div class="col-md-6 top-content">
                                <h5>Cards</h5>
                                <label>3401</label>
                            </div>

                            <div class="col-md-6 top-content1">
                                <div id="demo-pie-3" class="pie-title-center" data-percent="75">
                                    <span class="pie-value"></span>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <!--//content-->

                </div>
            </div>
        </div>
    </div>
    <!---->

    <?php include("js.php"); ?>
</body>
</html>
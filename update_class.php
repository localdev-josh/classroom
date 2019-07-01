<?php include 'admin_header.php'; ?>

<?php
    function confirmQuery($result) {

    global $mysqli;
    if(!$result ) {
        echo "error";
            // die("QUERY FAILED ." . mysqli_error($mysqli));
        }
    }
?>


<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <span class="logoss">CLASSROOM</span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="display:none;">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="admin.php">Home</a>
                                    <!-- <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Classes</a></li>
                                        </ul> -->
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Class</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="register-course.php">New Class</a></li>
                                        <li><a href="viewClasses.php">View Class</a></li>
                                    </ul>
                                </li>
                                <li><a href="users.php">Users</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="register-users.php">Add Users</a></li>
                                        <li><a href="users.php">View Class</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="admin.php"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#classes"><i class="notika-icon notika-form"></i>
                                Class</a>
                        </li>
                        <li><a data-toggle="tab" href="#users"><i class="notika-icon notika-support"></i>
                            Users</a>
                    </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            </ul>
                        </div>
                        <div id="classes" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="register-course.php">Register Class</a>
                                </li>
                                <li><a href="viewClasses.php">View All Classes</a>
                                </li>
                            </ul>
                        </div>
                        <div id="users" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="register-users.php">Add Users</a>
                                </li>
                                <li><a href="users.php">View Users</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Breadcomb area Start-->
        <div class="breadcomb-area">
        <div class="container" id="reg">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn"
                                        style="display: flex; align-items: center; justify-contents: center;">
                                        <h2>Update Class</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bread-comb End -->

    <div class="form-example-area">
        <div class="container" style="display: flex;justify-content: center; align-items: center;">
            <div class="row" style="width: 50%;">
                <!-- style="background: red; width: 70%" -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">


                    <?php

                        if(isset($_GET['edit_class'])){
                            $the_class_main_id = $_GET['edit_class'];
                        }


                        $query = "SELECT * FROM class WHERE course_id = '$the_class_main_id'";
                        $select_stuffs = mysqli_query($mysqli, $query);

                        while($row = mysqli_fetch_assoc($select_stuffs)){
                            $course_id = $row['course_id'];
                            $course_name = $row['course_name'];
                            $course_title = $row['course_title'];
                            $period = $row['period'];
                            $course_date = $row['course_date'];
                            $max_part = $row['max_part'];

                        }



                        if(isset($_POST['update_class'])){
                            $course_name = $_POST['course_name'];
                            $course_title = $_POST['course_title'];
                            $period = $_POST['period'];
                            $course_date = date($_POST['course_date']);
                            $max_part = $_POST['max_part'];                          


                            $query = "UPDATE class SET ";
                            $query .= "course_name = '{$course_name}', ";
                            $query .= "course_title = '{$course_title}', ";
                            $query .= "period = '{$period}', ";
                            $query .= "course_date = '{$course_date}', ";
                            $query .= "max_part = '{$max_part}' ";
                            $query .= "WHERE course_id = '{$the_class_main_id}'";

                            
                            
                            $update_class = mysqli_query($mysqli, $query);
                            
                        confirmQuery($update_class);

                        echo "<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Class Updated! <a href='viewClasses.php' class='alert-link'>View Classes</a>
                    </div>";
                        }
                    ?>

                    <form method="post">
                        </div><br>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row" style="margin-left: 2px;">
                                    <div style="line-height: 20px;" id="cN">Course Code</div><br>
                                    <div class="">
                                        <input type="text" name="course_name" class="form-control" id="inps" value="<?php echo $course_name ?>">
                                    </div>

                                </div>
                            </div>
                        </div><br>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row" style="margin-left: 2px;">
                                    <div style="line-height: 20px;" id="cN">Course Title</div><br>
                                    
                                    <div class="">
                                        <input type="text" name="course_title" class="form-control" id="inps" value="<?php echo $course_title ?>">
                                    </div>

                                </div>
                            </div>
                        </div><br>


                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div style="line-height: 20px;" id="cN">Start Date</div><br>
                                        <div class="form-group " id="">
                                            <!-- <div style="line-height: 20px; background: red; float: left;" id="cN">Course Name</div><br> -->
                                            <div class="input-group date nk-int-st">
                                                <!-- <span class="input-group-addon"></span> -->
                                                <input type="text" name="course_date" class="form-control" placeholder="2019-06-24" value="<?php echo $course_date ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div style="line-height: 20px;" id="cN">Period</div><br>
                                        <div class="form-group ic-cmp-int">
                                            <div class="nk-int-st">
                                                <input type="text" name="period" class="form-control" placeholder="08:00-11:00" value="<?php echo $period ?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row" style="margin-left: 2px;">
                                    <div style="line-height: 20px;" id="cN">Max Number of Participants</div><br>
                                    <!-- <div style="line-height: 20px;" id="cN">Period</div><br> -->
                                    <div class="form-group ic-cmp-int">
                                        <div class="nk-int-st">
                                            <input type="text" name="max_part" class="form-control" placeholder="e.g 120" value="<?php echo $max_part ?>">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div><br>

                        <!-- <div class="form-example-int form-horizental mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="fm-checkbox">
                                        <label><input type="checkbox" class="i-checks"> <i></i> Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-example-int mg-t-15" style="">
                            <div class="row" style="">
                                <div class="col-md-1" style="float: left;">
                                <button type="submit" class="btn btn-success notika-btn-success" name="update_class" style="padding: 0.6em 2.3em" id="sub">Update Class</button>
                                    <!-- <input type="submit" name="create_class" class="btn btn-success notika-btn-success" VALUE="SUBMIT"> -->
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area" style="opacity: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018
                            . All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->


    <!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
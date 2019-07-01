#<?php include 'admin_header.php'; ?>


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
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle"><span><i
                                            class="notika-icon notika-search"></i></span></a>
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
                                <li><a data-toggle="collapse" data-target="#Charts" href="admin.html">Home</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Class</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="register-course.php">New Class</a></li>
                                    </ul>
                                </li>
                                <li><a href="users.php">Users</a></li>
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
                    <li><a data-toggle="tab" href="#users"><i class="notika-icon notika-form"></i>
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
                                <!-- <li><a href="viewClasses.html">View Classes</a> -->
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
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn"
                                        style="display: flex; align-items: center; justify-contents: center;">
                                        <h2>All Classes</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Title</th>
                                        <th>Start Time</th>
                                        <th>Max Participants</th>
                                        <th>Registered</th>
                                        <th>Period</th>
                                        <th>Venue</th>
                                        <th><center>Status</center></th>
                                    </tr>
                                </thead>
                                <tbody>




                                <?php

                                  $query = "SELECT * FROM class ORDER BY course_id DESC";
                                  $select_class = mysqli_query($mysqli, $query);

                                  while($row = mysqli_fetch_assoc($select_class)) {

                                      $course_id = escape($row['course_id']);
                                      $course_name = escape($row['course_name']);
                                      $course_title = escape($row['course_title']);
                                      $course_date = date('dS F Y H:i:sa', strtotime($row['course_date']));
                                      $max_part = $row['max_part'];
                                      $period = $row['period'];
                                      $venue = $row['venue'];

                                      $query = "SELECT count(max_count) AS total FROM staff_class WHERE class_name = '$course_title'";
                                      $select_name = mysqli_query($mysqli, $query);
                                      
                                      $values = mysqli_fetch_assoc($select_name);
                                        $rowscount = $values['total'];
                                        

                                        

                                        
                                ?>
                                    <tr>
                                        <td><?php echo $course_name ?></td>
                                        <td><?php echo $course_title ?></td>
                                        <td><?php echo $course_date ?></td>
                                        <td><center><?php echo $max_part ?></center></td>
                                        <td><center><?php echo $rowscount ?></center></td>
                                        <td><?php echo $period ?></td>
                                        <td><?php echo $venue ?></td>
                                        <td>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab" style="padding: 0.7em 1.3em; font-size: 14px;">
                                                <h5 class="panel-title"><center>
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#<?php echo $course_id ?>" style="font-size: 13px; color: #000;" aria-expanded="false">Actions</a></center>
                                                </h5>
                                            </div>
                                            <div id="<?php echo $course_id ?>" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                  <a href='update_class.php?edit_class=<?php echo $course_id ?>' id='actions'>Update</a>
                                                  <br><br>
                                                  <a href="#" id="actions" data-toggle='modal' data-target='#delete_m'>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        </td>

                                    </tr>
                                  <?php } ?>


                                </tbody>


                                <tfoot>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Title</th>
                                        <th>Start Time</th>
                                        <th>Max Participants</th>
                                        <th>Registered</th>
                                        <th>Period</th>
                                        <th>Venue</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='modal fade' id='delete_m' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog role='document'>
                 <div class='modal-content'>
                     <div class='modal-header'>
                          <!-- <h5 class='modal-title' id='exampleModalLabel'>Are you sure you know what you are doing?</h5> -->
                          <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                          <span aria-hidden='true'>×</span>
                          </button>
                      </div>
                      <div class='modal-body'>Select 'Deregister' if you want to remove class.</div>
                        <div class='modal-footer'>
                            <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
                               <a class='btn btn-danger' href='viewClasses.php?delete=<?php echo $course_id ?>'>Delete Class</a>
                            </div>
                      </div>
                 </div>
    </div>
    <?php
    if(isset($_GET['delete'])) {
      $the_delete_id = $_GET['delete'];

      $query = "DELETE FROM class WHERE course_id = {$the_delete_id} ";
      $delete_query = mysqli_query($mysqli, $query);
      header("Location: viewClasses.php");
      
  }
  
  
  
  ?>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area" style="opacity: 0">
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
    <!-- End Footer area-->
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

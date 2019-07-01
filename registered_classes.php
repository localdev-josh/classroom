<?php include 's_admin_header.php'; ?>
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
                  <div class="breadcomb-ctn" style="display: flex; align-items: center; justify-contents: center;">
                    <h2>Classes Registered</h2>
                    <!-- <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                <div class="breadcomb-report">
                  <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i
                      class="notika-icon notika-sent"></i></button>
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
                    <th>Course Name</th>
                    <th>Deadline Status</th>
                    
                  </tr>
                </thead>
                <tbody>

                  <?php


                    if(isset($_SESSION['email'])){
                      $the_email_id = $_SESSION['email'];

                      // echo $the_email_id;

                      $query = "SELECT * FROM users WHERE email = '$the_email_id'";
                      $select_users = mysqli_query($mysqli, $query);

                      while($row = mysqli_fetch_assoc($select_users)) {

                        $id = $row['id'];
                        $email = $row['email'];
                        $username = $row['username'];

                        $query = "SELECT * FROM staff_class WHERE class_user = '$the_email_id'";
                        $select_c = mysqli_query($mysqli, $query);

                        while($row = mysqli_fetch_assoc($select_c)) {
                          $class_name = $row['class_name'];
                          $class_id = $row['class_id'];

                        
                  
                  ?>
                  <tr>
                    <td><?php echo $class_name ?></td>
                    <?php

                        $query = "SELECT * FROM class WHERE course_title = '$class_name'";
                        $select_n = mysqli_query($mysqli, $query);

                        while($row = mysqli_fetch_assoc($select_n)) {
                          
                          $course_date = $row['course_date'];

                          $s_course_date = strtotime($course_date);

                          $eig = strtotime(18 * 60 * 60);
                          
                          $difference = $s_course_date - $eig;

                          $datetime = date("Y-m-d H:i:s");

                          $timestamp = strtotime($datetime);
                          
                        }
                        
                          if($timestamp > $difference){
           
                      ?>
                    <td><button class="btn btn-danger notika-btn-danger waves-effect" disabled="disabled">Deregister Course</button></td>
                          <?php }
                            else {
                              echo "<td><button data-toggle='modal' data-target='#exampleModal' class='btn btn-danger notika-btn-danger waves-effect'>Deregister Course</button></td>";
                            }

                            echo "<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog role='document'>
                                <div class='modal-content'>
                                <div class='modal-header'>
                                    
                                    <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>×</span>
                                    </button>
                                </div>
                                <div class='modal-body'>Select 'Deregister' if you want to remove class.</div>
                                <div class='modal-footer'>
                                    <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
                                    <a class='btn btn-danger' href='registered_classes.php?delete={$class_id}''>Deregister</a>
                                </div>
                                </div>
                            </div>
                        </div>";
                          
                          
                          
                          ?>
                  </tr>

                        <?php }}}?>
                  
                </tbody>
                <tfoot>
                  <tr>
                  <th>Course Name</th>
                    <th>Deadline Status</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
    if(isset($_GET['delete'])) {
      $the_delete_id = $_GET['delete'];

      $query = "DELETE FROM staff_class WHERE class_id = {$the_delete_id} ";
      $delete_query = mysqli_query($mysqli, $query);
      header("Location: registered_classes.php");
      
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
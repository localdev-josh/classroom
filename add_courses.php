<?php include 's_admin_header.php'; ?>
    <!-- Main Menu area End-->
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
                                        <h2>Add Class</h2>
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
    <!-- Form Element area Start-->
    <div class="form-example-area">
        <div class="container" style="display: flex;justify-content: center; align-items: center;">
            <div class="row" style="width: 50%;">
                <!-- style="background: red; width: 70%" -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                
                    <div class="form-example-wrap mg-t-30">

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                            <?php
                                        

                                        if(isset($_POST['add_class'])){
                                            $class_name = $_POST['course_name'];
                                            $class_time = date('d-m-y');
                                            $class_user = $_POST['class_user'];

                                            $query = "SELECT * FROM class WHERE course_title = '$class_name'";
                                            $select_class = mysqli_query($mysqli, $query);
        
                                            while($row = mysqli_fetch_assoc($select_class)) {
        
                                                $course_id = $row['course_id'];
                                                $max_part = $row['max_part'];
                                                
                                            }
                                            $query = "SELECT count(max_count) AS total FROM staff_class WHERE class_name = '$class_name'";
                                                $select_c = mysqli_query($mysqli, $query);
            
                                                
                                                    $values = mysqli_fetch_assoc($select_c);
                                                    $rowscount = $values['total'];

                                                
                                                   
                                                if($rowscount > $max_part){
                                                    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Class Limit Exceded!
                                                </div>";
                                                } else{

                                            

                                            $query = "INSERT INTO staff_class(class_name,class_time, class_user)";

                                            $query .=
                                            "VALUES('{$class_name}',now(),'{$class_user}')";
                                            
                                            $create_class_query = mysqli_query($mysqli, $query);

                                            $s_query = "UPDATE staff_class SET max_count = max_count + 1 WHERE class_name = '$class_name' ";
                                            $send_query = mysqli_query($mysqli, $s_query);
                                            
                                        
                                        echo "<div class='alert alert-success alert-dismissible' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Class Created! <a href='registered_classes.php' class='alert-link'>View Classes</a>
                                    </div>";
                                        }   
                                    }
                                    ?>


                                <div class="row" style="margin-left: 2px;">
                                <form method="post">
                                    <div style="line-height: 20px;" id="cN">Course Name</div><br>



                                                                            <input type="text" hidden name="class_user" value="<?php echo $_SESSION['email'];?>">

                                        
                                        <select name="course_name" id=""
                                            style="width: 90%; padding: 8px; border: 0px solid transparent; border-bottom: 1px solid rgb(197, 191, 191);">


                                            <?php
                                                $query = "SELECT * FROM class";
                                                $select_class = mysqli_query($mysqli, $query);

                                                while($row = mysqli_fetch_assoc($select_class)) {

                                                    $course_title = $row['course_title'];
                                                    $course_name = $row['course_name'];
                                                    $max_part = $row['max_part'];
                                            
                                            ?>
                                            <option value="<?php echo $course_title ?>"><?php echo $course_name.str_repeat("&nbsp;",30); ?>  <?php echo $course_title ?></option>
                                            

                                            <?php } ?>
                                        </select>

                                        <br>

                                        <div class="form-example-int mg-t-15">
                                            <div class="row" style="">
                                                <div class="col-md-1" style="float: left;">
                                                    <button type="submit" name="add_class" class="btn btn-success notika-btn-success" style="padding:10px;">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                            
                                    </form>
                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->



    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../includes/logout.php">Logout</a>
        </div>
        </div>
    </div>
</div>
    <!-- Start Footer area-->
    <!-- <div class="footer-copyright-area">
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
    </div> -->
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
    <!-- Input Mask JS
            ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
            ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
            ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
            ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
            ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
            ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
            ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
            ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
            ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
            ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
            ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
            ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
            ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
            ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
            ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
            ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
<?php session_start(); ?>
<?php ob_start(); ?>

<?php include 'includes/connect.php'; ?>
<?php include 'functions.php'; ?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Staff Dashboard</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- meanmenu CSS
		============================================ -->
  <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="css/wave/waves.min.css">
  <link rel="stylesheet" href="css/wave/button.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/notika-custom-icon.css">
  <!-- Data Table JS
		============================================ -->
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  
  <!-- Start Header Top Area -->
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="logo-area">
            <!-- <a href="#"><img src="img/logo/logo.png" alt="" /></a> -->
            <span class="logoss">CLASSROOM</span>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="header-top-menu">
            <ul class="nav navbar-nav notika-top-nav"> 


                <?php


                    if(isset($_SESSION['email'])){
                                       
                        $the_user_email = $_SESSION['email'];
                        $user_query = "SELECT * FROM users WHERE email = '{$the_user_email}'";
                         $select_all_user_query = mysqli_query($mysqli, $user_query);
                         while($row = mysqli_fetch_assoc($select_all_user_query)) {
                                 
                    
                         $username = $row['username'];
                                           
                
                ?>

              <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class=" dropdown-toggle"><span><span style="margin-right:9px; font-size: 15px;"><?php echo $username; ?></span><i class="notika-icon notika-support"></i><i style="font-size: 12px; margin: 5px;" class="fa fa-caret-down"></i></span></a>

              <?php } } ?>

                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn" style="padding: 0; margin-left: 12px;">
                    <div class="hd-message-info" style="width: 50%; float: right;">                       
                        <a href="#">
                            <div class="hd-message-sn" style="text-align: right;">
                                <div class="hd-mg-ctn">
                                    <a href="logout.php"><h3><i class="fa fa-sign-out" style="padding: 10px;"></i>Logout</h3></a>
                                </div>
                            </div>
                        </a>
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
                <li><a data-toggle="collapse" href="s_dashboard.php">Home</a>
                 
                </li>
                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Class</a>
                  <ul id="demoevent" class="collapse dropdown-header-top">
                    <li><a href="add_courses.php">New Class</a></li>
                    <li><a href="registered_classes.php">View Classes Registered</a></li>
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
            <li><a href="s_dashboard.php"><i class="notika-icon notika-house"></i> Home</a>
            </li>
            <li class="active"><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-form"></i> Classes</a>
            </li>
          </ul>
          <div class="tab-content custom-menu-content">
            <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
              </ul>
            </div>
            <div id="mailbox" class="tab-pane active notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
                <li><a href="add_courses.php">New Class</a>
                </li>
                <li><a href="registered_classes.php">View Classes Registered</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- Main Menu area End-->
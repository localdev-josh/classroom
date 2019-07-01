<?php include 'includes/header.php'; ?>
<?php include 'includes/connect.php'; ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['signup'])){

      require 'includes/register.php';

    }elseif(isset($_POST['login'])){

      require 'includes/login.php';

    } elseif(isset($_POST['forgot'])){

      require 'includes/forgot.php';
    }
  }
  
?>
  <body>
    <div class="login-content" style="display: flex; align-items:center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 imgg">
            <div
              class="login100-pic js-tilt"
              data-tilt=""
              style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);float: right;"
            >
              <img
                src="img-01.png"
                alt="IMG"
                style="position: relative;bottom: -35px;"
              />
            </div>
          </div>
          <div class="col-md-8">
            <div
              class="nk-block toggled ko"
              id="l-login"
              style="float:left;"
            >
            <span class="signI">Sign In</span>
            <form action="" method="post">
            <div class="nk-form">
                <div class="input-group">
                  <span class="input-group-addon nk-ic-st-pro"
                    ><i class="notika-icon notika-support"></i
                  ></span>
                  <div class="nk-int-st">
                    <input
                      name="email"
                      type="email"
                      class="form-control"
                      id="inp"
                      placeholder="Email"
                      required
                    />
                  </div>
                </div>
                <div class="input-group mg-t-15">
                  <span class="input-group-addon nk-ic-st-pro"
                    ><i class="notika-icon notika-edit"></i
                  ></span>
                  <div class="nk-int-st">
                    <input
                      name="password"
                      type="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                </div>
                <div class="fm-checkbox">
                  <label
                    ><input type="checkbox" class="i-checks" /> <i></i> Keep me
                    signed in</label
                  >
                </div>
                <button type="submit" name="login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i
                ></button>
                <!-- <input type="submit" value="submit" name="register" > -->
                <!-- <a
                  href="#l-register"
                  data-ma-action="nk-login-switch"
                  data-ma-block="#l-register"
                  class="btn btn-login btn-success btn-float"
                  ><i class="notika-icon notika-right-arrow right-arrow-ant"></i
                ></a> -->
              </div>
            </form>
              

              <div class="nk-navigation nk-lg-ic">
                <!-- <a
                  href="#"
                  data-ma-action="nk-login-switch"
                  data-ma-block="#l-register"
                  ><i class="notika-icon notika-plus-symbol"></i>
                  <span>Register</span></a
                > -->
                <a
                  href="#"
                  data-ma-action="nk-login-switch"
                  data-ma-block="#l-forget-password"
                  ><i>?</i> <span>Forgot Password</span></a
                >
              </div>
            </div>









            <!-- Register -->
            

            <!-- Forgot Password -->
            

            <div class="nk-block" id="l-forget-password" style="float:left;">
                <span class="signI">Forgot Password</span>
                <form action="" method="post">
                <div class="nk-form">
                <div class="input-group">
                  <span class="input-group-addon nk-ic-st-pro"
                    ><i class="notika-icon notika-mail"></i
                  ></span>
                  <div class="nk-int-st">
                    <input
                      name="email"
                      type="email"
                      class="form-control"
                      id="inp"
                      placeholder="Email Address"
                      required
                    />
                  </div>
                </div>
                <button type="submit" name="forgot" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i
                ></button>
                <!-- <a
                  href="#l-login"
                  data-ma-action="nk-login-switch"
                  data-ma-block="#l-login"
                  class="btn btn-login btn-success btn-float"
                  ><i class="notika-icon notika-right-arrow"></i
                ></a> -->
              </div>
                </form>
              <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a
                  href=""
                  data-ma-action="nk-login-switch"
                  data-ma-block="#l-login"
                  ><i class="notika-icon notika-right-arrow"></i>
                  <span>Sign in</span></a
                >
                <!-- <a
                  href=""
                  data-ma-action="nk-login-switch"
                  data-ma-block="#l-register"
                  ><i class="notika-icon notika-plus-symbol"></i>
                  <span>Register</span></a
                > -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <?php include 'includes/footer.php';
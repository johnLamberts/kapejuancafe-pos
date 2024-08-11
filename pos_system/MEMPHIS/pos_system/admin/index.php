<?php
session_start();
include("./config/dbcon.php");
include("./config/checklogin.php");
// check_login();

if (isset($_POST["login"])) {
  $admin_email = $_POST['admin_email'];
  $admin_password = $_POST['admin_password'];

  $get_admin = "SELECT admin_email, admin_password, admin_id  FROM  kpjcafe_admin WHERE (admin_email =? AND admin_password =?)";

  $stmt = mysqli_prepare($mysqli_conn, "SELECT admin_email, admin_password, admin_id  FROM  kpjcafe_admin WHERE (admin_email =? AND admin_password =?)");


  if (!$stmt) {
    die("mysqli error: " . mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "ss", $admin_email, $admin_password);


  if (!mysqli_stmt_execute($stmt)) {
    die('stmt error: ' . mysqli_stmt_error($stmt));
  }

  $param_email = $admin_email;
  $param_password = $admin_password;

  mysqli_stmt_execute($stmt);

  mysqli_stmt_bind_result($stmt, $param_email, $param_password, $admin_id);

  $_SESSION["admin_id"] = $admin_id;
  $result = mysqli_stmt_fetch($stmt);

  if ($result) {
    $success = "Successfully Login" && header("refresh: 1; url=dashboard.php");
  } else {
    $err = "Error in entering your credentials";
  }

}


require_once("./partials/_head.php");
?>


<body>
  <section class="login-page" id="login-page">
    <div class="main-login-page">
      <div class="left-side-panel">
        <a href="../../index.html">
          <img src="../../assets/images/auth/login.png" alt="" />
        </a>
      </div>
      <div class="right-side-panel">
        <!-- <small class="register-account">Doesn't have yet an account?
          <a href="register.html" class="sign-up-links">Sign up</a></small> -->

        <div class="login-control">
          <h1 class="heading__primary">
            Taste and explore the taste of your favorite shop
          </h1>

          <form class="form-wrapper" method="POST" role="form">


            <div class="form-controls">
              <input type="email" name="admin_email" placeholder="Email" class="form-control-name" id="email">
            </div>
            <div class="form-controls">
              <input type="password" name="admin_password" placeholder="Password" class="form-control-name" id="email">
            </div>

            <a href="recover-password.html" class="forget-password">
              Forget Password?
            </a>
            <div class="primary-btn--login">
              <input type="submit" value="Sign in" name="login" class="primary-btn--links"
                style="cursor: pointer; width: 100%;    padding: 0.85rem 0;" />
            </div>
          </form>



          <!--          <p class="casual-sign-in">Or sign in with</p>
          <div class="links">
            <div class="tertiary-btn">
              <img src="assets/img/gmail.png" alt="">
              <a href="./src/pages/about.html" class="tertiary-btn-links">
                Sign in with Google
              </a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <?php

require_once("partials/_temps.php");
?>
</body>

</html>
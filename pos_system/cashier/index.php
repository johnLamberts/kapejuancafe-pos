<?php
session_start();
include("./config/dbcon.php");


if (isset($_POST["login"])) {
  $cashier_email = $_POST['cashier_email'];
  $cashier_password = $_POST['cashier_password'];

  $get_cashier = "SELECT cashier_email, cashier_password, cashier_id  FROM  kpjcafe_cashier WHERE (cashier_email =? AND cashier_password =?)";

  $stmt = mysqli_prepare($mysqli_conn, $get_cashier);


  if (!$stmt) {
    die("mysqli error: " . mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "ss", $cashier_email, $cashier_password);


  if (!mysqli_stmt_execute($stmt)) {
    die('stmt error: ' . mysqli_stmt_error($stmt));
  }

  $param_email = $cashier_email;
  $param_password = $cashier_password;

  mysqli_stmt_execute($stmt);

  mysqli_stmt_bind_result($stmt, $param_email, $param_password, $cashier_id);

  $result = mysqli_stmt_fetch($stmt);
  $_SESSION["cashier_id"] = $cashier_id;

  if ($result) {
    echo "<script>alert('Connected to Admin!')</script>";
    header("Location: dashboard.php");
  } else {
    echo "<script>alert('Unable to Admin!')</script>";
  }

}


require_once("partials/_head.php");
?>


<body>
  <section class="login-page" id="login-page">
    <div class="main-login-page">
      <div class="left-side-panel">
        <img src="../../assets/images/auth/login.png" alt="" />
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
              <input type="email" name="cashier_email" placeholder="Email" class="form-control-name" id="email">
            </div>
            <div class="form-controls">
              <input type="password" name="cashier_password" placeholder="Password" class="form-control-name" id="email">
            </div>

            <a href="recover-password.html" class="forget-password">
              Forget Password?
            </a>
            <div class="primary-btn--login">
              <input type="submit" value="Sign in" name="login" class="primary-btn--links"
                style="cursor: pointer; width: 100%;    padding: 0.85rem 0;" />
            </div>
          </form>



          <!-- <p class="casual-sign-in">Or sign in with</p>
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


</body>

</html>
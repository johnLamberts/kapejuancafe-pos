<?php
session_start();
include("./config/dbcon.php");


if (isset($_POST["login"])) {
  $customer_email = $_POST['customer_email'];
  $customer_password = $_POST['customer_password'];

  $get_admin = "SELECT customer_id, customer_email, customer_password FROM  kpjcafe_customers WHERE (customer_email =? AND customer_password =?)";


  $stmt = mysqli_prepare($mysqli_conn, "SELECT customer_id, customer_email, customer_password FROM  kpjcafe_customers WHERE (customer_email =? AND customer_password =?)");


  if (!$stmt) {
    die("mysqli error: " . mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "ss", $customer_email, $customer_password);


  if (!mysqli_stmt_execute($stmt)) {
    die('stmt error: ' . mysqli_stmt_error($stmt));
  }

  $param_email = $customer_email;
  $param_password = $customer_password;

  mysqli_stmt_execute($stmt);

  mysqli_stmt_bind_result($stmt, $customer_email, $customer_password, $customer_id);

  // // $result = mysqli_stmt_fetch($stmt);
  // $_SESSION["customer_id"] = $customer_id;

  $result = mysqli_stmt_get_result($stmt);

  if ($result) {
    $success = "Successfully login" && header("refresh: 1; url=customers.php");
  } else {
    $err = "Oops! Something wrong happened. Please try again.";
  }

  
  // $sql = "SELECT * FROM kpjcafe_customers WHERE email= '" . $customer_email . "'";

  // $result = mysqli_query($mysqli_conn, $sql);

  // if(mysqli_num_rows($result) == 0) {
  // $err = "Email not found" ;
  // }

  // $user = mysqli_fetch_object($res);

  // if(!password_verify($customer_password, $user->customer_password)) {
  // $err = "Incorrect Password" && header("refresh:1; url=index.php");
  // }

  // if($user->email_verified_at == null) {
  //   die("Please Verify your email <a href='email_verification.php'>Verify here</a>");
  // }

  // $success = "Login Successfully" && header("refresh: 1; url=customers.php");

}


require_once("partials/_head.php");
?>


<body>
  <section class="login-page" id="login-page">
    <div class="main-login-page">
      <div class="left-side-panel">
        <a href="/memphis/pos_system">
          <img src="../../assets/images/auth/login.png" alt="" />
        </a>
      </div>
      <div class="right-side-panel">
        <small class="register-account">Doesn't have yet an account?
          <a href="register.php" class="sign-up-links">Sign up</a></small>

        <div class="login-control">
          <h1 class="heading__primary">
            Taste and explore the taste of your favorite shop
          </h1>

          <form class="form-wrapper" method="POST" role="form">


            <div class="form-controls">
              <input type="email" name="customer_email" placeholder="Email" class="form-control-name" id="email">
            </div>
            <div class="form-controls">
              <input type="password" name="customer_password" placeholder="Password" class="form-control-name"
                id="email">
            </div>

            <a href="recover-password.html" class="forget-password">
              Forget Password?
            </a>
            <div class="primary-btn--login">
              <input type="submit" value="Sign in" name="login" class="primary-btn--links"
                style="cursor: pointer; width: 100%;    padding: 0.85rem 0;" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  require("./partials/_temps.php");
  ?>
</body>

</html>
<?php
//config file
session_starT();
include("./config/dbcon.php");

include("./partials/code_generators.php");

if (isset($_POST["updateCustomer"])) {
    if (empty($_POST["customer_fname"]) || empty($_POST["customer_lname"]) || empty($_POST["customer_phone_number"]) || empty($_POST["customer_address"]) || empty($_POST["customer_email"]) || empty($_POST['customer_password'])) {
        $err = "Blank Values Not Accepted";
    } else {
        //$prod_id = $_POST['prod_id'];
        $update = $_GET["update"];
        $customer_fname = $_POST['customer_fname'];
        $customer_lname = $_POST['customer_lname'];
        $customer_phoneno = $_POST['customer_phone_number'];
        $customer_address = $_POST['customer_address'];
        $customer_email = $_POST['customer_email'];
        $customer_password = sha1(md5($_POST['customer_password'])); //Hash This 

        //prepared for insert query
        $insert_query = "UPDATE kpjcafe_customers SET customer_firstName =?, customer_lastName=?, customer_phoneno =?, customer_address=?, customer_email =?, customer_password =? WHERE  customer_id =?";
        $stmt = mysqli_prepare($mysqli_conn, $insert_query);

        if (!$stmt) {
            die("Error stmt" . mysqli_error($conn));
        }

        $result = mysqli_stmt_bind_param($stmt, 'sssssss', $customer_fname, $customer_lname, $customer_phoneno, $customer_address, $customer_email, $customer_password, $update);

        if (!mysqli_stmt_execute($stmt)) {
            die('stmt error: ' . mysqli_stmt_error($stmt));
        }

        mysqli_stmt_execute($stmt);

        $result;
        if ($stmt) {
            // 
            $success = "Customer Updated" && header("refresh:1; url=customer.php");
        } else {
            $err = "Please try agian";
        }

    }
}

require_once("./partials/_head.php");
?>

<body>

    <div class="main__content">
        <div class="kapejuan-logo">
            <img loading="lazy" src="assets/img/logo.png" class="kpj-img" />
        </div>

        <?php require_once("partials/_topnav.php"); ?>
        <?php require_once("partials/_sidebar.php"); ?>

        <main class="content-wrap">
            <header class="content-head">

                <a href="customer.php" class="go-back-button">
                    Go back to Customer List
                </a>


            </header>

            <div class="content">

                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3>Please Fill All Fields</h3>
                    </div>
                    <div class="card-body">
                        <?php

                        $update = $_GET["update"];

                        $select_query = "SELECT * FROM kpjcafe_customers WHERE customer_id = '$update'";

                        $stmt = mysqli_prepare($mysqli_conn, $select_query);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($cust = mysqli_fetch_object($result)) {

                        ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="customer_fname" class="form-control"
                                        value="<?php echo $cust->customer_firstName; ?>">

                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" name="customer_lname" class="form-control"
                                        value="<?php echo $cust->customer_lastName; ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone number</label>
                                    <input type="number" name="customer_phone_number" class="form-control"
                                        value="<?php echo $cust->customer_phoneno; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>
                                    <input type="text" name="customer_address" class="form-control"
                                        value="<?php echo $cust->customer_address; ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email Address</label>
                                    <input type="email" name="customer_email" class="form-control"
                                        value="<?php echo $cust->customer_email; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" name="customer_password" class="form-control"
                                        value="<?php echo $cust->customer_password; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 primary-btn-input">
                                    <input type="submit" name="updateCustomer" value="Update Customer"
                                        class="primary-button" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </main>
    </div>

    <?php 
    
    require_once("partials/_temps.php");
    ?>

</body>

</html>
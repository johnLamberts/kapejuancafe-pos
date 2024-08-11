<?php
error_reporting(0);
session_start();
include("./config/dbcon.php");
include("./partials/code_generators.php");

if (isset($_POST['make_order'])) {
    //Prevent Posting Blank Values
    if (empty($_POST["order_code"]) || empty($_POST['prod_qty'])) {
        $err = "Blank Values Not Accepted";
    } else {
        $order_id = $_POST['order_id'];
        $order_code = $_POST['order_code'];
        // $customer_id = $_POST['customer_id'];
        $customer_lastName = $_POST['customer_lastName'];
        // $prod_id = $_GET['prod_id'];
        $prod_name = $_GET['prod_name'];
        $prod_price = $_GET['prod_price'];
        $prod_qty = $_POST['prod_qty'];

        //prepared information
        $insert_order = "INSERT INTO kpjcafe_orders ( order_id, order_code, customer_id, customer_lastName, prod_id, prod_name, prod_price, prod_qty) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($mysqli_conn, $insert_order);
        if (!$stmt) {
            die("mysqli error: " . mysqli_error($conn));
        }
        $bind = mysqli_stmt_bind_param($stmt, 'ssssssss', $order_id, $order_code, $customer_id, $customer_lastName, $prod_id, $prod_name, $prod_price, $prod_qty);
        if (!mysqli_stmt_execute($stmt)) {
            die('stmt error: ' . mysqli_stmt_error($stmt));
        }
        mysqli_stmt_execute($stmt);

        if ($stmt) {
            $success = "Order Submitted" && header("refresh:1; url=payments.php");
        } else {
            $err = "Please Try Again Or Try Later";
        }
    }
}

require("./partials/_head.php");
?>

<body>
    <!-- Sidenav -->
    <div class="main__content">
        <div class="kapejuan-logo">
            <img loading="lazy" src="assets/img/logo.png" class="kpj-img" />
        </div>

        <?php require_once("partials/_topnav.php"); ?>
        <?php require_once("partials/_sidebar.php"); ?>

        <main class="content-wrap">
            <header class="content-head">
                <h5 class="text-light">
                    Select any product to get your order
                </h5>
            </header>

            <div class="content">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3>Please Fill All Fields</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Customer Name</label>
                                    <select class="form-control" name="customer_lastName" id="custName"
                                        onChange="getCustomer(this.value)">
                                        <option value="">Select Customer Name</option>
                                        <?php
                                        $get = "SELECT * FROM kpjcafe_customers";
                                        $stmt = mysqli_prepare($mysqli_conn, $get);
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);

                                        while ($cust = mysqli_fetch_object($result)) {
                                        ?>
                                        <option value="">
                                            <?php echo $cust->customer_lastName; ?>
                                        </option>

                                        <?php } ?>


                                    </select>

                                    <input type="hidden" name="order_id" value="<?php echo $order_id; ?>"
                                        class="form-control">

                                    <input type="hidden" name="order_status" value="<?php echo "Pending"; ?>"
                                        class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>Customer ID</label>
                                    <input type="text" name="customer_id" readonly id="customerID" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>Order Code</label>
                                    <input type="text" name="order_code"
                                        value="<?php echo $alpha; ?>-<?php echo $beta; ?>" class="form-control"
                                        value="">
                                </div>

                            </div>
                            <hr>
                            <?php
                            $prod_id = $_GET['prod_id'];
                            $get = "SELECT * FROM kpjcafe_products WHERE prod_id = '$prod_id'";
                            $stmt = mysqli_prepare($mysqli_conn, $get);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            while ($prod = mysqli_fetch_object($result)) {
                            ?>
                            <div class=" row">
                                <div class="col-md-6">
                                    <label>Product Price ($)</label>
                                    <input type="text"
                                        style="background-color: var(--bg-secondary-color); color: var(--color-secondary); font-weight: 700; opacity: 0.9;"
                                        readonly name="prod_price" value="$ <?php echo $prod->prod_price; ?>"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Product Quantity</label>
                                    <input type="text" name="prod_qty" class="form-control" value="">
                                </div>
                            </div>
                            <?php } ?>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 primary-btn-input">
                                    <input type="submit" name="make_order" value="Process Order" class="primary-button"
                                        value="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php

    require_once("partials/_temps.php");
    ?>

</body>

</html>
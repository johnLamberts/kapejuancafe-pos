<?php
error_reporting(0);
session_start();
include("./config/dbcon.php");
include("./partials/code_generators.php");

if (isset($_POST['pay_order'])) {
    //Prevent Posting Blank Values
    if (empty($_POST["pay_code"]) || empty($_POST['pay_amt']) || empty($_POST['pay_method'])) {
        $err = "Blank Values Not Accepted";
    } else {
        $pay_code = $_POST['pay_code'];
        $order_code = $_GET['order_code'];
        $customer_id = $_GET['customer_id'];
        $pay_amt = $_POST['pay_amt'];
        $pay_method = $_POST['pay_method'];
        $pay_id = $_POST['pay_id'];

        $order_status = $_GET['order_status'];

        //prepared information
        $insert_order = "INSERT INTO kpjcafe_payments (pay_id, pay_code, order_code, customer_id, pay_amt, pay_method) VALUES(?,?,?,?,?,?)";
        $update_status = "UPDATE kpjcafe_orders SET order_status =? WHERE order_code =?";

        $INSERT_stmt = mysqli_prepare($mysqli_conn, $insert_order);

        if (!$INSERT_stmt) {
            die("mysqli error: " . mysqli_error($mysqli_conn));
        }

        $UPDATE_stmt = mysqli_prepare($mysqli_conn, $update_status);

        if (!$UPDATE_stmt) {
            die("mysqli error: " . mysqli_error($mysqli_conn));
        }

        $bind = mysqli_stmt_bind_param($INSERT_stmt, 'ssssss', $pay_id, $pay_code, $order_code, $customer_id, $pay_amt, $pay_method);
        $bind = mysqli_stmt_bind_param($UPDATE_stmt, 'ss', $order_status, $order_code);

        if (!mysqli_stmt_execute($INSERT_stmt)) {
            die('stmt error: ' . mysqli_stmt_error($INSERT_stmt));
        }
        mysqli_stmt_execute($INSERT_stmt);

        if (!mysqli_stmt_execute($UPDATE_stmt)) {
            die('stmt error: ' . mysqli_stmt_error($UPDATE_stmt));
        }

        mysqli_stmt_execute($UPDATE_stmt);

        if ($INSERT_stmt && $UPDATE_stmt) {
            $success = "Paid" && header("refresh:1; url=receipts.php");
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

        <?php
        $ret = "SELECT * FROM  kpjcafe_orders WHERE order_status ='PENDING'  ORDER BY `kpjcafe_orders`.`created_at` DESC  ";
        $stmt = mysqli_prepare($mysqli_conn, $ret);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        while ($order = $res->fetch_object()) {
            $total = ($order->prod_price * $order->prod_qty);

        ?>
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
                                    <label>Payment ID</label>
                                    <input type="text" name="pay_id" readonly value="<?php echo $pay_id; ?>"
                                        class="form-control"
                                        style="opacity: 0.77; background: var(--bg-tertiary-color); color: var(--color-secondary);">
                                </div>
                                <div class="col-md-6">
                                    <label>Payment Code</label>
                                    <input type="text" name="pay_code" value="<?php echo $pay_code; ?>"
                                        class="form-control" value="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Amount Total</label>
                                    <input type="text" name="pay_amt" readonly value="<?php echo "₱" . $total; ?>"
                                        class="form-control"
                                        style="opacity: 0.77; background: var(--bg-tertiary-color); color: var(--color-secondary);">
                                </div>
                                <div class="col-md-6">
                                    <label>Payment Method</label>
                                    <select class="form-control" name="pay_method">
                                        <option selected>Select Method</option>
                                        <option>GCash</option>
                                        <option>Cash</option>
                                        <option>Credit Card</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 primary-btn-input">
                                    <input type="submit" name="pay_order" value="Pay Order" class="primary-button"
                                        value="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php } ?>
    </div>
    <?php

    require_once("partials/_temps.php");
    ?>
</body>

</html>
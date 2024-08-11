<?php
session_start();
include('./config/dbcon.php');


if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $delete_query = "DELETE FROM kpjcafe_cashier WHERE cashier_id = ?";

    $stmt = mysqli_prepare($mysqli_conn, $delete_query);


    mysqli_stmt_bind_param($stmt, "s", $id);
    if (!mysqli_stmt_execute($stmt)) {
        die('stmt error: ' . mysqli_stmt_error($stmt));
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

require_once('./partials/_head.php');
?>

<body>


    <div class="kapejuan-logo">
        <img loading="lazy" src="assets/img/logo.png" class="kpj-img" />
    </div>
    <div class="main__content">

        <?php require_once("partials/_topnav.php"); ?>
        <?php require_once("partials/_sidebar.php"); ?>

        <main class="content-wrap">
            <header class="content-head">
                <a href="orders.php" class="go-back-button">
                    Make a new order
                </a>
            </header>

            <div class="content">
                <div class="container">
                    <table class="table-prod">
                        <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_orders WHERE order_status ='PENDING'  ORDER BY `kpjcafe_orders`.`created_at` DESC  ";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($order = $res->fetch_object()) {
                                $total = ($order->prod_price * $order->prod_qty);

                            ?>
                            <tr>
                                <th class="text-success" scope="row">
                                    <?php echo $order->order_code; ?>
                                </th>
                                <td>
                                    <?php echo $order->customer_lastName; ?>
                                </td>
                                <td>
                                    <?php echo $order->prod_name; ?>
                                </td>
                                <td>$
                                    <?php echo $total; ?>
                                </td>
                                <td>
                                    <?php echo date('d/M/Y g:i', strtotime($order->created_at)); ?>
                                </td>
                                <td>
                                    <a
                                        href="payments_order.php?order_code=<?php echo $order->order_code; ?>&customer_id=<?php echo $order->customer_id; ?>&order_status=Paid">
                                        <button class="btn btn-sm btn-success">
                                            <i class="fas fa-handshake"></i>
                                            Pay Order
                                        </button>
                                    </a>

                                    <a href="payments.php?cancel=<?php echo $order->order_id; ?>">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-window-close"></i>
                                            Cancel Order
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </main>
    </div>


</body>

</html>
<?php
session_start();
include("./config/dbcon.php");


require("./partials/_head.php");
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
                <h5 class="text-light">
                    Paid Orders
                </h5>
            </header>

            <div class="content">
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-success" scope="col">Code</th>
                                <th scope="col">Customer</th>
                                <th class="text-success" scope="col">Product</th>
                                <th scope="col">Unit Price</th>
                                <th class="text-success" scope="col">Qty</th>
                                <th scope="col">Total Price</th>
                                <th class="text-success" scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_orders WHERE order_status = 'Paid' ORDER BY `kpjcafe_orders`.`created_at` DESC  ";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            if (!mysqli_stmt_execute($stmt)) {
                                die('stmt error: ' . mysqli_stmt_error($stmt));
                            }
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
                                <td class="text-success">
                                    <?php echo $order->prod_name; ?>
                                </td>
                                <td>$
                                    <?php echo $order->prod_price; ?>
                                </td>
                                <td class="text-success">
                                    <?php echo $order->prod_qty; ?>
                                </td>
                                <td>$
                                    <?php echo $total; ?>
                                </td>
                                <td>
                                    <?php echo date('d/M/Y g:i', strtotime($order->created_at)); ?>
                                </td>
                                <td>
                                    <a target="_blank"
                                        href="print_receipt.php?order_code=<?php echo $order->order_code; ?>">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-print"></i>
                                            Print Receipt
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>



            </div>
        </main>
    </div>

</body>
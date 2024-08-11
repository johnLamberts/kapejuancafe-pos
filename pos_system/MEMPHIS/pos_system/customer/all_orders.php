<?php
session_start();
include("./config/dbcon.php");


include("./partials/_head.php");
?>

<body>
    <div class="kapejuan-logo">
        <img loading="lazy" src="assets/img/logo.png" class="kpj-img" />
    </div>
    <div class="main__content">
        <?php require_once("partials/_main-menu.php"); ?>
        <?php require_once("partials/_sidebar.php"); ?>


        <main class="content-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Order Code</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Order Status</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ret = "SELECT * FROM  kpjcafe_orders";
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
                        <th >
                            <?php echo $order->order_code; ?>
                        </th>
                        <td>
                            <?php echo date('d/M/Y g:i', strtotime($order->created_at)); ?>
                        </td>
                        <td >
                            <?php echo $order->order_status; ?>
                        </td>
                        <td>
                            <?php echo $order->order_status; ?>
                        </td>
                        <td>
                        <a href="#">
                                <button class="btn btn-sm btn-info">
                                    <i class="fas fa-trash"></i>
                                    
                                </button>
                            </a>
                        </td>
                        <td>
                            <?php
                        if ($order->order_status == "PENDING") { ?>
                            <a href="checkout.php">
                                <button class="btn btn-sm btn-info">
                                    <i class="fas fa-shopping-cart"></i>
                                    Check out
                                </button>
                            </a>
                            <?php } else { ?>

                            <a target="_blank" href="print_receipt.php?order_code=<?php echo $order->order_code; ?>">
                                <button class="btn btn-sm btn-primary">
                                    <i class="fas fa-print"></i>
                                    Print Invoice
                                </button>
                            </a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </main>
    </div>

</body>

</html>
<?php
session_start();
include('./config/dbcon.php');

include("./partials/_head.php");
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

                <a href="add_product.php" class="go-back-button">
                    Add Product
                </a>

                <div class="action">
                    <input type="text" class="search-box" placeholder="Search for items...">
                </div>
            </header>

            <div class="content">
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th class="text-success" scope="col">Code</th>
                                <th scope="col">Customer</th>
                                <th class="text-success" scope="col">Product</th>
                                <th scope="col">Product Price</th>
                                <th class="text-success" scope="col">#</th>
                                <th scope="col">Total Price</th>
                                <th scop="col">Status</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_orders ORDER BY `created_at` DESC  ";
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
                                <td class="text-success">
                                    <?php echo $order->prod_name; ?>
                                </td>
                                <td>$
                                    <?php echo $order->prod_price; ?>
                                </td>
                                <td class="text-success">
                                    <?php echo $order->prod_qty; ?>
                                </td>
                                <td>P
                                    <?php echo $total; ?>
                                </td>
                                <td>
                                    <?php if ($order->order_status == '') {
                                    echo "<span class='text-dark badge badge-danger'>Not Paid</span>";
                                } elseif ($order->order_status == 'Pending') {
                                    # code...
                                    echo "<span class='text-dark badge badge-warning'>Pending</span>";
                                } else {
                                    echo "<span class='text-dark badge badge-success'>$order->order_status</span>";
                                } ?>
                                </td>
                                <td>
                                    <?php echo date('d/M/Y g:i', strtotime($order->created_at)); ?>
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

</html>
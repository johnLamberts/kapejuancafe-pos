<?php
session_start();
include('./config/dbcon.php');
include("./partials/code_generators.php");
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
                <h5 class="text-light">
                    Select any product to get your order
                </h5>
            </header>

            <div class="content">
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Order Code</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Purchased Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date Sold</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_orders WHERE order_status = 'Paid' ORDER BY `kpjcafe_orders`.`created_at` DESC ";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($sales = $res->fetch_object()) {
                                $total = ($sales->prod_price * $sales->prod_qty);
                            ?>
                            <tr>
                                </td>
                                <td>
                                    <?php echo $sales->prod_name; ?>
                                </td>
                                <td>
                                    <?php echo $sales->order_code; ?>
                                </td>
                                
                                <td>
                                    <?php echo $sales->prod_qty; ?>
                                </td>
                                <td>P
                                    <?php echo $sales->prod_price; ?>
                                </td>
                                <td></td>
                                <td>
                                    <?php echo date('d/M/Y g:i', strtotime($sales->created_at)); ?>
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
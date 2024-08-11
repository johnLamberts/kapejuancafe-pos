<?php
session_start();
include("./config/dbcon.php");
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $delete_query = "DELETE FROM kpjcafe_orders WHERE order_id = ?";

    $stmt = mysqli_prepare($mysqli_conn, $delete_query);

    if (!$stmt) {
        die("Error" . mysqli_error($mysqli_conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($stmt) {
        $success = "Product Deleted" && header("refresh:1; url=wishlist.php");
    } else {
        $err = "Product cannot be deleted";
    }

}

include("./partials/_head.php");
?>

<style>
    .BORDER {
        text-align: center;
        padding: 1rem 1.2rem;
        border: 1px solid var(--color-secondary);
    }
</style>

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
                        <th scope="col">PRODUCT ID</th>
                        <th scope="col">NAME OF PRODUCTS</th>
                        <th scope="col">REMOVE</th>
                        <th scope="col">ORDER NOW</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ret = "SELECT * FROM  kpjcafe_orders ORDER BY `kpjcafe_orders`.`created_at` DESC  ";
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
                        <th class="text-dark"scope="row">
                            <?php echo $order->prod_id; ?>
                        </th>
                        <td class="text-dark">
                            <h3 style="text-transform: uppercase;">
                                <?php echo $order->prod_name; ?>
                            </h3>

                        </td>

                        <td class="text-success">
                            <a href="wishlist.php?delete=<?php echo $order->order_id; ?>">
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button>
                            </a>

                        </td>

                        <td>
                            <div class="BORDER">
                                <a href="">ADD TO CART</a>
                            </div>
                        </td>

                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
    <?php
    include("./partials/_temps.php");
    ?>
</body>

</html>
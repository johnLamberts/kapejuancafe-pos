<?php
session_start();
include("config/dbcon.php");

require_once("partials/_head.php");

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
                    Select any product to get your order
                </h5>
            </header>

            <div class="content">
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Product Code</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $ret = "SELECT * FROM  kpjcafe_products WHERE isAvailable='Available'";

                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($prod = $res->fetch_object()) {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                if ($prod->prod_img) {
                                    echo "<img src='../admin/assets/img/products/$prod->prod_img' height='60' width='60 class='img-thumbnail'>";
                                } else {
                                    echo "<img src='../admin/assets/img/products/default.jpg' height='60' width='60 class='img-thumbnail'>";
                                }

                                    ?>
                                </td>
                                <td>
                                    <?php echo $prod->prod_name; ?>
                                </td>
                                <td>
                                    <?php echo $prod->prod_code; ?>
                                </td>

                                <td>P
                                    <?php echo $prod->prod_price; ?>
                                </td>
                                <td>
                                    <?php
                                echo "<span style='background: green;' class='badge badge-success'>$prod->isAvailable</span>";
                                    ?>
                                </td>
                                <td>
                                    <a
                                        href="make_order.php?prod_id=<?php echo $prod->prod_id; ?>&prod_name=<?php echo $prod->prod_name; ?>&prod_price=<?php echo $prod->prod_price; ?>">
                                        <button class="btn btn-sm btn-outline-warning">
                                            <i class="fas fa-cart-plus"></i>
                                            Place order
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

</html>
<?php
session_start();
include('./config/dbcon.php');

// include('config/checklogin.php');
// check_login();
// if (isset($_GET['delete'])) {
//   $id = intval($_GET['delete']);
//   $adn = "DELETE FROM  rpos_products  WHERE  prod_id = ?";
//   $stmt = $mysqli->prepare($adn);
//   $stmt->bind_param('s', $id);
//   $stmt->execute();
//   $stmt->close();
//   if ($stmt) {
//     $success = "Deleted" && header("refresh:1; url=products.php");
//   } else {
//     $err = "Try Again Later";
//   }
//}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $delete_query = "DELETE FROM kpjcafe_products WHERE prod_id = ?";

    $stmt = mysqli_prepare($mysqli_conn, $delete_query);

    if (!$stmt) {
        die("Error" . mysqli_error($mysqli_conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
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
                                <th scope="col">Image</th>
                                <th scope="col">Product Code</th>
                                <th scope="col">Product Category</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_products ";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($prod = $res->fetch_object()) {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                if ($prod->prod_img) {
                                    echo "<img src='assets/img/products/$prod->prod_img' height='60' width='60 class='img-thumbnail'>";
                                } else {
                                    echo "<img src='assets/img/products/default.jpg' height='60' width='60 class='img-thumbnail'>";
                                }

                                    ?>
                                </td>
                                <td>
                                    <?php echo $prod->prod_code; ?>
                                </td>
                                <td>
                                    <?php
                                echo $prod->cat_id;
                                    ?>
                                </td>
                                <td>
                                    <?php echo $prod->prod_name; ?>
                                </td>
                                <td>P
                                    <?php echo $prod->prod_price; ?>
                                </td>
                                <td>$
                                    <?php echo $prod->prod_qty; ?>
                                </td>
                                <td>
                                    <a href="products.php?delete=<?php echo $prod->prod_id; ?>">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </a>

                                    <a href="update_product.php?update=<?php echo $prod->prod_id; ?>">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                            Update
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
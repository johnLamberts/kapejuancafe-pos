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

    $delete_query = "DELETE FROM kpjcafe_customers WHERE customer_id = ?";

    $stmt = mysqli_prepare($mysqli_conn, $delete_query);

    if (!$stmt) {
        die("Error" . mysqli_error($mysqli_conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if($stmt) {
        $success = "Delete Successfully" && header("refresh:1; url=customer.php");
    } else {
        $err = "Try again later";
    }
}

require_once('./partials/_head.php');
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
            <a href="add_customer.php" class="go-back-button">
                    Add Customer
                </a>

                <div class="action">
                    <input type="text" class="search-box" placeholder="Search for items...">
                </div>
            </header>

            <div class="content">
                <div class="container">
            <table class="table-prod">
                    <thead>
                        <tr>
                            <th scope="col">Customer Full Name</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $ret = "SELECT * FROM  kpjcafe_customers ";
                    $stmt = mysqli_prepare($mysqli_conn, $ret);
                    mysqli_stmt_execute($stmt);
                    $res = mysqli_stmt_get_result($stmt);
                    while ($customer = $res->fetch_object()) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $customer->customer_firstName . " " . $customer->customer_lastName; ?>
                            </td>
                            <td>
                                <?php 
                                  echo $customer->customer_phoneno;
                                ?>
                            </td>
                            <td>
                                <?php echo $customer->customer_email; ?>
                            </td>
                            <td>
                                <a href="customer.php?delete=<?php echo $customer->customer_id; ?>">
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </a>

                                <a href="update_customer.php?update=<?php echo $customer->customer_id; ?>">
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



            </div>
        </main>
    </div>

    <?php 
    
    require_once("partials/_temps.php");
    ?>

</body>

</html>
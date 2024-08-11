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

    if ($stmt) {
        $success = "Product Deleted" && header("refresh:1; url=products.php");
    } else {
        $err = "Product cannot be deleted";
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
            </header>

            <div class="content">
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">MOBILE</th>
                                <th scope="col">Message</th>
                                <th scope="col">DATE</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_contact_us ";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($user = $res->fetch_object()) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $user->id; ?>
                                </td>
                                <td>
                                    <?php echo $user->name; ?>
                                </td>
                                <td>
                                    <?php echo $user->email; ?>
                                </td>
                                <td>
                                    <?php echo $user->mobile; ?>
                                </td>
                                <td>
                                    <?php echo $user->comment; ?>
                                </td>
                                <td>
                                <?php echo $user->added_on; ?>
                                </td>
                                <td>
                                    <a href="contact.php?delete=<?php echo $user->id; ?>">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                            Delete
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

    <?php

    require_once("partials/_temps.php");
    ?>
</body>

</html>
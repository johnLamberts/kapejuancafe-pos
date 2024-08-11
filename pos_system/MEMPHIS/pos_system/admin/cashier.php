<?php
session_start();
include('./config/dbcon.php');


if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $delete_query = "DELETE FROM kpjcafe_cashier WHERE cashier_id = ?";

    $stmt = mysqli_prepare($mysqli_conn, $delete_query);

    if (!$stmt) {
        die("Error" . mysqli_error($mysqli_conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($stmt) {
        $success = "Delete Successfully" && header("refresh:1; url=cashier.php");
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
                <a href="add_cashier.php" class="go-back-button">
                    Add Cashier Staff
                </a>
            </header>

            <div class="content">
                <div class="container">
                    <table class="table-prod">
                        <thead>
                            <tr>
                                <th scope="col">Cashier Number</th>
                                <th scope="col">Cashier Name</th>
                                <th scope="col">Cashier Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $ret = "SELECT * FROM  kpjcafe_cashier ";
                        $stmt = mysqli_prepare($mysqli_conn, $ret);
                        mysqli_stmt_execute($stmt);
                        $res = mysqli_stmt_get_result($stmt);
                        while ($cashier = $res->fetch_object()) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $cashier->cashier_number; ?>
                                </td>
                                <td>
                                    <?php
                            echo $cashier->cashier_name;
                                ?>
                                </td>
                                <td>
                                    <?php echo $cashier->cashier_email; ?>
                                </td>
                                <td>
                                    <a href="cashier.php?delete=<?php echo $cashier->cashier_id; ?>">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </a>

                                    <a href="update_cashier.php?update=<?php echo $cashier->cashier_id; ?>">
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
<?php
//config file
session_starT();
include("./config/dbcon.php");


include("./partials/code_generators.php");

if (isset($_POST["addCashier"])) {
    if (empty($_POST["cashier_number"]) || empty($_POST["cashier_name"]) || empty($_POST['cashier_email']) || empty($_POST['cashier_password'])) {
        $err = "Blank Values Not Accepted";
    } else {
        //$cashier_id = $_POST['cashier_id'];
        $cashier_number = $_POST['cashier_number'];
        $cashier_name = $_POST['cashier_name'];
        $cashier_email = $_POST['cashier_email'];
        $cashier_password = sha1(md5($_POST['cashier_password']));
        # $cashier_id = $_POST['cashier_id'];


        //prepared for insert query
        $insert_query = "INSERT INTO kpjcafe_cashier ( cashier_number, cashier_name, cashier_email, cashier_password) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($mysqli_conn, $insert_query);

        //check of stmt if its going to enter
        if (!$stmt) {
            die("Error stmt" . mysqli_error($mysqli_conn));
        }

        $result = mysqli_stmt_bind_param($stmt, 'ssss', $cashier_number, $cashier_name, $cashier_email, $cashier_password);

        //if the stmt failed, it will throw us the error
        if (!mysqli_stmt_execute($stmt)) {
            die('stmt error: ' . mysqli_stmt_error($stmt));
        }

        mysqli_stmt_execute($stmt);

        $result;
        if (mysqli_stmt_execute($stmt)) {
            $success = "Product Added" && header("refresh:1; url=cashier.php");
        } else {
            $success = "Please try agian";
        }

    }
}

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

                <a href="cashier.php" class="go-back-button">
                    Back to Cashier List
                </a>


            </header>

            <div class="content">

                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3>Please Fill All Fields</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cashier Number*</label>
                                    <input type="text" name="cashier_number" class="form-control"
                                        value="<?php echo $alpha; ?>-<?php echo $beta; ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Cashier Name*</label>
                                    <input type="text" name="cashier_name" class="form-control" value="" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cashier Email*</label>
                                    <input type="email" name="cashier_email" class="form-control" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Cashier Password*</label>
                                    <input type="password" name="cashier_password" class="form-control" value="" required>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6 primary-btn-input">
                                    <input type="submit" name="addCashier" value="Add Cashier" class="primary-button"
                                        value="" required>
                                </div>
                            </div>
                        </form>
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
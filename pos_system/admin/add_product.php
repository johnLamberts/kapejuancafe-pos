<?php
//config file
session_starT();
include("./config/dbcon.php");

include("./partials/code_generators.php");

if (isset($_POST["addProduct"])) {
    if (empty($_POST["prod_code"]) || empty($_POST["prod_name"]) || empty($_POST['prod_desc']) || empty($_POST['prod_price'])) {
        $err = "Blank Values Not Accepted";
    } else {
        //$prod_id = $_POST['prod_id'];
        $prod_code = $_POST['prod_code'];
        $prod_name = $_POST['prod_name'];
        $prod_cat = $_POST["cat_id"];
        $prod_img = $_FILES['prod_img']['name'];
        move_uploaded_file($_FILES["prod_img"]["tmp_name"], "assets/img/products/" . $_FILES["prod_img"]["name"]);
        $prod_desc = $_POST['prod_desc'];
        $prod_price = $_POST['prod_price'];
        $prod_qty = $_POST["prod_qty"];


        //prepared for insert query
        $insert_query = "INSERT INTO kpjcafe_products ( prod_id ,  prod_code , cat_id,   prod_name, prod_qty ,  prod_img ,  prod_desc ,  prod_price  ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($mysqli_conn, $insert_query);

        if (!$stmt) {
            die("Error stmt" . mysqli_error($mysqli_conn));
        }

        $result = mysqli_stmt_bind_param($stmt, 'ssssssss', $prod_id, $prod_code, $prod_cat, $prod_name, $prod_qty, $prod_img, $prod_desc, $prod_price);


        if (!mysqli_stmt_execute($stmt)) {
            die('stmt error: ' . mysqli_stmt_error($stmt));
        }
        mysqli_stmt_execute($stmt);

        $res = mysqli_stmt_get_result($stmt);

        if ($stmt) {
            $success = "Product Added" && header("refresh:1; url=products.php");
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
                <a href="products.php" class="go-back-button">
                    Go back to Product List
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Product Name*</label>
                                        <input type="text" name="prod_name" class="form-control" required>
                                        <input type="hidden" name="prod_id" value="<?php // echo $prod_id; ?>"
                                                class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Product Code*</label>
                                            <input type="text" name="prod_code"
                                                value="<?php echo $alpha; ?>-<?php echo $beta; ?>" class="form-control"
                                                value="" required>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 input-group" >
                                            <select class="form-control" name="cat_id" id="catName"  required
                                            >
                                        <option value="">Select Category Name</option>
                                        <?php
                                        $get = "SELECT * FROM kpjcafe_category";
                                        $stmt = mysqli_prepare($mysqli_conn, $get);
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);

                                        while ($cat = mysqli_fetch_object($result)) {

                                            // $cat_name = $cat->cat_name;
                                            // $cat_id = $cat->cat_id;
                                        ?>
                                        <option value="<?php echo $cat->cat_id?>">
                                            <?php echo $cat->cat_name; ?>
                                        </option>



                                        <?php } ?>


                                    </select>

                                    <div class="col-md-4">
                                        <input type="text" hidden  name="cat_id" value="<?php echo $cat_id ?>" id="">
                                    </div>

                                </div>
                                <hr>
                                <div class=" row">
                                </div>
                                <div class="col-md-4">
                                    <label>Product Quantity*</label>
                                    <input type="number" name="prod_qty" class="form-control" value="" required>
                                </div>
                                <div class="col-md-2">
                                    <label>Product Price*</label>
                                    <input type="number" name="prod_price" class="form-control" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Product Image*</label>
                                    <input type="file" name="prod_img" class="btn btn-outline-success form-control"
                                        value="" required>
                                </div>


                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Product Description*</label>
                                    <textarea rows="5" name="prod_desc" class="form-control" value="" required></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 primary-btn-input">
                                    <input type="submit" name="addProduct" value="Add Product" class="primary-button"
                                        value="">
                                </div>
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
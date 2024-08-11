<?php
//config file
session_starT();
include("./config/dbcon.php");

include("./partials/code_generators.php");

if (isset($_POST["updateProduct"])) {
    if (empty($_POST["prod_code"]) || empty($_POST["prod_name"]) || empty($_POST['prod_desc']) || empty($_POST['prod_price'])) {
        $err = "Blank Values Not Accepted";
    } else {
        //$prod_id = $_POST['prod_id'];
        $update = $_GET["update"];
        $prod_code = $_POST['prod_code'];
        $prod_name = $_POST['prod_name'];
        $prod_img = $_FILES['prod_img']['name'];
        move_uploaded_file($_FILES["prod_img"]["tmp_name"], "assets/img/products/" . $_FILES["prod_img"]["name"]);
        $prod_desc = $_POST['prod_desc'];
        $prod_price = $_POST['prod_price'];
        $prod_cat = $_POST["prod_cat"];
        $prod_qty = $_POST["prod_qty"];
        $prod_status = $_POST["prod_status"];


        //prepared for insert query
        $insert_query = "UPDATE kpjcafe_products SET prod_code=?, cat_id=?,  prod_name=?, prod_qty=?,  prod_img=?,  prod_desc=?,  prod_price=?, isAvailable=? WHERE prod_id =?";
        $stmt = mysqli_prepare($mysqli_conn, $insert_query);

        if (!$stmt) {
            die("Error stmt" . mysqli_error($mysqli_conn));
        }

        $result = mysqli_stmt_bind_param($stmt, 'sssssssss', $prod_code, $prod_cat, $prod_name, $prod_qty, $prod_img, $prod_desc, $prod_price, $prod_status, $update);

        if (!mysqli_stmt_execute($stmt)) {
            die('stmt error: ' . mysqli_stmt_error($stmt));
        }

        mysqli_stmt_execute($stmt);

        $result;
        if (mysqli_stmt_execute($stmt)) {
            $success = "Product Added" && header("refresh:1; url=products.php");
        } else {
            $err = "Please try agian";
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
                        <?php

                        $update = $_GET["update"];

                        $select_query = "SELECT * FROM kpjcafe_products WHERE prod_id = '$update'";

                        $stmt = mysqli_prepare($mysqli_conn, $select_query);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($prod = mysqli_fetch_object($result)) {

                        ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Product Name</label>
                                    <input type="text" name="prod_name" value="<?php echo $prod->prod_name; ?>"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Product Code</label>
                                    <input type="text" name="prod_code" value="<?php echo $prod->prod_code; ?>"
                                        class="form-control" value="">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 input-group">
                                    <select style="background: var(--bg-primary-color); border: 1px solid var(--bg-tertiary-color); color: var(--color-primary); font-weight: 800;" class="form-select" id="inputGroupSelect" name="prod_cat">
                                        <option value="">Choose a category</option>
                                        <?php
                            $query = "SELECT * FROM kpjcafe_category";
                            $result = mysqli_query($mysqli_conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $category_title = $row["cat_name"];
                                $category_id = $row["cat_id"];

                                echo "<option value='$cat_id'>$category_title</option>";
                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Product Quantity</label>
                                    <input type="number" name="prod_qty" class="form-control"
                                        value="<?php echo $prod->prod_qty; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select style="background: var(--bg-primary-color); border: 1px solid var(--bg-tertiary-color); color: var(--color-primary); font-weight: 800;" class="form-select" name="prod_status" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="Available">Available</option>
                                        <option value="Unavailable">Unavailable</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Product Image</label>
                                    <input type="file" name="prod_img" class="btn btn-outline-success form-control"
                                        value="<?php echo $prod->prod_img ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Product Price</label>
                                    <input type="text" name="prod_price" class="form-control"
                                        value="<?php echo $prod->prod_price; ?>" </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Product Description</label>
                                        <textarea rows="5" name="prod_desc" class="form-control"
                                            value=""><?php echo $prod->prod_desc; ?></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 primary-btn-input">
                                        <input type="submit" name="updateProduct" value="Update Product"
                                            class="primary-button" value="">
                                    </div>
                                </div>
                        </form>
                        <?php } ?>
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
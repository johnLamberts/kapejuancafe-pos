<?php
//config file
session_start();
include("./config/dbcon.php");
include("./partials/code_generators.php");

if (isset($_POST["updateCat"])) {
    if (empty($_POST["cat_code"]) || empty($_POST["cat_name"]) || empty($_POST['cat_desc'])) {
        $err = "Blank Values Not Accepted";
    } else {
        //$cat_id = $_POST['cat_id'];
        $update = $_GET["update"];
        $cat_code = $_POST['cat_code'];
        $cat_name = $_POST['cat_name'];
        $cat_img = $_FILES['cat_img']['name'];
        move_uploaded_file($_FILES["cat_img"]["tmp_name"], "assets/img/category/" . $_FILES["cat_img"]["name"]);
        $cat_desc = $_POST['cat_desc'];


        //prepared for insert query
        $insert_query = "UPDATE kpjcafe_category SET cat_code=? ,  cat_name=? ,  cat_img=? ,  cat_desc=? WHERE cat_id=?";
        $stmt = mysqli_prepare($mysqli_conn, $insert_query);

        if (!$stmt) {
            die("Error stmt" . mysqli_error($mysqli_conn));
        }

        $result = mysqli_stmt_bind_param($stmt, 'sssss', $cat_code, $cat_name, $cat_img, $cat_desc, $update);

        if (!mysqli_stmt_execute($stmt)) {
            die('stmt error: ' . mysqli_stmt_error($stmt));
        }

        mysqli_stmt_execute($stmt);

        $result;
        if ($stmt) {
            $success = "Category Updated" && header("refresh:1; url=category.php");
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
                <a href="category.php" class="go-back-button">
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

                        $select = "SELECT * FROM kpjcafe_category WHERE cat_id='$update'";
                        $stmt = mysqli_prepare($mysqli_conn, $select);

                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while ($cat = mysqli_fetch_object($result)) {

                        ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Category Name</label>
                                    <input type="text" name="cat_name" class="form-control" value="<?php echo $cat->cat_name?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Category Code</label>
                                        <input type="text" name="cat_code"
                                            value="<?php echo $alpha; ?>-<?php echo $beta; ?>" class="form-control"
                                            value="<?php echo $cat->cat_code?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Category Image</label>
                                        <input type="file" name="cat_img" class="btn btn-outline-success form-control"
                                        value="<?php echo $cat->cat_img?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Category Description</label>
                                        <textarea rows="5" name="cat_desc" class="form-control"  value="<?php echo $cat->cat_desc?>"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 primary-btn-input">
                                        <input type="submit" name="updateCat" value="Update Category"
                                            class="primary-button" value="">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                        }
                        ?>
                    </div>



            </div>
        </main>
    </div>

    
    <?php 
    
    require_once("partials/_temps.php");
    ?>
</body>
</html>
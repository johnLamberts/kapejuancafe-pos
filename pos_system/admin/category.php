<?php
session_start();
include('./config/dbcon.php');

// include('config/checklogin.php');
// check_login();
// if (isset($_GET['delete'])) {
//   $id = intval($_GET['delete']);
//   $adn = "DELETE FROM  rpos_catucts  WHERE  cat_id = ?";
//   $stmt = $mysqli->prepare($adn);
//   $stmt->bind_param('s', $id);
//   $stmt->execute();
//   $stmt->close();
//   if ($stmt) {
//     $success = "Deleted" && header("refresh:1; url=catucts.php");
//   } else {
//     $err = "Try Again Later";
//   }
//}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $delete_query = "DELETE FROM kpjcafe_category WHERE cat_id = ?";

    $stmt = mysqli_prepare($mysqli_conn, $delete_query);

    if (!$stmt) {
        die("Error" . mysqli_error($mysqli_conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($stmt) {
        $success = "Delete Successfully" && header("refresh:1; url=category.php");
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
                <a href="add_category.php" class="go-back-button">
                    Add Category
                </a>

                <div class="action">
                    <input type="text" class="search-box" placeholder="Search for items...">
                </div>
            </header>

            <div class="content">
                <div class="container">
                    <table class="table-cat">
                        <thead>
                            <tr>
                                <th width="20%">Category Code</th>
                                <th width="20%">Category Name</th>
                                <th width="20%">Category Image</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = "SELECT * FROM  kpjcafe_category ";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($cat = $res->fetch_object()) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $cat->cat_code; ?>
                                </td>
                                <td>
                                    <?php echo $cat->cat_name; ?>
                                </td>
                                <td>
                                    <?php
                                if ($cat->cat_img) {
                                    echo "<img src='assets/img/catucts/$cat->cat_img' height='60' width='60 class='img-thumbnail'>";
                                } else {
                                    echo "<img src='assets/img/catucts/default.jpg' height='60' width='60 class='img-thumbnail'>";
                                }

                                    ?>
                                </td>

                                <td>
                                    <a href="category.php?delete=<?php echo $cat->cat_id; ?>">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </a>

                                    <a href="update_category.php?update=<?php echo $cat->cat_id; ?>">
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
<?php
session_start();
include("./config/dbcon.php");

include("./partials/_functions.php");
if (isset($_GET["type"]) && $_GET["type"] != "") {
    $type = get_safe_value($mysqli_conn, $_GET["type"]);
    if ($type == 'status') {
        $operation = get_safe_value($mysqli_conn, $_GET['operation']);
        $id = get_safe_value($mysqli_conn, $_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $update_status_sql = "update kpjcafe_coupons set status='$status' where id='$id'";
        mysqli_query($con, $update_status_sql);
    }

    if ($type == 'delete') {
        $id = get_safe_value($mysqli_conn, $_GET['id']);
        $delete_sql = "DELETE from kpjcafe_coupons where id='$id'";
        mysqli_query($mysqli_conn, $delete_sql);
    }
}


$sql = "SELECT * FROM kpjcafe_coupons ORDER BY id DESC";
$res = mysqli_query($mysqli_conn, $sql);

include("./partials/_head.php");

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
                <div class="card">
                    <div class="card-body">
                        <a href="update_coupons.php" class="go-back-button">
                            Add Coupons
                        </a>
                    </div>
                </div>


                <div class="action">
                    <input type="text" class="search-box" placeholder="Search for items...">
                </div>
            </header>

            <div class="content">
                <div class="container">
                    <table>
                        <thead>
                            <tr>
                            <th class="serial">#</th>
							   <th width="2%">ID</th>
							   <th width="20%">Coupon Code</th>
							   <th width="20%">Coupon Value</th>
							   <th width="20%">Coupon Type</th>
							   <th width="10%">Min Value</th>
							   <th width="26%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td class="serial">
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <?php echo $row['id'] ?>
                                </td>
                                <td>
                                    <?php echo $row['coupon_code'] ?>
                                </td>
                                <td>
                                    <?php echo $row['coupon_value'] ?>
                                </td>
                                <td>
                                    <?php echo $row['coupon_type'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cart_min_value'] ?>
                                </td>

                                <td>
                                    <?php
                                if ($row['status'] == 1) {
                                    echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=" . $row['id'] . "'>Active</a></span>&nbsp;";
                                } else {
                                    echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=" . $row['id'] . "'>Deactive</a></span>&nbsp;";
                                }
                                echo "<span class='badge badge-edit'><a href='update_coupons.php?id=" . $row['id'] . "'>Edit</a></span>&nbsp;";

                                echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";

                                ?>
                                </td>
                            </tr>
                            <?php } ?>
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
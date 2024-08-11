<?php
session_start();
include("./config/dbcon.php");
include("./partials/_functions.php");
include("./partials/code_generators.php");
$coupon_code = '';
$coupon_type = '';
$coupon_value = '';
$cart_min_value = '';

$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($mysqli_conn, $_GET['id']);
    $res = mysqli_query($mysqli_conn, "SELECT * FROM kpjcafe_coupons WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $coupon_code = $row['coupon_code'];
        $coupon_type = $row['coupon_type'];
        $coupon_value = $row['coupon_value'];
        $cart_min_value = $row['cart_min_value'];
    } else {
        header('location:coupons.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $coupon_code = get_safe_value($mysqli_conn, $_POST['coupon_code']);
    $coupon_type = get_safe_value($mysqli_conn, $_POST['coupon_type']);
    $coupon_value = get_safe_value($mysqli_conn, $_POST['coupon_value']);
    $cart_min_value = get_safe_value($mysqli_conn, $_POST['cart_min_value']);

    $res = 
    mysqli_query($mysqli_conn, "SELECT * FROM kpjcafe_coupons  WHERE coupon_code='$coupon_code'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {

            } else {
                $success = "Coupon code already exist";
            }
        } else {
            $success = "Coupon code already exist";
        }
    }


    if ($success == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $update_sql = "UPDATE kpjcafe_coupons SET coupon_code='$coupon_code',coupon_value='$coupon_value',coupon_type='$coupon_type',cart_min_value='$cart_min_value' where id='$id'";
            mysqli_query($mysqli_conn, $update_sql);
            $success = "Successfully Update";
        } else {
            mysqli_query($mysqli_conn, "INSERT into kpjcafe_coupons (coupon_code,coupon_value,coupon_type,cart_min_value,status) values('$coupon_code','$coupon_value','$coupon_type','$cart_min_value',1)");
            $success = "Successfully Added";
         }
        header('location:coupons.php');
        die();
    }
}
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
            <div class="content">

                <div class="card shadow">
                    <div class="card-header border-0">
                        <h2>Manage Coupons</h2>
                        <h5>Please Fill All Fields</h5>
                    <hr>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categories" class=" form-control-label">Coupon Code</label>
                                        <input type="text" name="coupon_code" placeholder="Enter coupon code"
                                            class="form-control" required value="<?php echo $coupon_code ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categories" class=" form-control-label">Coupon Value</label>
                                        <input type="text" name="coupon_value" placeholder="Enter coupon value"
                                            class="form-control" required value="<?php echo $coupon_value ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categories" class=" form-control-label">Coupon Type</label>
                                        <select class="form-control" name="coupon_type" required>
                                            <option value=''>Select</option>
                                            <?php
                                            if ($coupon_type == 'Percentage') {
                                                echo '<option value="Percentage" selected>Percentage</option>
												<option value="Rupee">Rupee</option>';
                                            } elseif ($coupon_type == 'Rupee') {
                                                echo '<option value="Percentage">Percentage</option>
												<option value="Rupee" selected>Rupee</option>';
                                            } else {
                                                echo '<option value="Percentage">Percentage</option>
												<option value="Rupee">Rupee</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categories" class=" form-control-label">Cart Min Value</label>
                                        <input type="text" name="cart_min_value" placeholder="Enter cart min value"
                                            class="form-control" required value="<?php echo $cart_min_value ?>">
                                    </div>
                                </div>



                                <div class="col-md-6 primary-btn-input">
                                    <input type="submit" name="submit" value="Submit Coupons" class="primary-button"
                                        value="">
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
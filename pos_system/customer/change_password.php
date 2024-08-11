<?php
session_start();
include("./config/dbcon.php");
include("./partials/_functions.php");


if (isset($_POST["update"])) {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_new_password = $_POST["confirm_new_password"];
    //query
    $uid = $_SESSION["customer_id"];
    $sql = "SELECT * FROM kpjcafe_customers WHERE customer_id='$uid'";

    $query = mysqli_query($mysqli_conn, $sql);
    $row = mysqli_fetch_assoc($query);

    if (password_verify($current_password, $row["customer_password"])) {

        if ($new_password == $confirm_new_password) {
            $update = "UPDATE kpjcafe_customers SET customer_password='$new_password' WHERE customer_id='$uid'";
            $err = "Password must be entered correctly";
            if (mysqli_query($mysqli_conn, $update)) {
                $success = "Successfully updated!";

            }


        }

    }
}

include("./partials/_head.php");
?>

<body>
    <div class="kapejuan-logo">
        <img loading="lazy" src="assets/img/logo.png" class="kpj-img" />
    </div>
    <div class="main__content">
        <?php require_once("partials/_main-menu.php"); ?>
        <?php require_once("partials/_sidebar.php"); ?>

        <main class="content-wrap with-forms">
            <div class="main-content">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information">
                        <form action="" method="POST">
                            <h3 class="text-center">Edit Password </h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">Current Password</label>
                                        <input type="password" name="password" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">New Password</label>
                                        <input type="password" name="n_pw" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">Confirm Password</label>
                                        <input type="password" name="c_pw" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                    <div class="form-group">
                                        <input type="submit" name="update_password" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>





    </div>

    <!-- <script>

        function update_password() {
            jQuery('.field_error').html('');
            var current_password = jQuery('#current_password').val();
            var new_password = jQuery('#new_password').val();
            var confirm_new_password = jQuery('#confirm_new_password').val();
            var is_error = '';
            if (current_password == '') {
                jQuery('#current_password_error').html('Please enter password');
                is_error = 'yes';
            } if (new_password == '') {
                jQuery('#new_password_error').html('Please enter password');
                is_error = 'yes';
            } if (confirm_new_password == '') {
                jQuery('#confirm_new_password_error').html('Please enter password');
                is_error = 'yes';
            }

            if (new_password != '' && confirm_new_password != '' && new_password != confirm_new_password) {
                jQuery('#confirm_new_password_error').html('Please enter same password');
                is_error = 'yes';
            }

            if (is_error == '') {
                jQuery('#btn_update_password').html('Please wait...');
                jQuery('#btn_update_password').attr('disabled', true);
                jQuery.ajax({
                    url: 'update_password.php',
                    type: 'post',
                    data: 'current_password=' + current_password + '&new_password=' + new_password,
                    success: function (result) {
                        jQuery('#current_password_error').html(result);
                        jQuery('#btn_update_password').html('Update');
                        jQuery('#btn_update_password').attr('disabled', false);
                        jQuery('#frmPassword')[0].reset();
                    }
                })
            }

        }
    </script>
 -->

    <?php include("./partials/_temps.php"); ?>
</body>

</html>
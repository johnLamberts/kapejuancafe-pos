<?php
session_start();
include("./config/dbcon.php");


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
                            <h3 class="text-center">Edit Address </h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">New Address</label>
                                        <input type="text" name="address" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">Confirm Address</label>
                                        <input type="password" name="n_pw" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                    <div class="form-group" >
                                        <input type="submit" name="update_password" class="btn btn-success"
                                             value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    </div>

</body>

</html>
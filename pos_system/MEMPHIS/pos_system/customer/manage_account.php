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
                            <h3 class="text-center">Edit Personal Information</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">First Name:</label>
                                        <input type="text" name="first_name" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">Last Name: </label>
                                        <input type="text" name="last_name" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">Email Address:</label>
                                        <input type="email" name="email" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="profile_details_text">Mobile Number:</label>
                                        <input type="tel" name="phone" class="form-control" value="" required
                                            pattern=[0-9]{10}>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Submit">
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
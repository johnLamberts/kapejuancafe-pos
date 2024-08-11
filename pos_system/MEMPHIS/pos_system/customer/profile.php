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

        <main class="content-wrap shop-content">
        </main>
    </div>

</body>

</html>
<?php
include("./config/dbcon.php");


include("./partials/_head.php");
?>

<body>
    <div class="main__content2">

        <?php require_once("partials/_topnav.php"); ?>
        <?php //require_once("partials/_sidebar.php"); ?>

        <main class=" shop-content">
            <header class="header-shop">
               <h1 class="heading-shop">
                <span class="text-1">S</span>
                <span class="text-1">H</span>
                <span class="text-1">O</span>
                <span class="text-1">P</span>
               </h1>
               <p class="header-stop__content">
               Here is just a small glimpse of everything you can find at the shop. Delivery available for all our merchandise + Pick-up on site for vino & food. 
               </p>
            </header>

            <div class="content">
            <div class="container-menu">

    <div class="shell">
        <div class="container">
            <div class="row">
                <?php
                    $ret = "SELECT * FROM  kpjcafe_products WHERE isAvailable='Available'";
                    $stmt = mysqli_prepare($mysqli_conn, $ret);
                    mysqli_stmt_execute($stmt);
                    $res = mysqli_stmt_get_result($stmt);
                    while ($prod = $res->fetch_object()) { ?>
                <div class="col-md-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                            <img src="<?php echo "../admin/assets/img/products/$prod->prod_img"; ?>" alt="Product"
                                class="img-responsive img-small" />
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span style="color: var(--color-secondary);">
                                    <?php echo $prod->cat_id; ?>
                                </span>
                            </div>
                            <div class="title-product">
                                <h3>
                                    <?php echo $prod->prod_name; ?>
                                </h3>
                            </div>
                            <!-- <div class="description-prod">
                        <p>
                            <?php echo $prod->prod_desc ?>
                        </p>
                    </div> -->
                            <div class="card-footer">
                                <div class="wcf-left"><span class="price">Price:
                                        <?php echo $prod->prod_price; ?>
                                    </span></div>
                                <div class="wcf-right">
                                    <a href="javascript:void(0);" class="buy-btn" title="Order now">
                                        <i class="fa fa-shopping-basket">

                                        </i>
                                    </a>
                                    <a href="javascript:void(0);" title="Add to Wishlist" class="wishlist-btn">
                                        <i class="fa fa-coffee"></i>
                                    </a>
                                    <a href="javascript:void(0);" title="View Product" class="wishlist-btn">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
            <!-- <div class="row">
                <?php
        $ret = "SELECT * FROM  kpjcafe_products WHERE isAvailable='Available' ORDER BY created_at DESC LIMIT 4";
        $stmt = mysqli_prepare($mysqli_conn, $ret);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        while ($prod = $res->fetch_object()) { ?>

                <?php } ?>
            </div> -->
        </div>
    </div>





    </div>


    </div>
    </main>
    </div>



</body>

</html>
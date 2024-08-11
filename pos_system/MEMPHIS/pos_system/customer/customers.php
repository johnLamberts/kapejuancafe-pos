<?php
session_start();
include("./config/dbcon.php");

include("./partials/_head.php");
?>

<body>

    <?php

    include("./partials/_topnav.php");
    ?>
    <div id="banner_section" class="banner_section">
        <section id="q_slide" autoplay animate mousefollow parallax opacity=".3" class="q_slide_section">
            <div class="q_slide-inner">
                <div class="slides">

                    <div class="slide q_current" id="page-top-banner">
                        <div class="slide-content">
                            <div class="caption one">
                                <h1 class="banner_heading top q_splitText hidden-xs">
                                    Taste&nbsp;a&nbsp;handmade&nbsp;yet&nbsp;delicous</h1>
                                <h1 class="banner_heading top q_splitText visible-xs">Pastries&nbsp;and&nbsp;</h1>
                                <h1 class="banner_heading top q_splitText visible-xs">Cakes&nbsp;by&nbsp;our shop</h1>
                                <h2 class="banner_heading sub">in the heart of <br class="visible-xs">KapeJuan Cafe
                                </h2>
                                <p class="banner_para">Love. and refreshness.</p>
                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-wrapper">
                                <img src="assets/banner.jpg" alt="" class="image" />
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption two">
                                <h1 style="color: var(--color-secondary);" class="banner_heading top q_splitText">
                                    Love&nbsp;Taste.</h1>
                                <h1 style="color: var(--color-secondary);"
                                    class="banner_heading top second q_splitText">Delicous&nbsp;Prosporous.</h1>
                                <h2 style="color: var(--color-secondary);" class="banner_heading sub">Unveiling
                                    Exclusive<br class="visible-xs"> KAPEJUAN
                                    CAFE</h2>
                                <p class="banner_para">More Happiness. More Living. More Chance to Taste our Special.
                                </p>
                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-wrapper">
                                <img src="https://clorova.com/assets/img/works/acala/banner.jpg" alt="" class="image" />
                            </div>
                        </div>
                    </div>

                </div> -->

                <!-- Pagination -->

                <div class="pagination">
                    <div class="item q_current">
                        <span class="icon">1</span>
                    </div>
                    <div class="item">
                        <span class="icon">2</span>
                    </div>
                </div>

            </div>
        </section>

        <div class="scroll_link_outer">

        </div>
    </div>
    <br>
    <br>
    <hr class="lines">
    <br>
    <br>
    <br>


    <main>

        <section class="shop-best-sellers">
            <div class="shell">
                <div class="container">
                    <div class="high-text">
                        <h3 class="text-center">Best Sellers</h3>
                    </div>
                    <div class="row">
                        <?php
                    $ret = "SELECT * FROM  kpjcafe_products WHERE isAvailable='Available' LIMIT 4";
                    $stmt = mysqli_prepare($mysqli_conn, $ret);
                    mysqli_stmt_execute($stmt);
                    $res = mysqli_stmt_get_result($stmt);
                    while ($prod = $res->fetch_object()) { ?>
                        <div class="col-md-3">
                            <div class="wsk-cp-product ">
                                <div class="wsk-cp-img">
                                    <img src="<?php echo "../admin/assets/img/products/$prod->prod_img"; ?>"
                                        alt="Product" class="img-responsive img-small" />
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
                                            <a href="#" class="buy-btn" title="Order now">
                                                <i class="fa fa-shopping-basket">

                                                </i>
                                            </a>
                                            <a href="javascript:void(0);" title="Add to Wishlist" class="wishlist-btn">
                                                <i class="fa fa-coffee"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    require_once("./partials/_temps.php");
    ?>
</body>

</html>
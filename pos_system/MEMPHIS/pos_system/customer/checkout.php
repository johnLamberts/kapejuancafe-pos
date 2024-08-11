<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/all-style.css" /> -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style>
        body {
            background-color: #E0CFAC;
            font-family: "Cormorant Garamond", serif;
        }

        .container-fluid {
            margin-top: 70px
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.40rem
        }

        .img-sm {
            width: 80px;
            height: 80px
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .table-shopping-cart .price-wrap {
            line-height: 1.2
        }

        .table-shopping-cart .price {
            font-weight: bold;
            margin-right: 5px;
            display: block
        }

        .text-muted {
            color: #66490E !important
        }

        a {
            text-decoration: none !important
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #E0CFAC;
            box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.5);
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .dlist-align {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        [class*="dlist-"] {
            margin-bottom: 5px
        }

        .coupon {
            border-radius: 1px
        }

        .price {
            font-weight: 600;
            color: #66490E
        }

        .btn.btn-out {
            outline: 1px solid #fff;
            outline-offset: -5px
        }

        .btn-main {
            border-radius: 2px;
            text-transform: capitalize;
            font-size: 15px;
            padding: 10px 19px;
            cursor: pointer;
            color: #66490E;
            width: 100%
        }

        .btn-light {
            color: #66490E;
            background-color: transparent;
            border-color: #66490E;
            font-size: 1.1rem;
        }

        .btn-light:hover {
            color: #E0CFAC;
            background-color: #66490E;
            border-color: #66490E
        }

        .btn-apply {
            font-size: 11px
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="https://i.imgur.com/1eq5kmC.png"
                                                    class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title" data-abc="true">Tshirt
                                                    with round nect</a>
                                                <p class="text-muted small">SIZE: L <br> Brand: MAXTRA</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$10.00</var> <small
                                                class="text-muted"> $9.20 each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist"
                                            title="" href="" class="btn btn-light" data-toggle="tooltip"
                                            data-abc="true"> <i class="fa fa-heart"></i></a> <a href=""
                                            class="btn btn-light" data-abc="true"> Remove</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="https://i.imgur.com/hqiAldf.jpg"
                                                    class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title  " data-abc="true">Flower
                                                    Formal T-shirt</a>
                                                <p class="text-muted small">SIZE: L <br> Brand: ADDA </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$15</var> <small class="text-muted">
                                                $12 each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist"
                                            title="" href="" class="btn btn-light" data-toggle="tooltip"
                                            data-abc="true"> <i class="fa fa-heart"></i></a> <a href=""
                                            class="btn btn-light btn-round" data-abc="true"> Remove</a> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="https://i.imgur.com/UwvU0cT.jpg"
                                                    class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title  "
                                                    data-abc="true">Printed White Tshirt</a>
                                                <p class="small text-muted">SIZE:M <br> Brand: Cantabil</p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$9</var> <small class="text-muted">
                                                $6 each</small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist"
                                            title="" href="" class="btn btn-light" data-toggle="tooltip"
                                            data-abc="true"> <i class="fa fa-heart"></i></a> <a href=""
                                            class="btn btn-light btn-round" data-abc="true"> Remove</a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group"> <label>Have coupon?</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name=""
                                        placeholder="Coupon code"> <span class="input-group-append"> <button
                                            class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd class="text-right ml-3">$69.97</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right text-danger ml-3">- $10.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right   b ml-3"><strong>$59.97</strong></dd>
                        </dl>
                        <hr> <a href="#" class="btn btn-out btn-secondary btn-square btn-main" data-abc="true"> Make
                            Purchase </a> <a href="shop.php" class="btn btn-out btn-info btn-square btn-main mt-2"
                            data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

</body>

</html>
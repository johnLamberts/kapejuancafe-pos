<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer</title>



  <!-- CSS only -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" -->
  <!-- integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/css/all-style.css" /> -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link rel="stylesheet" href="assets/css/styles/styles.css">
  <link rel="stylesheet" href="assets/css/product.css">
  <link rel="stylesheet" href="assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/css/register.css">
  <link rel="stylesheet" href="assets/css/customer.css">
  <link rel="stylesheet" href="assets/css/main-menu.css">
  <link rel="stylesheet" href="assets/css/_card-details.css">
  <link rel="stylesheet" href="assets/css/shop.css">
  <link rel="stylesheet" href="assets/css/_modal.css">
  <link rel="stylesheet" href="assets/plugins/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/plugins/owl.theme.default.min.css">
  <link rel="stylesheet" href="main.css">
  <!-- <link rel="stylesheet" href="/assets/css/styles/login.css"> -->

  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <?php if (isset($success)) { ?>
  <!--This code for injecting success alert-->
  <script>
    setTimeout(function () {
      swal("Success", "<?php echo $success; ?>", "success");
    },
      100);
  </script>

  <?php } ?>
  <?php if (isset($err)) { ?>
  <!--This code for injecting error alert-->
  <script>
    setTimeout(function () {
      swal("Failed", "<?php echo $err; ?>", "error");
    },
      100);
  </script>

  <?php } ?>

  <style>
    
    .banner_section {
      position: relative;
      width: 100%;
      height: calc(80vh);
    }

    .q_slide {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: 100%;
      z-index: 1
    }

    .q_slide .q_slide-inner {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .q_slide .slides {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1
    }

    .q_slide .slide {
      display: none;
      overflow: hidden;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      opacity: 0;
      -webkit-transition: opacity 0.3s ease;
      transition: opacity 0.3s ease;
      background: var(--bg-tertiary-color)
    }

    .q_slide .slide.q_current {
      display: block
    }

    .q_slide .slide.is-loaded {
      opacity: 1
    }

    .q_slide .slide .caption {
      position: absolute;
      text-transform: uppercase;
      color: var(--color-secondary);
    }

    .q_slide .slide .caption .banner_heading {
      position: relative;
      font-family: "assassinregular";
    }

    .q_slide .slide .caption .banner_heading.top {
      font-size: 56px;
      line-height: 52px
    }

    .q_slide .slide .caption .banner_heading.sub {
      margin-top: 20px;
      font-size: 32px
    }

    .q_slide .slide .caption .banner_para {
      position: relative;
      margin-top: 50px;
      font-family: "Encode Sans", sans-serif;
      font-size: 20px;
      font-weight: 700;
      letter-spacing: 0.1em
    }

    .q_slide .slide .caption .banner_para::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 80px;
      height: 1px;
      background-color: var(--bg-primary-color);
    }

    .q_slide .slide .caption.one {
      top: 10vh;
      /* right: 8vw; */
      text-align: left
    }

    .q_slide .slide .caption.one span {
      color: var(--color-secondary);
    }

    .q_slide .slide .caption.one .banner_para {
      padding-right: 100px
    }

    .q_slide .slide .caption.one .banner_para::after {
      right: 0
    }

    .q_slide .slide .caption.two {
      top: 12vh;
      left: 9vw;
      text-align: left
    }

    .q_slide .slide .caption.two span {
      color: var(--color-secondary);
    }

    .q_slide .slide .caption.two .banner_heading.top.second {
      /* padding-left: 156px */
    }

    .q_slide .slide .caption.two .banner_para {
      padding-left: 100px
    }

    .q_slide .slide .caption.two .banner_para::after {
      left: 0
    }

    .q_slide .slide .image-container,
    .q_slide .slide .image-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center;
      z-index: 1;
      background-size: cover;
      image-rendering: optimizeQuality
    }

    .q_slide .slide .image {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      filter: blur(10px);
    }

    .q_slide .slide-content {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      color: var(--color-secondary);
      z-index: 2
    }

    .q_slide .pagination {
      position: absolute;
      right: 8vw;
      bottom: 8%;
      margin-top: 0;
      cursor: default;
      z-index: 2
    }

    .q_slide .pagination .item {
      position: relative;
      display: inline-block;
      margin: 0 15px;
      text-indent: -999em;
      cursor: pointer;
      z-index: 1
    }

    .q_slide .pagination .item::before,
    .q_slide .pagination .item::after {
      content: "";
      display: block;
      position: absolute;
      border-radius: 50%
    }

    .q_slide .pagination .item::before {
      width: 5px;
      height: 5px;
      margin: 10px 0;
      background: rgba(255, 255, 255, 0.5);
      -webkit-transition: background 0.2s ease;
      transition: background 0.2s ease
    }

    .q_slide .pagination .item::after {
      top: -1px;
      left: -11px;
      width: 25px;
      height: 25px;
      border: 1px solid #fff;
      opacity: 0;
      -webkit-transform: scale(0.6);
      transform: scale(0.6);
      -webkit-transition: all 0.2s ease;
      transition: all 0.2s ease
    }

    .q_slide .pagination .item:hover::before,
    .q_slide .pagination .item.q_current::before {
      background-color: #fff
    }

    .q_slide .pagination .item:hover::after,
    .q_slide .pagination .item.q_current:hover::after {
      opacity: 1;
      -webkit-transform: scale(1);
      transform: scale(1)
    }

    .q_slide.kenburns .slides .slide .image-container .image {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      -webkit-animation: kenburns 30s linear;
      animation: kenburns 30s linear
    }

    .q_splitText span {
      display: inline-block
    }

    @-webkit-keyframes kenburns {
      0% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: scale(1);
        transform: scale(1)
      }

      50% {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1)
      }
    }

    @keyframes kenburns {
      0% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: scale(1);
        transform: scale(1)
      }

      50% {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1)
      }
    }

    .shell {
      padding: 80px 0;
    }

    .wsk-cp-product {
      background: rgba(255, 255, 255, 0.3);
      padding: 15px;
      border-radius: 6px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      position: relative;
      margin: 20px auto;
    }

    .wsk-cp-img {
      position: absolute;
      top: 5px;
      left: 50%;
      transform: translate(-50%);
      -webkit-transform: translate(-50%);
      -ms-transform: translate(-50%);
      -moz-transform: translate(-50%);
      -o-transform: translate(-50%);
      -khtml-transform: translate(-50%);
      width: 100%;
      padding: 15px;
      transition: all 0.2s ease-in-out;
    }

    .wsk-cp-img img {
      width: 100%;
      transition: all 0.2s ease-in-out;
      border-radius: 6px;
    }

    .wsk-cp-img .img-small {
      height: 17rem !important;
    }

    .wsk-cp-product:hover .wsk-cp-img {
      top: -40px;
    }

    .wsk-cp-product:hover .wsk-cp-img img {
      box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    }

    .wsk-cp-text {
      padding-top: 150%;
    }

    .wsk-cp-text .category {
      text-align: center;
      font-size: 12px;
      font-weight: bold;
      padding: 5px;
      margin-bottom: 45px;
      position: relative;
      transition: all 0.2s ease-in-out;
    }

    .wsk-cp-text .category>* {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      -khtml-transform: translate(-50%, -50%);

    }

    .wsk-cp-text .category>span {
      padding: 12px 30px;
      border: 1px solid #313131;
      background: var(--bg-tertiary-color);
      color: var(--color-secondary);
      box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
      border-radius: 27px;
      transition: all 0.05s ease-in-out;

    }

    .wsk-cp-product:hover .wsk-cp-text .category>span {
      border-color: #ddd;
      box-shadow: none;
      padding: 11px 28px;
    }

    .wsk-cp-product:hover .wsk-cp-text .category {
      margin-top: 0px;
    }

    .wsk-cp-text .title-product {
      text-align: center;
    }

    .wsk-cp-text .title-product h3 {
      font-size: 20px;
      font-weight: bold;
      margin: 15px auto;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      width: 100%;
    }

    .wsk-cp-text .description-prod p {
      margin: 0;
    }

    /* Truncate */
    .wsk-cp-text .description-prod {
      text-align: center;
      width: 100%;
      height: 62px;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      margin-bottom: 15px;
    }

    .card-footer {
      padding: 25px 0 5px;
      border-top: 1px solid #ddd;
    }

    .card-footer:after,
    .card-footer:before {
      content: '';
      display: table;
    }

    .card-footer:after {
      clear: both;
    }

    .card-footer .wcf-left {
      float: left;
      vertical-align: center;

    }

    .card-footer .wcf-right {
      float: right;
    }

    .price {
      font-size: 18px;
      font-weight: bold;
    }

    table {
      width: 800px;
      border-collapse: collapse;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 1.4rem 2rem;
      background-color: rgba(255, 255, 255, 0.8);
      color: var(--color-secondary);
    }

    td {
      color: var(--color-tertiary);
      font-weight: 700;
    }

    th {
      text-align: left;
    }

    thead th {
      background-color: var(--bg-tertiary-color);
    }

    tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.3);
    }

    tbody td {
      position: relative;
    }

    tbody td:hover:before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      top: -9999px;
      bottom: -9999px;
      background-color: rgba(255, 255, 255, 0.2);
      z-index: -1;
    }

    .with-forms {
      height: 100%;
      width: 100%;
    }

    .main-content {
      background: var(--bg-primary-color);
      color: var(--color-tertiary);
      padding: 5rem 3rem;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }

    .main-content .container {
      display: grid;
      place-items: center;
    }

    .main-content .row {
      margin: 1.3rem;
    }

    .main-content .row .form-group .form-control {
      background: transparent;
      border: 1px solid var(--bg-tertiary-color);
    }

    a.buy-btn,
    a.wishlist-btn {
      display: block;
      color: var(--bg-tertiary-color);
      text-align: center;
      font-size: 18px;
      width: 35px;
      height: 35px;
      line-height: 35px;
      border-radius: 50%;
      border: 1px solid var(--bg-tertiary-color);
      transition: all 0.2s ease-in-out;
    }

    a.buy-btn:hover,
    a.buy-btn:active,
    a.buy-btn:focus,
    a.wishlist-btn:hover,
    a.wishlist-btn:active,
    a.wishlist-btn:focus {
      border-color: var(--bg-tertiary-color)0;
      background: var(--bg-tertiary-color);
      color: var(--bg-primary-color);
      text-decoration: none;
    }

    .wsk-btn {
      display: inline-block;
      color: #212121;
      text-align: center;
      font-size: 18px;
      transition: all 0.2s ease-in-out;
      border-color: #FF9800;
      background: #FF9800;
      padding: 12px 30px;
      border-radius: 27px;
      margin: 0 5px;
    }

    .wsk-btn:hover,
    .wsk-btn:focus,
    .wsk-btn:active {
      text-decoration: none;
      color: #fff;
    }

    .red {
      color: #F44336;
      font-size: 22px;
      display: inline-block;
      margin: 0 5px;
    }

    @media screen and (max-width: 991px) {
      .wsk-cp-product {
        margin: 40px auto;
      }

      .wsk-cp-product .wsk-cp-img {
        top: -40px;
      }

      .wsk-cp-product .wsk-cp-img img {
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
      }

      .wsk-cp-product .wsk-cp-text .category>span {
        border-color: #ddd;
        box-shadow: none;
        padding: 11px 28px;
      }

      .wsk-cp-product .wsk-cp-text .category {
        margin-top: 0px;
      }

      a.buy-btn {
        border-color: #FF9800;
        background: #FF9800;
        color: #fff;
      }
    }



    .container-fluid-max {
      padding-top: 8rem;
    }

    .shop-content {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
      height: 100%;
      flex-direction: column;
      text-align: center;
    }




    .kapejuan-logo {
      margin-top: 0.5rem;
      position: absolute;
      left: 3.7%;
    }


    .cookiesContent {
      width: 320px;
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: #fff;
      color: #000;
      text-align: center;
      border-radius: 20px;
      padding: 30px 30px 70px;
    }

    .cookiesContent button.close {
      width: 30px;
      font-size: 20px;
      color: #c0c5cb;
      align-self: flex-end;
      background-color: transparent;
      border: none;
      margin-bottom: 10px;
    }

    .cookiesContent img {
      width: 82px;
      margin-bottom: 15px;
    }

    .cookiesContent p {
      margin-bottom: 40px;
      font-size: 18px;
    }

    .cookiesContent button.accept {
      background-color: #ed6755;
      border: none;
      border-radius: 5px;
      width: 200px;
      padding: 14px;
      font-size: 16px;
      color: white;
      box-shadow: 0px 6px 18px -5px #ed6755;
    }

    .bvc {
      /* position: absolute; */
    }

    .primary-btn--login {
      padding-top: 0.3rem;
      display: grid;
      place-items: center;
      padding: 1rem;
      width: 100%;
      /* color: var(--color-secondary);
      box-shadow: -0.3rem 0.3rem 1px rgba(141,89,33, 0.7);
      width: 100%; */
    }

    body {
      overflow-y: auto;
    }

    .primary-btn-login .primary-btn--links {
      color: var(--color-secondary);
      text-align: center;
      padding: 0.85rem 0;
      font-size: 1.188rem;
      text-transform: uppercase;
      width: 100%;
      background-color: var(--bg-secondary-color);
      border: 1px solid var(--bg-secondary-color);
      box-shadow: -0.3rem 0.3rem 1px rgba(141, 89, 33, 0.7);
    }

    .primary-btn--links {
      color: var(--color-secondary);
      text-align: center;
      padding: 0.85rem 0;
      font-size: 1.188rem;
      text-transform: uppercase;
      width: 100%;
      background-color: var(--bg-secondary-color);
      border: 1px solid var(--bg-secondary-color);
      box-shadow: -0.3rem 0.3rem 1px rgba(141, 89, 33, 0.7);
    }

    #openmenu:checked~.menu-pane {
      left: 50vw;
      transform: translateX(10vw);
      z-index: 111;
    }



    .body-text {
      padding-top: 20vh;
      text-align: center;
      position: relative;
    }

    .hamburger-icon {
      position: absolute;
      top: 5vh;
      left: 5vw;
      padding-bottom: 2vh;
      z-index: 1111;
    }

    .hamburger-icon span {
      height: 5px;
      width: 40px;
      background-color: var(--bg-secondary-color);
      display: block;
      margin: 5px 0px 5px 0px;
      transition: 0.7s ease-in-out;
      transform: none;
      z-index: 111;

    }

    #openmenu:checked~.menu-pane {
      left: -18vw;
      transform: translateX(-5vw);
      z-index: 111;

    }

    #openmenu:checked~.body-text {
      display: none;
    }

    #openmenu:checked~.hamburger-icon span:nth-of-type(2) {
      transform: translate(0%, 175%) rotate(-45deg);
      background-color: var(--bg-primary-color);

    }

    #openmenu:checked~.hamburger-icon span:nth-of-type(3) {
      transform: rotate(45deg);
      background-color: var(--bg-primary-color);
      z-index: 111;

    }

    #openmenu:checked~.hamburger-icon span:nth-of-type(1) {
      opacity: 0;
    }

    #openmenu:checked~.hamburger-icon span:nth-of-type(4) {
      opacity: 0;
      z-index: 111;
    }

    div.menu-pane {
      z-index: 111;
      display: inline-flex;
      background-color: var(--bg-secondary-color);
      position: fixed;
      transform: translateX(-105vw);
      transform-origin: 0, 0;
      width: 100vw;
      height: 100%;
      transition: 0.6s ease-in-out;
    }

    .menu-pane p {
      color: black;
      font-size: 0.6em;
    }

    .menu-pane nav {
      padding-top: 1%;
      padding-left: 30%;

      display: flex;
    }

    .menu-links .menu__heading--item {
      font-size: 2rem;
    }

    .menu-links li,
    a,
    span {
      transition: 0.5s ease-in-out;
    }

    .menu-pane ul {
      padding: 10%;
      display: inline-block;
    }

    .menu-pane li {
      padding-top: 1rem;
      padding-bottom: 1.8rem;
      margin-left: 10px;
      font-size: 1.5em;
      line-height: 1.6rem;
    }

    .menu-pane .menuImte {
      font-size: 1.7rem;
    }

    .menu-pane li:first-child {
      font-size: 1.6em;
      margin-left: -10px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .menu__links li a {
      color: white;
      text-decoration: none;
    }

    .menu__links li:hover a {
      color: #FFAB91;
    }

    .menu__links li:first-child:hover a {
      color: black;
      background-color: #FFAB91;
    }

    li {
      list-style-type: none;
    }


    #QC-info {
      background-color: #FFAB91;
      border: 2px solid;
      border-color: #FFAB91;
      display: block;
      opacity: 0;
    }

    .menu-links li:first-child:hover #QC-info {
      opacity: 1;
    }

    .menu-links li:first-child:hover #DC-info {
      opacity: 1;
    }

    #DC-info {
      background-color: #FFAB91;
      border: 2px solid;
      border-color: #FFAB91;
      display: block;
      opacity: 0;
    }

    .menu-links li:first-child a {
      padding: 5px;
    }

    input.hamburger-checkbox {
      position: absolute;
      z-index: 3;
      top: 5vh;
      left: 5vw;
      width: 10vw;
      opacity: 0;
      height: 6vh;
    }

    .text-right {
      position: absolute;
      top: 5vh;
      right: 5rem;
      color: var(--color-primary);

    }

    .menuImte {
      font-size: 1.1rem;
    }

    .text-right h1 {
      font-size: 1.5rem;
    }
  </style>
</head>
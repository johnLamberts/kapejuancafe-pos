<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POS System</title>

    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

 

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #E0CFAC;
            color: #8D5921;
            font-family: 'Cormorant Garamond', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            letter-spacing: 2px;
        }

        .links>a {
            color: #8D5921;
            font-weight: 600;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<?php 

if(isset($_GET["login"])) {
    header("location: login.php");
}
?>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Website for Kape-Juan Cafe
            </div>

            <div class="links">
			<!-- For more projects: Visit NetGO+  -->
                <a href="admin/">Admin Log In</a>
                <a href="cashier/">Cashier Log In</a>
                <a href="customer">Customer Log In</a>
            </div>
        </div>
    </div>
</body>

</html>
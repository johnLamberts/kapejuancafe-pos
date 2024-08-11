<?php
session_start();
include("./config/dbcon.php");


if (isset($_POST["verify_email"])) {

    $verification_code = $_POST["verification_code"];

    $sql = "UPDATE kpjcafe_customers SET email_verified_at = 'VERIFIED'";

    $result = mysqli_query($mysqli_conn, $sql);

    if (mysqli_affected_rows($mysqli_conn) == 0) {
        $err = "verification code failed" && header("refresh:1; url=email_verification.php");
    }

    $success = "You can now login" && header("refresh:1; url=customers.php");
}

include("./partials/_head.php");
include("./styles.php");



?>

<style>
    .verify {
        border-radius: 1%;
        font-family: Garamond;
        background-color: #66490E;
        border: auto;
        margin: auto;
        width: 50%;
        padding: 1% 7% 3% 7%;
        text-align: center;
        font-size: 12px;
        color: #E0CFAC;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .inputsss {
        margin-left: 10px;
        font-size: 20px;
        text-align: center;
        height: 40px;
        width: 40px;
        border-radius: 5px;
        background-color: #E0CFAC;
    }

    .p1 {
        font-size: 18px;
    }

    .validatebtn {
        background-color: #E0CFAC;
        color: #66490E;
        padding: 16px 20px;
        margin: 20px 0;
        border: none;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
        border-radius: 5px;
        object-position: center;
    }

    .validatebtn:hover {
        opacity: 1;
    }

    .solid {
        background-color: #E0CFAC;
        border-top: -1% solid #bbb;
    }

    .contact {
        text-align: left;
    }

    .code {
        font-size: 15px;
    }

    .resend {
        background-color: #E0CFAC;
        color: #66490E;
        border: none;
        border-radius: 5px;
        opacity: 0.9;
        cursor: pointer;
    }

    .resend:hover {
        opacity: 1;
    }
</style>

<body>
    <img class="img1" src="Initial Logo.png" alt="Logo">
    <div class="verify">
        <h1>Please enter the
            <br>code in your <code>email</code> to verify your account
        </h1>
        <form method="POST">
            <div class="p1">
                <p>A code sent to your email sample*@gmail.com </p>
            </div>
            <div class="input">
                <input type="hidden" name="customer_email" class="inputss" required>

                <input type="text" name="verification_code" class="inputss" placeholder="Enter your verification code"
                    required>
            </div>
            <div>
                <button type="submit" name="verify_email" class="validatebtn">Validate</button>
            </div>
            <!-- <div>
                    <p class="code">Didn't get the code? <button type="button" class="resend"><a
                                href="#">Resend(1/3)</a></button></p>
                </div> -->
            <div>
                <br>
                <hr class="solid">
                <div class="contact">
                    <p>Contact</p>
                    <p>1902 Camellia St. Cardona Rizal <br> ©2021 Kape-Juan Cafe</p>
                </div>
            </div>

        </form>
        <!-- <form method="POST">
            <input type="hidden" name="customer_email" required>

            <input type="text" name="verification_code" placeholder="Enter your verification code" required>

            <input type="submit" name="verify_email" value="Verify Email">

        </form> -->

        <?php 
        require("./partials/_temps.php");
        ?>
</body>
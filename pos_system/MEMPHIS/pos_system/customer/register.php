<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

require_once("./config/dbcon.php");
require_once("./partials/code_generators.php");

if (isset($_POST["login"])) {
    if (empty($_POST["customer_phoneno"]) || empty($_POST["customer_firstName"]) || empty($_POST['customer_email']) || empty($_POST['customer_password'])) {
        $err = "Blank Values Not Accepted";
    } else {
        $customer_firstName = $_POST['customer_firstName'];
        $customer_lastName = $_POST['customer_lastName'];
        $customer_phoneno = $_POST['customer_phoneno'];
        $customer_address = $_POST['customer_address'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password']; //Hash This 
        // $customer_id = $_POST['customer_id'];

        //Insert Captured information to a database table
        #$postQuery = "INSERT INTO kpjcafe_customers (customer_id, customer_name, customer_phoneno, customer_email, customer_password) VALUES(?,?,?,?,?)";
        #$postStmt = $mysqli->prepare($postQuery);
        //bind paramaters
        #$rc = $postStmt->bind_param('sssss', $customer_id, $customer_name, $customer_phoneno, $customer_email, $customer_password);
        #$postStmt->execute();
        //declare a varible which will be passed to alert function

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;

            //send using otp
            $mail->isSMTP();

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //set the SMTP server to send through
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';

            //enable smtp authentication
            $mail->SMTPAuth = true;

            //smtp username
            $mail->Username = 'faithsacredoo3@gmail.com';

            //SMTP password
            $mail->Password = "aeoxdzogwwlqrppu";

            //enable TL5 encryption
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

            //TCP prot to connect to, use 465 for `PHPMAILER::ENCRYTOPN_SMTP5` above;
            $mail->Port = 465;


            $mail->setFrom("your_email@gmail.com", 'kapejuan_cafe.com');

            $mail->addAddress($customer_email, $customer_lastName);

            $mail->isHTML(true);

            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

            $mail->Subject = 'Email Verification';
            $mail->Body = '<p>Your Verification Code <b style="font-size: 30px;">' . $verification_code . '</b></p>';


            $mail->send();

            $encrypted_password = password_hash($customer_password, PASSWORD_DEFAULT);

            $insert_query = "INSERT INTO kpjcafe_customers (customer_id, customer_firstName, customer_lastName, customer_phoneno, customer_address, customer_email, customer_password, verification_code) VALUES(?,?,?,?,?, ?, ?, ?)";
            $stmt = mysqli_prepare($mysqli_conn, $insert_query);

            if (!$stmt) {
                die("mysqli error: " . mysqli_error($mysqli_conn));
            }
            $result = mysqli_stmt_bind_param($stmt, "ssssssss", $customer_id, $customer_firstName, $customer_lastName, $customer_phoneno, $customer_address, $customer_email, $encrypted_password, $verification_code);

            if (!mysqli_stmt_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            mysqli_stmt_execute($stmt);
            if ($stmt) {
                $success = "Customer Account Created" && header("refresh:1; url=email_verification.php");
            } else {
                $err = "Please Try Again Or Try Later";
            }
            //

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }
}

include("./partials/_head.php");
?>


<style>
    section {
        padding: 0;
    }

    .main-login-page,
    .register-page {
        display: flex;
        min-width: 100%;
        height: 100vh;
        gap: 3rem;
    }

    .right-side-panel .register-account .sign-up-links {
        text-decoration: underline;
        font-weight: 800;
    }

    .right-side-panel .register-account {
        margin-left: auto;
        font-size: 1.1rem;
    }

    .right-side-panel {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 80%;
        position: relative;
        padding: 5rem;
        color: var(--color-primary);
    }

    .right-side-panel .login-control .heading__primary {
        text-align: right;
        font-size: 3.4rem;
        font-weight: 600;
        letter-spacing: 1.6px;
    }

    .form-register {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 0.9rem;
        flex-grow: 1;
        padding-inline-start: 1rem;
        padding-top: 2rem;
    }

    .form-register .form-controls {
        width: 100%;
    }

    .form-register .form-controls input {
        padding: 0.8rem 1.9rem;
        width: 100%;
        outline: none;
        background-color: transparent;
        border: 1px solid var(--bg-secondary-color);
        transition: border 0.2s ease;
        color: var(--color-primary);
        font-size: 1.1rem;
        font-weight: 300;
        width: 30rem;
    }

    .form-register .form-controls input::placeholder {
        color: var(--color-primary);
        font-size: 1.3rem;
        font-weight: 300;
        font-family: "Cormorant Garamond", serif;
    }

    .form-register .form-controls input:focus,
    .form-register .form-controls input:link {
        border: 2px solid var(--bg-secondary-color);
    }

    .forget-password {
        margin-left: auto;
        font-weight: 700;
        transition: text-decoration 0.3s ease;
    }

    .forget-password:hover {
        text-decoration: underline;
    }

    .casual-sign-in {
        text-align: center;
    }

    .primary-btn-login {
        padding-top: 0.3rem;
        display: grid;
        place-items: center;
        /* color: var(--color-secondary);
      box-shadow: -0.3rem 0.3rem 1px rgba(141,89,33, 0.7);
      width: 100%; */
    }

    .primary-btn-login {
        padding: 1rem;
    }

    .primary-btn-login .primary-btn-links {
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

    .links {
        padding: 1rem
    }

    .tertiary-btn {
        padding: 0.3rem;
        display: flex;
        justify-content: center;
        gap: 0.8rem;
        align-items: center;

        width: 100%;
        border: 1px solid var(--bg-secondary-color);
        box-shadow: -0.3rem 0.3rem 1px rgba(141, 89, 33, 0.7);
    }

    .tertiary-btn .tertiary-btn-links {
        color: var(--color-primary);
    }
</style>

<body>


    <section class="register-page" id="auth-register">
        <div class="main-login-page">
            <div class="left-side-panel">
                <img src="../../assets/images/auth/login.png" alt="" />
            </div>
            <div class="right-side-panel">

                <div class="login-control">
                    <div class="login-input-area">
                        <form class="form form-register" method="POST" role="form">

                            <div class="form-controls">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" name="customer_firstName" id="firstName" placeholder="First Name">
                                <input class="form-control" value="<?php //echo $customer_id; ?>" required
                                    name="customer_id" type="hidden">
                            </div>
                            <div class="form-controls">
                                <!-- <label for="password">Password</label> -->
                                <input type="text" name="customer_lastName" id="lastName" placeholder="Last Name">
                            </div>
                            <div class="form-controls">
                                <!-- <label for="password">Password</label> -->
                                <input type="number" name="customer_phoneno" id="phone" placeholder="Phone no.">
                            </div>
                            <div class="form-controls">
                                <!-- <label for="password">Password</label> -->
                                <input type="text" name="customer_address" id="address" placeholder="Address">
                            </div>
                            <div class="form-controls">
                                <!-- <label for="password">Password</label> -->
                                <input type="email" name="customer_email" id="email" placeholder="Email">
                            </div>
                            <div class="form-controls">
                                <!-- <label for="password">Password</label> -->
                                <input type="password" name="customer_password" id="password" placeholder="Password">
                            </div>

                            <div class="terms">
                                <h6>By creating an account you agree to our <code>Terms & Privacy</code>.</h6>
                            </div>


                            <div class="primary-btn--login">
              <input type="submit" value="Sign up" name="login" class="primary-btn--links"
                style="cursor: pointer; width: 100%;    padding: 0.85rem 0;" />
            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <?php
    include("./partials/_temps.php");
    ?>
</body>
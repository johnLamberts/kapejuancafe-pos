<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kapejuancafe_db";

$mysqli_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$mysqli_conn) {
    die("Cannot Connect to" . mysqli_connect_error());
}

define("SERVER_PATH", $_SERVER["DOCUMENT_ROOT"] . '/pos_system/admin/');
define('SITE_PATH', 'http://localhost/memphis/');

define("PRODUCT_IMAGE_SITE_PATH", SERVER_PATH . 'assets/img/products');
?>
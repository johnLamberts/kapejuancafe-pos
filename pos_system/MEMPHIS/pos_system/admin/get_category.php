<?php
include("./config/dbcon.php");

if (empty($_POST["catName"])) {
    $id = $_POST['catName'];
    // $stmt = $DB_con->prepare("SELECT * FROM  rpos_customers WHERE customer_name = :id");
    // $stmt->execute(array(':id' => $id));
    $stmt = mysqli_prepare($mysqli_conn, "SELECT * FROM  kpjcafe_category WHERE cat_name = '$id'");
    if (!$stmt) {
        die("Error stmt" . mysqli_error($conn));
    }
    mysqli_stmt_execute($stmt);
    if (!mysqli_stmt_execute($stmt)) {
        die('stmt error: ' . mysqli_stmt_error($stmt));
    }
    $res = mysqli_stmt_get_result($stmt);
?>
<?php
    while ($row = mysqli_fetch_assoc($res)) {
?>
<?php echo htmlentities($row['catID']); ?>
<?php
    }
}
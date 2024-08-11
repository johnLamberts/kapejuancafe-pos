<?php 

// No of Customers
$query = "SELECT COUNT(*) FROM `kpjcafe_customers` ";
$stmt = mysqli_prepare($mysqli_conn, $query);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $customers);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);


//No of Products Created
$query = "SELECT COUNT(*) FROM `kpjcafe_products` ";
$stmt = mysqli_prepare($mysqli_conn, $query);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $products);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);
?>
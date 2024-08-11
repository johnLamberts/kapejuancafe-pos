<?php
//config file
include("./config/dbcon.php");

require_once('partials/_analytics.php');
require_once("./partials/_head.php");


?>

<body>
	<div class="main__content">
		<div class="kapejuan-logo">
			<img loading="lazy" src="assets/img/logo.png" class="kpj-img" />
		</div>

		<?php require_once("partials/_topnav.php"); ?>
		<?php require_once("partials/_sidebar.php"); ?>

		<main class="content-wrap">
			<header class="content-head">
				<h1>Welcome to the Admin Dashboard, John Lambert</h1>
			</header>

			<div class="content">
				<section class="info-boxes">
					<div class="info-box">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path
									d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z" />
								<path
									d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z" />
							</svg>
						</div>

						<div class="box-content">
							<span class="big text-center">
								<?php echo $customers; ?>
							</span>
							<h4>No. of Customers</h4>
						</div>
					</div>

					<div class="info-box">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path
									d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z" />
							</svg>
						</div>

						<div class="box-content">
							<span class="big text-center">
								<?php echo $products; ?>
							</span>
							<h4>No. of Products</h4>
						</div>
					</div>

					<div class="info-box active">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path
									d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z" />
							</svg>
						</div>

						<div class="box-content">
							<span class="big">
								<?php echo $sales; ?>
							</span>
							<h4>Sales</h4>
						</div>
					</div>

					<div class="info-box">
						<div class="box-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path
									d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z" />
							</svg>
						</div>

						<div class="box-content">
							<span class="big">
								<?php echo $orders; ?>
							</span>
							<h4>No. of Orders</h4>
						</div>
					</div>
				</section>



				<div class="container">
					<table>
						<h1 style="color: var(--color-primary);">Recently Added Products</h1>
						<thead>
							<tr>
								<th scope="col">Image</th>
								<th scope="col">Product Code</th>
								<th scope="col">Product Category</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            $ret = "SELECT * FROM  kpjcafe_products ORDER BY created_at DESC";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($prod = $res->fetch_object()) {
                            ?>
							<tr>
								<td>
									<?php
	                            if ($prod->prod_img) {
		                            echo "<img src='assets/img/products/$prod->prod_img' height='60' width='60 class='img-thumbnail'>";
	                            } else {
		                            echo "<img src='assets/img/products/default.jpg' height='60' width='60 class='img-thumbnail'>";
	                            }

                                    ?>
								</td>
								<td>
									<?php echo $prod->prod_code; ?>
								</td>
								<td>
									<?php
	                            echo $prod->cat_id;
                                    ?>
								</td>
								<td>
									<?php echo $prod->prod_name; ?>
								</td>
								<td>P
									<?php echo $prod->prod_price; ?>
								</td>
								<td>P
									<?php echo $prod->prod_qty; ?>
								</td>
							</tr>
							<?php }
                            ?>
						</tbody>
					</table>

				</div>
				<div class="container" style="margin-top: 2rem;">
					<table>
						<h1 style="color: var(--color-primary);">Recent order</h1>
						<thead>
							<tr>
								<th scope="col">Image</th>
								<th scope="col">Name</th>
								<th scope="col">Product Code</th>
								<th scope="col">Price</th>
								<th scope="col">Status</th>
								<th scope="col">Date Order</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            $ret = "SELECT * FROM  kpjcafe_products WHERE isAvailable='Available'";
                            $stmt = mysqli_prepare($mysqli_conn, $ret);
                            mysqli_stmt_execute($stmt);
                            $res = mysqli_stmt_get_result($stmt);
                            while ($prod = $res->fetch_object()) {
                            ?>
							<tr>
								<td>
									<?php
	                            if ($prod->prod_img) {
		                            echo "<img src='assets/img/products/$prod->prod_img' height='60' width='60 class='img-thumbnail'>";
	                            } else {
		                            echo "<img src='assets/img/products/default.jpg' height='60' width='60 class='img-thumbnail'>";
	                            }

                                    ?>
								</td>
								<td>
									<?php echo $prod->prod_name; ?>
								</td>
								<td>
									<?php echo $prod->prod_code; ?>
								</td>

								<td>P
									<?php echo $prod->prod_price; ?>
								</td>
								<td>
									<?php
	                            echo "<span style='background: green;' class='badge badge-success'>$prod->isAvailable</span>";
                                    ?>
								</td>
								<td>
									<?php
	                            echo date('d/M/Y g:i', strtotime($prod->created_at));;
                                    ?>
								</td>
							</tr>
							<?php }
                            ?>
						</tbody>
					</table>

				</div>
			</div>
		</main>
	</div>
</body>

</html>
<?php
//include("controller/DBconnet.php");
require("../controller/DBconnet.php");
$mySQl = new MySQL();
$Product = $mySQl->SelectAllProduct();
?>

<html>
<meta charset="utf-8">

<head>
	<title>Sản Phẩm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../asset/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/style.css">

	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/popper.min.js"></script>
	<script src="../asset/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="../asset/js/gijgo.min.js"></script>
</head>

<body class="container-fluid">
	<div class="row">
		<!--Bảng điều hướng-->
		<div class="col-sm-2 bg-dark">
			<div style="position: relative; overflow: hidden; height: 100%">
				<nav class="nav flex-column">
					<img class="nav-item rounded-circle mx-auto" src="../upload/image/logo.png" height="50px" width="50px">
					<p class="nav-item text-white text-center" id="admin_name">haymay</p>
					<hr>
					<a class="nav-link" href="index.php">Thống Kê</a>
					<hr>
					<a class="nav-link" href="products_list.php">Sản Phẩm</a>
					<a class="nav-link" href="accout.php">Tài Khoản</a>
					<a class="nav-link" href="uploadPage.php">Upload</a>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-sm-10 ">
			<!--HIỆN NÔI DUNG-->
			<!--Thanh MENU-->
			<nav class="navbar">
				<a class="nav-link" href="addProduct.php"><button class="btn btn-dark">Thêm Sản Phẩm</button></a>

				<div class="form-inline nav-item">
					<input class="form-control" type="text" placeholder="Tìm kiếm">
				</div>
			</nav>
			<!--HIỆN BẢNG SẢN PHẨM-->
			<table class="table table-bordered table-hover table-striped mt-3 shadow">
				<thead class="thead-dark">
					<tr>
						<th>Mã Sản Phẩm</th>
						<th>Tên Sản Phẩm</th>
						<th>Số Lượng</th>
						<th>Giá</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					<!--chèn code php-->
					<script>
						function confirmDelete() {
							if (confirm("Are you sure?")) {
								return true;
							} else
								return false;
						}
					</script>
					<?php
					if ($Product->num_rows > 0) {
							foreach ($Product as $key => $valaue) {
								echo "<tr>";
								echo "<td>" . $valaue["CodeProduct"] . "</td>";
								echo "<td>" . $valaue["NameProduct"] . "</td>";
								echo "<td>" . $valaue["AmountProduct"] . "</td>";
								echo "<td>" . number_format($valaue["PriceProduct"]) . " VND</td>";
								echo "<td><a href='editProduct.php?id=" . $valaue["ID_PRODUCT"] . "'>Edit | </a>
										<a href='../controller/deleteProduct.php?id=" . $valaue["ID_PRODUCT"] . "' onclick='return confirmDelete()'>Delete</a>					
								</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='5'>Không có sản phẩm</td></tr>";
						}
					?>
				</tbody>
			</table>

			<!--end-->
		</div>
</body>

</html>
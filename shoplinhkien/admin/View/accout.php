<?php
require("../models/adminModel.php");
$admin = new Admin();
?>

<html>
<meta charset="utf-8">

<head>
	<title>Sản Phẩm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../asset/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/style.css">
	<link rel="stylesheet" href="../asset/css/gijgo.min.css">
	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/popper.min.js"></script>
	<script src="../asset/js/gijgo.min.js"></script>
	<script src="../asset/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body class="container-fluid">
	<div class="row">
		<div class="col-lg-2 bg-dark">
			<div class="h-100">
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
			<!--hiện nội dung-->
			<!-- menu chọn -->
			<div class="row mt-3">
				<nav class="col-sm-12 navbar">
					<a class="nav-link"><button class="btn btn-dark">Thêm</button></a>
				</nav>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead>
							<th>Avartar</th>
							<th>Username</th>
							<th>Password</th>
							<th></th>
						</thead>
						<tbody>
							<?php
							$data = $admin->getData();
							foreach($data as $value)
							{
								echo "<tr>";
								echo "<td><img class='rounded-circle' src='".$value['image']."' height='50px' width='50px'></td>";
								echo "<td>".$value['username']."</td>";
								echo "<td>".$value['password']."</td>";
								echo "<td><a href='#?id=" . $value["ID"] . "'>Edit | </a>
										<a href='#?id=" . $value["ID"] . "' onclick='return confirmDelete()'>Delete</a>
										</td>";		
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
			<!--end-->
		</div>
</body>

</html>
<?php
require("../models/CustomersModel.php");
session_start();
if(!isset($_SESSION["login"]))
{
	header("Location: ../");
}
$customers =new Customers();
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
	<script>
	$(document).ready(function(){
			$("#navbar").load("../controller/LoadNav.php");
		});
	</script>
</head>

<body class="container-fluid">
	<div class="row">
		<div class="col-lg-2 bg-dark" id ="navbar">
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
							<th>Tên </th>
							<th>Tuổi</th>
							<th>Địa chỉ</th>
							<th>Số điện thoại</th>
							<th>Email</th>
						</thead>
						<tbody>
							<?php
							$data = $customers->getAllData();
							foreach($data as $value)
							{
								echo "<tr>";
								echo "<td>".$value['USER']."</td>";
								echo "<td>".$value['AGE']."</td>";
								echo "<td>".$value['ADDRESS']."</td>";
								echo "<td>".$value['NBERPHONE']."</td>";							
								echo "<td>".$value['EMAIL']."</td>";
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
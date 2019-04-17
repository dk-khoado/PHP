<html>
<meta charset="utf-8">

<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../asset/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/style.css">
	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/popper.min.js"></script>
	<script src="../asset/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>

<body class="container-fluid">
	<div class="row">
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
		<!--hiện chỉ số-->
			<div class="row mt-3">
				<div class=col-sm-4>
					<div class="card shadow">
						<div class="card-header bg-primary"><h5>Đặt Hàng</h5></div>
						<div class="card-body">1000 đơn</div>
					</div>
				</div>
				<div class=col-sm-4>
					<div class="card shadow">
						<div class="card-header bg-primary"><h5>Tổng Doanh Thu</h5></div>
						<div class="card-body">99999999</div>
					</div>
				</div>
				<div class=col-sm-4>
					<div class="card shadow">
						<div class="card-header bg-primary"><h5>Thành Viên</h5></div>
						<div class="card-body"></div>
					</div>
				</div>
			</div>
			<!---->
		</div>
</body>
</html>
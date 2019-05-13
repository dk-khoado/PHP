<html>

<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/gijgo.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/color/w3-colors-flat.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/card.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/gijgo.min.js"></script>

	<!-- <link rel="stylesheet" href="layoutside.css"> -->
</head>
<style>
.bg_web{
	background-attachment: fixed;
	background-size: cover;	
	overflow:scroll;
}
</style>
<body class="container bg_web" background="<?php echo base_url(); ?>assets/image/default_bg.png">
	<!-- phần header -->

	<script>
		$(document).scroll(function() {
			var element = document.getElementById("listType");
			if ($(document).scrollTop() > 295) {
				element.classList.remove("disabled");
				element.classList.add("btn-light");

			} else {
				element.classList.add("disabled");
				element.classList.remove("btn-light");

			}
		});
	
	</script>
	<nav class="navbar fixed-top shadow" style="background-color: white">
		<a href="<?php echo site_url("main/index"); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/image/default.png" height="50px" width="50px"></a>

		<div class="nav-item dropdown">
			<button id="listType" class="btn disabled" href="#" id="navbardrop" data-toggle="dropdown">
				<h4 class="text-body">Danh Mục Sản Phẩm</h4>
			</button>
			<div class="dropdown-menu " style="height: 300px; overflow: auto;">
				<?php
				foreach ($type as $key => $value) {
					echo '<a class="dropdown-item" href="' . site_url("main/product_list/$value->ID_type/1") . '"' . $value->ID_type . '">' . $value->name_type . '</a>';
				}
				?>
			</div>
		</div>

		<form method="get" action="#">
			<input class="form-control form-control-lg" style="width:500px" type="text" name="search" placeholder="Tìm kiếm">
		</form>
		<div class="nav nav-item">
			<a class="nav-link" href="cart.php">Giỏ Hàng</a>
			<a class="nav-link" href="#">Đăng nhâp</a>
			<a class="nav-link" href="#">Đăng Ký</a>
		</div>
	</nav>

	<!-- thanh điều hướng và quản cáo -->
	<div class="row" style="margin-top: 100px">
		<div class="col-3">
			<!-- <h4 class="bg-light">Danh Mục Sản Phẩm</h4> -->
			<div class="bg-light mt-1" style="height: 300px; overflow: auto;">
				<ul class="nav flex-column">
					<?php
					foreach ($type as $key => $value) {
						echo '<li class="nav-item">';
						echo '<a class="nav-link" href="' . site_url("main/product_list/$value->ID_type/1") . '">' . $value->name_type . '</a>';
						echo '</li>';
					}
					?>
				</ul>
			</div>
		</div>
		<div class="col-9">
			<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url(); ?>assets/image/default_banner1.jpg" height="300px" width="100%" alt="Los Angeles">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>assets/image/default_banner2.jpg"  height="300px" width="100%" alt="Chicago">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>assets/image/default_banner3.jpg"  height="300px" width="100%" alt="New York">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- phần body -->
	<!-- phần sản phẩm mới -->
	<div class="shadow">
		<?php
		echo $context;
		?>
	</div>
	<!-- end body -->


	<!-- phần footer -->
	<div>
		<section class="clearfix hd1-policy border-top border-bottom-2 py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-3"> Chất lượng hàng đầu
						Cam kết tất cả sản phẩm chính hãng 100% </div>
					<div class="col-md-3"> Chất lượng hàng đầu
						Cam kết tất cả sản phẩm chính hãng 100% </div>
					<div class="col-md-3"> Chất lượng hàng đầu
						Cam kết tất cả sản phẩm chính hãng 100% </div>
					<div class="col-md-3"> Chất lượng hàng đầu
						Cam kết tất cả sản phẩm chính hãng 100% </div>
				</div>
			</div>
		</section>
		<section class="clearfix hd1-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<ul class="list-menu">
							<h6><b> VỀ 9586 </b></h6>
							<li> <a href="#">Trang chủ </a></li>
							<li> Sản phẩm </li>
							<li> Giới thiệu </li>
							<li> Liên hệ </li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-menu">
							<h6><span><b> HƯỚNG DẪN KHÁCH HÀNG </b></span></h6>
							<li> Hướng dẫn mua online </li>
							<li> Hướng dẫn mua trả góp </li>
							<li> Hướng dẫn giao nhận</li>
							<li> Hướng dẫn thanh toán </li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-menu">
							<h6><span><b>CHÍNH SÁCH CỦA 9586</b></span></h6>
							<li> <a href="#">Chính sách ưu đãi </a></li>
							<li> <a href="#">Chính sách đổi trả </a></li>
							<li> <a hr ef="#">Chính sách vận chuyển</a></li>
							<li> <a href="#">Chính sách bảo hành </a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-menu">
							<h6><span><b>KẾT NỐI VỚI CHÚNG TÔI</b></span></h6>
							<li> <a target="_blank" href="https://www.facebook.com/profile.php?id=100016526086092">Đỗ Kim Đăng Khoa</a></li>
							<li> <a target="_blank" href="https://www.facebook.com/duy.ngo.589583">Ngô Quốc Duy</a></li>
							<li> <a target="_blank" href="https://www.facebook.com/TuKent00">Nguyễn Thanh Tú </a></li>
							<li> <a target="_blank" href="https://www.facebook.com/tuan.ho.02">Hồ Anh Tuấn </a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="clearfix hd1-copyright"> </section>
	</div>
	<!-- end footer -->
</body>

</html>
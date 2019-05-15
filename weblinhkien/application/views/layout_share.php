<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datatables.min.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/gijgo.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/color/w3-colors-flat.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/card.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/libs/css/style.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/gijgo.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/css/js/slick.min.js"></script>



	<!-- <link rel="stylesheet" href="layoutside.css"> -->
</head>
<style>
	.bg_web {
		background-attachment: fixed;
		background-size: cover;
		overflow: scroll;
	}
</style>

<body class="container bg_web" background="<?php echo base_url(); ?>assets/image/default_bg.png">
	<!-- phần header -->

	<script>
		// $(document).scroll(function() {
		// 	var element = document.getElementById("listType");
		// 	if ($(document).scrollTop() > 295) {
		// 		element.classList.remove("disabled");
		// 		element.classList.add("btn-light");

		// 	} else {
		// 		element.classList.add("disabled");
		// 		element.classList.remove("btn-light");

		// 	}
		// });
	</script>
	<div class="fixed-top">
		<header class="topbar">
			<div class="container">
				<div class="row">
					<!-- social icon-->
					<div class="col-sm-12">
						<ul class="social-network">
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url("main/index") ?>" style="text-transform: uppercase;"> LINHKIEN9586.COM</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">

					<ul class="navbar-nav ml-auto">

						<li class="nav-item active">
							<a class="nav-link" href="#">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Danh Mục Sản Phẩm</a>
						</li>
						

						<li class="nav-item">
							<a class="nav-link" href="#">Cart</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Register</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="row" style="margin-top: 110px">
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
						<img src="<?php echo base_url(); ?>assets/image/default_banner2.jpg" height="300px" width="100%" alt="Chicago">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url(); ?>assets/image/default_banner3.jpg" height="300px" width="100%" alt="New York">
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
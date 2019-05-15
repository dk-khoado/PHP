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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/gijgo.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>



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
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a>
							</li>
							<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a>
							</li>
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
							<a class="nav-link" href="<?php echo site_url("main/index") ?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Danh mục sản phẩm</a>
							<div class="dropdown-menu">
								<?php
								foreach ($type as $key => $value) {
									echo '<a class="dropdown-item" href="' . site_url("main/product_list/$value->ID_type/1") . '">' . $value->name_type . '</a>';
									//kk
								}
								?>
							</div>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="#">Cart</a>
						</li>
						<?php
						if (isset($_SESSION['id']) &&  isset($_SESSION['name'])) {
							echo '<li class="nav-item dropdown">';
							echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Hello ' . $_SESSION['name'] . '</a>';
							echo '<div class="dropdown-menu">';
							echo '<a class="dropdown-item" href="' . site_url("main/signout") . '">Đăng Xuất</a>';
							echo '</div>';
							echo '</li>';							
						} else {
							echo '<li class="nav-item">';
							echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a>';
							echo '</li>';

							echo '<li class="nav-item">';
							echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login</a>';
							echo '</li>';
						}
						?>

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
	<!-- phần dialog của login -->
	<div class="modal fade" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header bg-primary">
					<div class="d-inline">
						<h3 class="mb-1">Login Form</h3>
						<p>Please enter your user information.</p>
					</div>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div>
						<div class="card">
							<div class="card-body">
								<form action="<?php echo site_url('main/AddUser'); ?>" method="POST">
									<div class="form-group">
										<input class="form-control form-control-lg" type="text" name="username" placeholder="Username">
									</div>
									<div class="form-group">
										<input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<label class="custom-control custom-checkbox">
											<input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
										</label>
									</div>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
								</form>
							</div>
							<div class="card-footer bg-white p-0">
								<div class="card-footer-item card-footer-item-bordered">
									<a href="#" class="footer-link">Create An Account</a></div>
								<div class="card-footer-item card-footer-item-bordered">
									<a href="#" class="footer-link">Forgot Password</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal footer -->
			</div>
		</div>
	</div>
	<!-- end dialog -->
	<!-- phần dialog của register -->
	<div class="modal fade" id="register">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header bg-primary">
					<div class="d-inline">
						<h3 class="mb-1">Registrations Form</h3>
						<p>Please enter your user information.</p>
					</div>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form class="splash-container" action="<?php echo site_url('main/Register'); ?>" method="POST">
						<div class="card">
							<div class="card-body">
								<div class="form-group">
									<input class="form-control form-control-lg" type="text" name="username" required placeholder="Username" autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" type="email" name="email" required placeholder="E-mail" autocomplete="off">
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" id="pass1" name="r_password" type="password" required placeholder="Password">
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" type="password" placeholder="Confirm">
								</div>
								<div class="form-group pt-2">
									<button class="btn btn-block btn-primary" type="submit">Register My Account</button>
								</div>
								<div class="form-group">
									<label class="custom-control custom-checkbox">
										<input class="custom-control-input" type="checkbox">
										<span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span> </label>
								</div>
							</div>
							<div class="card-footer bg-white">
								<p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
							</div>
						</div>
					</form>
				</div>
				<!-- phần viết js -->
				<!-- end -->

			</div>
		</div>
	</div>
	<!-- end dialog -->
	<!--  ===============================================-->
	<!-- ============================================= -->
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
					<div class="col-md-3"> Chất lượng hàng đầu Cam kết tất cả sản phẩm chính hãng 100% </div>
					<div class="col-md-3"> Chất lượng hàng đầu Cam kết tất cả sản phẩm chính hãng 100% </div>
					<div class="col-md-3"> Chất lượng hàng đầu Cam kết tất cả sản phẩm chính hãng 100% </div>
					<div class="col-md-3"> Chất lượng hàng đầu Cam kết tất cả sản phẩm chính hãng 100% </div>
				</div>
			</div>
		</section>
		<section class="clearfix hd1-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<ul class="list-menu">
							<h6><b> VỀ 9586 </b></h6>
							<li> <a href="#">Trang chủ </a>
							</li>
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
							<li> <a href="#">Chính sách ưu đãi </a>
							</li>
							<li> <a href="#">Chính sách đổi trả </a>
							</li>
							<li> <a hr ef="#">Chính sách vận chuyển</a>
							</li>
							<li> <a href="#">Chính sách bảo hành </a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-menu">
							<h6><span><b>KẾT NỐI VỚI CHÚNG TÔI</b></span></h6>
							<li> <a target="_blank" href="https://www.facebook.com/profile.php?id=100016526086092">Đỗ Kim Đăng Khoa</a>
							</li>
							<li> <a target="_blank" href="https://www.facebook.com/duy.ngo.589583">Ngô Quốc Duy</a>
							</li>
							<li> <a target="_blank" href="https://www.facebook.com/TuKent00">Nguyễn Thanh Tú </a>
							</li>
							<li> <a target="_blank" href="https://www.facebook.com/tuan.ho.02">Hồ Anh Tuấn </a>
							</li>
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
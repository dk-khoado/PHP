<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>
		<?php echo $tittel ?>
	</title>
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
	<script>
		function LoadCart() {
			$("#loadcart").children().remove();
			base_url = "<?php echo base_url(); ?>";
			url = "<?php echo base_url() . 'apiajax/Cart'; ?>"
			$.ajax({
				async: false,
				method: 'POST',
				dataType: 'json',
				data: {
					"id_user": <?php echo $_SESSION['id'] ?>
				},
				url: url
			}).done(function(callback) {

				$.each(callback, function(k, v) {
					data = "<tr><td rowspan='2'><img src='" + base_url + "upload/" + v.Image + "' width='60px' height='60px'></td><td class='col-xs-4' colspan='5'>" + v.NameProduct + "</td></tr>";

					value = "<tr><td style='width: 50px'><input class='form-control text-center' min='1' type='number' style='width: 60px; height: 25px;' value='" + v.amount + "'></td><td colspan='3'>Giá:" + v.PriceProduct + "</td><td><button type='button'  class='btn btn-danger btn-sm' style='width: 30px; height: 30px; text-align: center;'><strong>X</strong></button></td></tr>";
					$("#loadcart").append(data + value);
				});
			});
		}
	</script>
</head>
<style>
	.bg_web {
		background-attachment: fixed;
		background-size: cover;
		overflow: scroll;
	}
</style>

<body class="container bg_web" background="<?php echo base_url(); ?>assets/image/default_bg.png">
<<<<<<< HEAD
<<<<<<< HEAD
	<!-- phần header -->
	<script>
		function LoadCart() {
			base_url = "<?php echo base_url()?>";
			url = "<?php echo base_url().'apiajax/Cart';?>"
			$.ajax( {
				async: false,
				method: 'POST',
				dataType: 'json',
				url: url,

				success: function ( LoadCart ) {
					$.each( LoadCart, function ( k, v ) {

						data = "<div class='row p-3'> <div class='col-2'><img src=" + base_url + "upload/" + v.Image " width='85px' height='85px'> </div> <div class='col-10'> <div class='row p-3'> <div class='col-12'>" + v.NameProduct + "</div> </div> <div class='row p-3'> <div class='col-3'><input class='form-control text-center' min='1' type='number' style='width: 60px; height: 25px;'>" + v.amount + "</input> </div> <div class='col-7'>" + v.Price + "</div> <div class='col-2'><button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px; text-align: center;'><strong>X</strong></button> </div> </div> </div> </div>";
						
						$( "#loadcart" ).append(data);

					} );
				}
			} ).done( function ( callback ) {
				check = callback;
			} );
		};
	</script>
=======
	<!-- phần header -->	
>>>>>>> master
=======

	<!-- phần header -->	
>>>>>>> master
	<div class="fixed-top">
		<header class="topbar">
			<div class="container">
				<div class="row">
					<!-- social icon-->
					<div class="col-sm-12">
						<ul class="social-network">
							<li class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" onclick="LoadCart()" data-toggle="dropdown" id="btn_cart">Card</button>

								<div class="dropdown-menu" style="width: 420px">
									<div class="row p-3">
										<div class="col-12">
											Totol:5555555
										</div>
									</div>
									<div id="loadcart" style="overflow-y: scroll; overflow-x: hidden; max-height: 200px;">
										<div class="row p-3">
											<div class="col-2"><img src="#" width="85px" height="85px">
											</div>
											<div class="col-10">
												<div class="row p-3">
													<div class="col-12">Ten</div>
												</div>
												<div class="row p-3">
													<div class="col-3"><input class="form-control text-center" min="1" max="50" type="number" style="width: 60px; height: 25px;"></input>
													</div>
													<div class="col-7">Gia</div>
													<div class="col-2"><button type="button" class="btn btn-danger btn-sm" style="width: 30px; height: 30px; text-align: center;"><strong>X</strong></button>
													</div>
												</div>
											</div>
										</div>


									</div>
									<div class="row pb-2">
										<div class="col-4"><button type="button" class="btn btn-primary" style="width: 100%; text-align: center;"><strong>Cart</strong></button>
										</div>
										<div class="col-8"><button type="button" class="btn btn-success" style="width: 100%; text-align: center;"><strong>Check Out</strong></button>
										</div>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
			<div class="container">

				<a class="navbar-brand" href="<?php echo site_url("main/index") ?>" style="text-transform: uppercase;"> LINHKIEN9586.TK</a>
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
							<a class="nav-link" href="<?php echo site_url("main/about") ?>">About</a>
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

						<?php
						if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

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
								<form action="<?php echo site_url('main/Login'); ?>" method="POST" onSubmit="return Click2()">
									<div class="form-group">
										<input class="form-control form-control-lg" type="text" name="username" id="username" placeholder="Username">
									</div>
									<div class="form-group">
										<input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Password">
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
								<!-- <div class="card-footer-item card-footer-item-bordered">
									<a href="#" class="footer-link">Create An Account</a></div>
								<div class="card-footer-item card-footer-item-bordered">
									<a href="#" class="footer-link">Forgot Password</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<script>
					function Click2() {						
						var username = $('#username').val();
						var password = $('#password').val();
						url = "<?php echo base_url() . 'apiajax/checkLogin' ?>";
						alert(url);
						var check = '';
						$.ajax({
							url: url,
							method: "POST",
							data: {
								'username': username,
								'password': password
							},
							async: false,

						}).done(function(callback) {
							check = callback;
						});
						if (check == "ok") {
							return true;
						}						
						return false;
					}
				</script>
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
					<form class="splash-container" action="<?php echo site_url('main/Register'); ?>" method="POST" onSubmit="return Click()">
						<div class="card">
							<div class="card-body">
								<div class="form-group">
									<input class="form-control form-control-lg" type="text" id="username" name="username" required placeholder="Username" autocomplete="off">
									<p id="K"></p>

								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" type="email" id="email" name="email" required placeholder="E-mail" autocomplete="off">
									<p id="L"></p>
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" id="pass1" name="r_password" type="password" required placeholder="Password">
									<p id="Q"> </p>
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" type="password" placeholder="Confirm" name="re_pass" id="pass2">
									<p id="R"></p>
								</div>
								<div class="form-group pt-2">
									<button class="btn btn-block btn-primary" type="submit">Register My Account</button>
								</div>
								<!-- <div class="form-group">
									<label class="custom-control custom-checkbox">
										<input class="custom-control-input" type="checkbox">
										<span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span> </label>
								</div> -->
							</div>
							<div class="card-footer bg-white">
								<!-- <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p> -->
							</div>
						</div>
					</form>
				</div>
				<script>
					function Click() {
						var username = $('#username_r').val();
						var email = $('#email').val();
						var r_password = $('#pass1').val();
						var re_pass = $('#pass2').val();
						url = "<?php echo base_url() . 'apiajax/checkRegister' ?>";
						var check = '';						
						$.ajax({

							url: url,
							method: "POST",
							data: {
								'username': username,
								'email': email
							},
							async: false,

						}).done(function(callback) {
							check = callback;
						});
						if (check == "email") {
							document.getElementById("L").innerHTML = "<p style ='color:red';> Email da co</p>";
							return false;
						} else if (check == "username") {
							document.getElementById("K").innerHTML = "<p style ='color:red';> User da co</p>";
							return false;
						} else if (r_password != re_pass) {
							document.getElementById("Q").innerHTML = "<p style ='color:red';> Pass khong dung</p>";
							document.getElementById("R").innerHTML ="<p style ='color:red';> repass khong dung</p>";
							return false;
						}
						else if(check == "ok"){
							return true;
						}

						return false;
					}
				</script>
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
</body>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

	<!-- Footer Links -->
	<div class="container-fluid text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-6 mt-md-0 mt-3">

				<!-- Content -->
				<h5 class="text-uppercase">Footer Content</h5>
				<p>Here you can use rows and columns to organize your footer content.</p>

			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none pb-3">

			<!-- Grid column -->
			<div class="col-md-3 mb-md-0 mb-3">

				<!-- Links -->
				<h5 class="text-uppercase">Links</h5>

				<ul class="list-unstyled">
					<li>
						<a href="#!">Link 1</a>
					</li>
					<li>
						<a href="#!">Link 2</a>
					</li>
					<li>
						<a href="#!">Link 3</a>
					</li>
					<li>
						<a href="#!">Link 4</a>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 mb-md-0 mb-3">

				<!-- Links -->
				<h5 class="text-uppercase">KẾT NỐI VỚI CHÚNG TÔI</h5>

				<ul class="list-unstyled">
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
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2019 Copyright:
		<a href="http://www.linhkien9586.tk/"> linhkien9586.tk</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->

</html>
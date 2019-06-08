<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>
		<?php echo $tittel ?>
	</title>
	<meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id" content="903145238396-sgo9aodfrv70to2mdvi1slp7qid4bhat.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/gijgo.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
	<!-- <link rel="stylesheet" href="layoutside.css"> -->
	<script>
		function onSignIn(googleUser) {
			// Useful data for your client-side scripts:
			var profile = googleUser.getBasicProfile();
			console.log("ID: " + profile.getId()); // Don't send this directly to your server!
			console.log('Full Name: ' + profile.getName());
			console.log('Given Name: ' + profile.getGivenName());
			console.log('Family Name: ' + profile.getFamilyName());
			console.log("Image URL: " + profile.getImageUrl());
			console.log("Email: " + profile.getEmail());

			// The ID token you need to pass to your backend:
			var id_token = googleUser.getAuthResponse().id_token;
			console.log("ID Token: " + id_token);
		}
	</script>
	<script>
		function LoadCart() {
			$("#loadcart").children().remove();
			base_url = "<?php echo base_url(); ?>";
			url = "<?php echo base_url() . 'ApiAjax/Cart'; ?>"
			check = "";
			var sum = 0;
			$.ajax({
				async: false,
				method: 'POST',
				dataType: 'json',
				data: {
					"id_user": <?php if (isset($_SESSION['id'])) echo $_SESSION['id'];
								else echo 'null'; ?>
				},
				url: url
			}).done(function(callback) {
				check = callback;
				$.each(callback, function(k, v) {
					var total = v.amount * v.PriceProduct;
					sum += total;
					data = "<div class='row p-3'> <div class='col-2'><img src='" + base_url + "upload/" + v.Image + "' width='85px' height='85px'> </div> <div class='col-10'> <div class='row p-3'> <div class='col-12'>" + v.NameProduct + "</div> </div> <div class='row p-3'> <div class='col-3'><input class='form-control text-center' value='" + v.amount +
						"' min='1' type='number' style='width: 60px; height: 25px;'></div> <div class='col-7'>" + v.PriceProduct +
						"</div> <div class='col-2'><button type='button' class='btn btn-danger btn-sm' style='width: 30px; height: 30px; text-align: center;' onclick='DelCart(" + v.id_cart + ")'><strong>X</strong></button> </div> </div> </div> </div>";
					$("#loadcart").append(data);

				});
				div = "Tổng: " + sum;
				$("#loadtotal").text(div);
			});
			//alert(check);
			if (check == "") {			
				$("#loadtotal").text("giỏ hàng trống !!");
			}
		}

		function DelCart(del) {
			url = "<?php echo base_url() . 'ApiAjax/removeOncart'; ?>"
			$.ajax({
				url: url,
				async: false,
				method: 'POST',
				dataType: 'json',
				data: {
					'id_cart': del
				}
			});
			LoadCart();
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

<body style="margin-top: 110px" class="container bg_web" background="<?php echo base_url(); ?>assets/image/default_bg.png">
	<!-- phần header -->
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
									<script>
										$(document).on('click', '.dropdown-menu', function(e) {
											e.stopPropagation();
										});
									</script>
									<div class="row p-3">
										<b>
											<div class="col-12" id="loadtotal">
												Vui lòng đăng nhập
											</div>
										</b>
									</div>

									<div id="loadcart" style="overflow-y: scroll; overflow-x: hidden; max-height: 200px;">
										<!-- <div class="row p-3">
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
										</div> -->
									</div>
									<div class="row p-2">
										<div class="col-4"><button type="button" class="btn btn-primary" style="width: 100%; text-align: center;"><strong>Cart</strong></button>
										</div>
										<div class="col-8"><a href="<?php echo base_url() . "main/checkout" ?>"><button type="button" class="btn btn-success" style="width: 100%; text-align: center;"><strong>Check Out</strong></button></a>
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
	<?php
	if (isset($cmd)) {
		if ($cmd != 'hide_banner') {
			$this->load->view('banner');
		}
	} else {
		$this->load->view('banner');
	}
	?>
	<!-- =========================================================== -->
	<!-- =========================================================== -->
	<!-- =========================================================== -->
	<!-- =========================================================== -->
	<!-- =========================================================== -->
	<!-- =========================================================== -->
	<!-- =========================================================== -->
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
								<form action="<?php echo site_url('Main/Login'); ?>" method="POST" onSubmit="return Click2()">
									<div class="form-group">
										<input class="form-control form-control-lg" type="text" name="username" id="username" placeholder="Username">
									</div>
									<div class="form-group">
										<input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Password">
									</div>
									<!-- <div class="form-group">
										<label class="custom-control custom-checkbox">
											<input class="custom-control-input" type="checkbox"><span class="custom-control-label">Forgot password</span>
										</label>

									</div>									 -->
									<div class="mb-3"><a href="<?php echo base_url() . "main/resetPassword" ?>">Forgot password ?</a></div>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

								</form>								
							</div>
							<div class="card-footer bg-white p-0">
								<!-- <div class="card-footer-item card-footer-item-bordered">
									<a href="#" class="footer-link">Create An Account</a></div>
								<div class="card-footer-item card-footer-item-bordered">
									<a href="#" class="footer-link">Forgot Password</a>
								</div> -->
								<div class="g-signin2 w-100" data-onsuccess="onSignIn" data-theme="dark"></div>
							</div>
						</div>
					</div>
				</div>
				<script>
					function Click2() {
						var username = $('#username').val();
						var password = $('#password').val();
						url = "<?php echo base_url() . 'ApiAjax/checkLogin' ?>";
						var check = '';
						// alert(username + password);
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
							alert("Đăng nhập thành công");
							return true;
						} else {
							alert("Tài khoản hoặc mật khẩu sai!!");
							// alert(check);
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
									<input class="form-control form-control-lg" type="text" name="username" id="username_r" required placeholder="Username" autocomplete="off">
									<p id="NoteUser"></p>

								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" type="email" name="email" id="email" required placeholder="E-mail" autocomplete="off">
									<p id="NoteEmail"></p>
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" name="password" type="password" id="pass1" required placeholder="Password">
								</div>
								<div class="form-group">
									<input class="form-control form-control-lg" name="re_password" type="password" id="pass2" placeholder="Confirm">
								</div>
								<div class="form-group pt-2">
									<button class="btn btn-block btn-primary" type="submit">Register My Account</button>
									<p id="K"></p>
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
						var password = $('#pass1').val();
						var re_password = $('#pass2').val();
						url = "<?php echo base_url() . 'ApiAjax/checkRegister' ?>";
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
						if (check == "username") {
							document.getElementById("NoteUser").innerHTML = "<p style ='color:red';> User đã tồn tại </p>";
							return false;
						} else if (check == "email") {
							document.getElementById("NoteEmail").innerHTML = "<p style ='color:red';> Email đã tồn tại </p>";
							return false;
						} else if (password != re_password) {
							document.getElementById("K").innerHTML = "<p style ='color:red';> Nhập lại mật khẩu không đúng </p>";
							// if (check == "ok") {
							// 	return true;
							// }
							return false;
						} else if (check == "ok") {
							return true;
						}
						alert("lỗi" + check);
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
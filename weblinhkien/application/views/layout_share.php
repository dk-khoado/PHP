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
	<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="https://cdn.shopifycloud.com/hatchful-web/assets/2adcef6c1f7ab8a256ebdeba7fceb19f.png" style="width: 50px"  alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select" style="float: left">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here" style="float: left">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation" >
			<!-- container -->
			<div class="container ">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav nav-item">
						<li class=" active"><a href="#">Home</a></li>
						<li><a  href="#">Hot Deals</a></li>
						<li ><a  href="#">Categories</a></li>
						<li><a  href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a  href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Regular Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" style="float: left" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
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
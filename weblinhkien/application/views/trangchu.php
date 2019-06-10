<!-- end header -->
<script>
	function AddCart(id_pro) {
		url = "<?php echo base_url() . 'ApiAjax/addToCart'; ?>";
		alert("đã thêm vào giỏ hàng");
		$.ajax({
			url: url,
			method: 'POST',
			async: false,
			data: {
				"id_user": <?php echo $_SESSION['id'] ?>,
				"id_product": id_pro,
				"amount": 1
			}
		});
	}
</script>

<!-- phần body -->
<!-- phần sản phẩm mới -->
<div class="containt">
	<div class="row" style="background: #66bb6a">
		<div class="col-sm-10">
			<h3 class="align-baseline" style="color: aliceblue">Sản phẩm mới</h3>
		</div>
		<div class="col-sm-2">
			<!-- <a href="#" style="color: aliceblue"> Xem tiếp</a> -->
		</div>
	</div>
	<div class="container">
		<div class="">
			<div role="toolbar" class="myproduct slider responsive  slick-slider slick-dotted">
				<?php
				foreach ($newProducts as $key => $value) {
					if ($value->hide == "0") {
						echo '<div class="">';
						echo '<div class="product">';
						echo '<div class="product-img">';
						if ($value->Image == "") {
							echo '<img src="' . base_url() . "assets/image/default_product.jpg" . '"  height= 150px">';
						} else {
							echo '<img src="' . base_url() . "upload/" . $value->Image . '" height= 150px">';
						}
						//product label
						echo '<div class="product-label">';
						echo '<span class="sale">-30%</span>';
						echo '</div>';
						//end
						echo '</div>';
						//product
						echo '<div class="product-body">';
						echo '<p class="product-category">Category</p>';
						echo '<h3 class="product-name limitText"><a href="' . site_url("main/chitiet") . '?id=' . $value->ID_PRODUCT . '">' . $value->NameProduct . '</a></h3>';
						echo '<h4 class="product-price">' . number_format($value->PriceProduct) . ' <del class="product-old-price"></del></h4>';
						echo '<a href="' . site_url("main/chitiet") . '?id=' . $value->ID_PRODUCT . '" class="btn btn-primary">Chi tiết</a>';
						echo '<button onclick="AddCart(' . $value->ID_PRODUCT . ')" type="button" class="btn btn-outline-danger"><i class="fa fa-shopping-cart"></i> add to cart</button>';
						echo '</div>';
						//end			
						echo '</div>';
						echo '</div>';
					}
				}
				?>
			</div>			
		</div>
		<script>
			// $('.slick').slick({
			// 	slidesToShow: 3,
			// 	slidesToScroll: 1,
			// 	autoplay: true,
			// 	autoplaySpeed: 2000,
			// });
		</script>
		<script>
			$('.myproduct').slick({
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 2,
				responsive: [{
						breakpoint: 600,
						settings: "unslick"
					},
					{
						breakpoint: 480,
						settings: "unslick"
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
			$(window).on('resize', function() {
				location.reload();
				//$('.myproduct').slick("resize");
			});
		</script>
	</div>
</div>

<!-- phần sản phẩm hot -->
<!-- <div class="">
	<div class="row" style="background: red">
		<div class="col-sm-10">
			<h3 class="align-baseline" style="color: aliceblue">Sản phẩm hot</h3>
		</div>
		<div class="col-sm-2">
			<a href="#" style="color: aliceblue"> Xem tiếp</a>
		</div>
	</div>
	<table class="table">
		<thead>
			
		</thead>
	</table>
</div> -->

<!-- phần sản phẩm khuyến mãi -->
<!-- <div class="">
	<div class="row" style="background: red">
		<div class="col-sm-10">
			<h3 class="align-baseline" style="color: aliceblue">Sản phẩm khuyến mãi</h3>
		</div>
		<div class="col-sm-2">
			<a href="#" style="color: aliceblue"> Xem tiếp</a>
		</div>
	</div>
	<table class="table">
		<thead>
			
		</thead>
	</table>
</div> -->

<!-- end body -->


<!-- phần footer -->
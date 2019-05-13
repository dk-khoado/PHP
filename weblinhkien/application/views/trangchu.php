<!-- end header -->


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
	<div class="row">
		<div class="col-12 m-2 ">	
		<?php
			foreach ($newProducts as $key => $value) {			
				echo "<div class ='card ' style='width: 200px; height: 400px; float: left;'> ";
				echo '<div class="card-img-top">';
				if ($value->Image == "") {
					echo '<img src="' . base_url() . "assets/image/default_product.jpg" . '" style="width: 200px; height: 200px">';
				} else {
					echo '<img src="' . base_url() . "upload/" . $value->Image . '" style="width: 200px; height: 200px">';
				}
				echo '</div>';
				echo '<div class="card-body" style="width: 200px; height: 215px">';
				echo '<div  class="card-title" style="width: 155px; height: 80px">';
				echo '<b >'. $value->NameProduct.'</b>';
				echo '</div>';
				echo '<p class="card-text">'.number_format($value->PriceProduct).'</p>';
				echo '<a href="'. site_url("main/chitiet").'?id='.$value->ID_PRODUCT.'" class="btn btn-primary">Chi tiết</a>';
				echo '</div>';
				echo '</div>';				
			}
			?>	
		</div>
				
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
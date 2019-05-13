<!-- phần body -->


<div id="">
	<div class="row">

		<div class="col-4">
			<img src="<?php
						if ($product->Image == "") {
							echo base_url() . "assets/image/default_product.jpg";
						} else {
							echo base_url() . "upload/" . $product->Image;
						}  ?>" width="350px" height="350px" class="rounded float-left">
		</div>
		<div class="col-8">
			<H1 class="text-info" class="display-4"><?php echo $product->NameProduct ?></H1>
			<br>

			<span class="text-left" class="font-weight-bold">Bảo hành 1 năm</span>

			<br>

			<span class="text-left" class="font-weight-bold">Xuất xứ:</span>
			<span class="text-danger" class="font-weight-bold"><?php echo $product->manufacturer ?></span>

			<br>
			<br>
			<span class="font-weight-bold">Giá:</span>
			<span class="text-danger" class="font-weight-bold"><?php echo number_format($product->PriceProduct) ?> đ</span>
			<span class="text-muted"><del>800000 đ</del></span>

			<br>

			<span class="text-left" class="text-warning">-50%</span>

			<br>
			<br>

			<H4 class="text-left"><small>Số lượng</small></H4>
			<input class="form-control text-center" value="1" min="1" type="number" style="width: 100px">

			<div class="custum_layout_button">
				<button class="btn btn-primary btn-lg">Mua Ngay</button>
				<button class="btn btn-danger btn-lg">Thêm vào giỏ hàng</button>
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-12">
			<H2 class="text">Mô tả sản phẩm <i><?php echo $product->NameProduct ?></i></H2>
			<div>
				<!-- phần load thông tin mô tả -->
				<?php
				echo $product->Descrip;
				?>
			</div>
		</div>
	</div>

</div>


<!-- end body -->
<div class="row">
	<div class="col-12">
		<div class="row">
			<div class="col-6">Tên</div>
			<div class="col-2">Gía</div>
			<div class="col-1">SL</div>
			<div class="col-2">TTiền</div>
			<div class="col-1"></div>
		</div>
		<?php
		foreach ($data as $key => $value) {
			$url = base_url() . "upload/" . $value->Image;
			echo '<div class="row">';
			echo '<div class="col-2"><img src="' . $url . '" width="80px" height="80px"></div>';
			echo '<div class="col-4">' . $value->NameProduct . '</div>';
			echo '<div class="col-2">' . $value->PriceProduct . '</div>';
			echo '<div class="col-1"><input class="form-control text-center" value=' . $value->amount . ' min="1" max="50" type="number" style="width: 60px; height: 25px;"></div>';
			echo '<div class="col-2">ko biết hihi</div>';
			echo '<div class="col-1"><button type="button" class="btn btn-danger btn-sm" style="width: 30px; height: 30px; text-align: center;"><strong>X</strong></button></div>';
			echo '</div>';
		}
		?>
		<div class="row">
			<a class="col-4"><button type="button" class="btn btn-danger btn-sm" style="width: 80%; text-align: center;"><strong>Tiếp tục mua hàng</strong></button></a>
			<div class="col-4">Tổng tiền 1000000</div>
			<a class="col-4"><button type="button" class="btn btn-danger btn-sm" style="width: 80%; text-align: center;"><strong>Thanh toán</strong></button></a>
		</div>

	</div>
</div>
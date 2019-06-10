<script>
function DeleteCart(del) {
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
			location.reload();
		}
</script>


<div class="row" style="margin-top: 300px">
	<div class="col-12">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">Tên</div>
			<div class="col-2">Gía</div>
			<div class="col-1">SL</div>
			<div class="col-2">TTiền</div>
			<div class="col-1"></div>
		</div>
		<?php
		$total = 0;
		foreach ($data as $key => $value) {
			$url = base_url() . "upload/" . $value->Image;
			echo '<div class="row">';
			echo '<div class="col-2"><img src="' . $url . '" width="100px" height="100px"></div>';
			echo '<div class="col-4">' . $value->NameProduct . '</div>';
			echo '<div class="col-2">' . $value->PriceProduct . '</div>';
			echo '<div class="col-1"><input class="form-control text-center" value=' . $value->amount . ' min="1" max="50" type="number" style="width: 60px; height: 25px;"></div>';
			echo '<div class="col-2">'.$value->PriceProduct * $value->amount.'</div>';
			echo '<div class="col-1"><button type="button" onclick="DeleteCart('.$value->id_cart.')" class="btn btn-danger btn-sm" style="width: 30px; height: 30px; text-align: center;"><strong>X</strong></button></div>';
			echo '</div>';
			$total += $value->PriceProduct * $value->amount;
		}
		?>
		<div class="row">
			<a class="col-4" href="<?php echo site_url("main/Search") ?>"><button type="button" class="btn btn-sm" style="background-color: #4CAF50; width: 80%; text-align: center;"><strong>Tiếp tục mua hàng</strong></button></a>
			<div class="col-4">Tổng tiền: <?php echo number_format($total)?> đồng</div>
			<a class="col-4" href="<?php echo site_url("main/checkout") ?>"><button type="button" class="btn btn-danger btn-sm" style="width: 80%; text-align: center;"><strong>Thanh toán</strong></button></a>
		</div>

	</div>
</div>
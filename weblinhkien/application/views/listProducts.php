<!-- end header -->
<!-- phần body -->
<style>
	.show_ct:hover {
		cursor: hand;
	}
</style>
<script>
	function chitiet(id) {
		location.replace("<?php echo site_url("main/chitiet") . "?id=" ?>" + id);
	}
</script>
<div class="row">
	<div class="col-12 m-2">
		<?php
		foreach ($products as $value) {
			echo "<div  class ='card' onclick='chitiet(" . $value->ID_PRODUCT . ")' style='width: 200px; height: 400px; float: left;'>";
			echo '<div class="card-img-top" >';
			if ($value->Image == "") {
				echo '<img src="' . base_url() . "assets/image/default_product.jpg" . '" width="200px" style="height: 200px">';
			} else {
				echo '<img src="' . base_url() . "upload/" . $value->Image . '" width="200px" style="height: 200px">';
			}
			echo '</div>';
			echo '<div class="card-body" style="width: 200px; height: 215px">';
			echo '<div  class="card-title" style="width: 155px; height: 80px">';
			echo '<b >' . $value->NameProduct . '</b>';
			echo '</div>';
			echo '<p class="card-text">' . number_format($value->PriceProduct) . '</p>';
			echo '<a href="#' . site_url("main/chitiet") . '?id=' . $value->ID_PRODUCT . '" class="btn btn-danger">Mua Ngay</a>';
			echo '</div>';
			echo '</div>';
		}
		?>

	</div>
</div>
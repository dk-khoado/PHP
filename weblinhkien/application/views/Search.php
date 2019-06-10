<!--Duy Search-->
<script>

</script>

<div class="row ">
	<div class="col-12 " id="searchLoad">
		<?php
		foreach ($products as $key => $value) {
			echo '<div class="" style="width:220px; display: inline-block">';
			echo '<div class="product">';
			echo '<div class="product-img">';
			if ($value->Image == "") {
				echo '<img src="' . base_url() . "assets/image/default_product.jpg" . '"  height= 150px">';
			} else {
				echo '<img src="' . base_url() . "upload/" . $value->Image . '" height= 150px">';
			}
			//product label
			echo '<div class="product-label">';

			echo '</div>';
			//end
			echo '</div>';
			//product
			echo '<div class="product-body">';
			echo '<p class="product-category">Category</p>';
			echo '<h3 class="product-name limitText"><a href="' . site_url("main/chitiet") . '?id=' . $value->ID_PRODUCT . '">' . $value->NameProduct . '</a></h3>';
			echo '<h4 class="product-price">' . number_format($value->PriceProduct) . ' <del class="product-old-price"></del></h4>';
			echo '<a href="' . site_url("main/chitiet") . '?id=' . $value->ID_PRODUCT . '" class="btn btn-outline-primary">Chi tiết</a>';
			echo '<button onclick="AddCart(' . $value->ID_PRODUCT . ')" type="button" class="btn btn-outline-danger"><i class="fa fa-shopping-cart"></i></button>';
			echo '</div>';
			//end			
			echo '</div>';
			echo '</div>';
		}
		?>
	</div>
</div>
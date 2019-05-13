<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title"><?php echo $header ?> </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-12">
		<!--HIỆN NÔI DUNG-->
		<!--Thanh MENU-->
		<nav class="navbar navbar-expand-md mb-3">
			<a class="nav-link" href="<?php echo site_url('admin/addProduct'); ?>"><button class="btn btn-dark">Thêm Sản Phẩm</button></a>
		</nav>
		<!--HIỆN BẢNG SẢN PHẨM-->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').DataTable({
					"lengthChange": false,
					"lengthMenu": 10
				});
			});

			function confirmDelete() {
				if (confirm("Are you sure?")) {
					return true;
				} else
					return false;
			}
		</script>
		<table id="table" class="table table-bordered table-hover table-striped mt-3 shadow">
			<thead class="thead-dark">
				<tr>
					<th>Mã Sản Phẩm</th>
					<th>Tên Sản Phẩm</th>
					<th>Số Lượng</th>
					<th>Giá</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($list != null) {
					foreach ($list as $key => $valaue) {
						echo "<tr>";
						echo "<td>" . $valaue->CodeProduct . "</td>";
						echo "<td>" . $valaue->NameProduct . "</td>";
						echo "<td>" . $valaue->AmountProduct . "</td>";
						echo "<td>" . number_format($valaue->PriceProduct) . " VND</td>";
						echo "<td><a href='" . site_url('admin/EditProduct/') . $valaue->ID_PRODUCT . "'>Edit | </a>
										<a href='" . site_url('admin/deleteProduct/') . $valaue->ID_PRODUCT . "' onclick='return confirmDelete()'>Delete</a>					
								</td>";
						echo "</tr>";
					}
				}
				?>
			</tbody>
		</table>

		<!--end-->
	</div>
</div>
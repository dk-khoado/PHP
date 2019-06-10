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
			<a class="nav-link" href="<?php echo site_url("admin/addProduct") ?>">
				<button class="btn btn-dark">Thêm Sản Phẩm</button>
			</a>

			<!-- Modal -->
			<div id="modal_add" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Thêm Sản Phẩm</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body scrollable">
							<form class="shadow" action="<?php echo site_url('admin/insertProduct'); ?>" method="POST" enctype="multipart/form-data">
								<table class="table table-borderless">
									<tr>
										<td rowspan="3">
											<!--phần viết ajax-->
											<script type="text/javascript">
												var ID_image; //lưu ID 
												function realTimeImage(ID) {
													//$("#a").load("../controller/ImageRealTime.php?id=" + ID);
													var image = document.getElementById('preview');
													var request = new XMLHttpRequest();
													request.open("GET", "../controller/ImageRealTime.php?id=" + ID, true);
													request.onreadystatechange = function() {
														if (request.readyState == 4)
															if (request.status == 200) {
																image.src = request.responseText;
																ID_image = ID;
															}
														else alert("Err");
													}
													request.send();
												}
												//chuyển chuyền từ dialog vào image
												function btnOK() {
													var srcPreview = document.getElementById("preview");
													var image = document.getElementById("image");
													image.src = srcPreview.src;
													$('#choseImage').attr('value', ID_image);
													$('#choseImage').attr('name', "choseImage");

												}

												function btnUpload() {
													var src = document.getElementById("image");
													src.src = URL.createObjectURL(event.target.files[0]);
												}
											</script>
											<img id="image" src="<?php echo base_url(); ?>assets/image/default_product.jpg" height="200px" width="200px">

											<br>
											<div class="mt-1">
												<label class="btn btn-primary hover" for="upload">Upload</label>
												<input onchange="btnUpload()" id="upload" type="file" name="image" value="<?php echo base_url(); ?>assets/image/default_product.jpg" style="display:none">
												<div class="modal fade" id="myModal">
													<div class="modal-dialog">
														<div class="modal-content">
															<!-- Modal Header -->
															<div class="modal-header">
																<h4 class="modal-title">Chọn ảnh</h4>
																<button type="button" class="close" data-dismiss="modal"></button>
															</div>
															<!-- Modal body -->
															<div class="modal-body scrollable">
																<?php
																// $a =new ConnetMYSQL();
																// $con = $a->getConnect();
																// $result = $con->query("SELECT *from image");

																// foreach ($result as $value) {
																// 	echo '<button type="button" onclick="realTimeImage(' . $value['ID_image'] . ')" class="btn"><img src="' . $value['link'] . '" height="100px" width="100px"></button>';
																// }
																?>

															</div>

															<!-- Modal footer -->
															<div class="modal-footer">
																<img id="preview" height="50px" width="50px">
																<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																<button id="btn_ok" onclick="btnOK()" type="button" class="btn btn-success" data-dismiss="modal">OK</button>
															</div>

														</div>
													</div>
												</div>

											</div>
										</td>
										<td colspan="3" class="input-group">
											<span class="input-group-text input-group-prepend">Mã Sản Phẩm:</span>
											<input name="codeProduct" class="form-control" type="text" required>
										</td>

									</tr>
									<tr>

										<td colspan="3" class="input-group">
											<span class="input-group-text input-group-prepend">Tên Sản Phẩm</span>
											<input name="nameProduct" class="form-control" type="text" required>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="input-group">
											<span class="input-group-prepend input-group-text">Số Lượng</span>
											<input class="form-control" type="number" name="amount" required>
											<span class="input-group-prepend input-group-text">Giá</span>
											<input class="form-control" type="number" name="price" required>
											<span class="input-group-prepend input-group-text">VND</span>
										</td>
									</tr>
									<tr>
										<td colspan="4">
											<div class="input-group">
												<span class="input-group-prepend input-group-text">Xuất Xứ</span>
												<input class="form-control" type="text" name="manufacturer" required>
												<span class="input-group-prepend input-group-text">Loại</span>
												<select name="type" class="custom-select">
													<?php
													foreach ($type as $key => $value) {
														echo "<option value='" . $value->ID_type . "'>" . $value->name_type . "</option>";
													}
													?>
												</select>
											</div>


										</td>
									</tr>
									<tr>
										<td colspan="4"><label for="editor"><b>Thông Tin Sản Phẩm</b></label></td>
									</tr>
									<tr>
										<td colspan="4">
											<textarea id="editor" name="descript">
											</textarea>
											<script type="text/javascript">
												$(document).ready(function() {
													$("#editor").editor();
												});
											</script>
										</td>
									</tr>
									<tr>
										<td><input class="btn btn-success w-100" type="submit" value="Thêm"></td>
										<td><a href="<?php echo site_url('admin/product'); ?>"><button type="button" class="btn btn-danger">Hủy</button> </a></td>
									</tr>
								</table>
							</form>
						</div>
					</div>

				</div>
			</div>
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
						if ($valaue->hide == "0") {

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
				}
				?>
			</tbody>
		</table>

		<!--end-->
	</div>
</div>
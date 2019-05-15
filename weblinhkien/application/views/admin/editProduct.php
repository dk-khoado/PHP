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
	<div class="col-12 ">
		<!--HIỆN NÔI DUNG-->
		<form class="mt-4 shadow mx-5 mt-5" action="<?php echo site_url('admin/UpdateProduct/') . $product->ID_PRODUCT; ?>" method="POST" enctype="multipart/form-data">
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
								if (src == "") {

								}
								src.src = URL.createObjectURL(event.target.files[0]);
							}
						</script>
						<img id="image" src="<?php
												if ($product->Image == "") {
													echo base_url() . "assets/image/default_product.jpg";
												} else {
													echo base_url() . "upload/" . $product->Image;
												}
												?>" height="200px" width="200px">

						<br>
						<div class="mt-1">
							<label class="btn btn-primary hover" for="upload">Upload</label>
							<input onchange="btnUpload()" id="upload" type="file" name="image" value="<?php echo $product->Image ?>" style="display:none">
							<!-- <label class="btn btn-primary hover" for="btnChosse">Chọn Ảnh</label>
							<input type="text" id="choseImage" style="display:none">
							<button id="btnChosse" type="button" class="btn btn-primary" style="display: none" data-toggle="modal" data-target="#myModal">Chọn Ảnh</button> -->
							<!-- The Modal -->
							<!-- com cu be bé -->
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
											// $a = new ConnetMYSQL();
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
						<input name="codeProduct" class="form-control" type="text" value="<?php echo $product->CodeProduct ?>" required>
					</td>

				</tr>
				<tr>

					<td colspan="3" class="input-group">
						<span class="input-group-text input-group-prepend">Tên Sản Phẩm</span>
						<input name="nameProduct" class="form-control" value="<?php echo $product->NameProduct ?>" type="text" required>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="input-group">
						<span class="input-group-prepend input-group-text">Số Lượng</span>
						<input class="form-control" type="number" value="<?php echo $product->AmountProduct ?>" name="amount" required>
						<span class="input-group-prepend input-group-text">Giá</span>
						<input class="form-control" type="number" value="<?php echo $product->PriceProduct ?>" name="price" required>
						<span class="input-group-prepend input-group-text">VND</span>
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<div class="input-group">
							<span class="input-group-prepend input-group-text">Xuất Xứ</span>
							<input class="form-control" type="text" name="manufacturer" value="<?php echo $product->manufacturer ?>" required>
							<span class="input-group-prepend input-group-text">Loại</span>
							<select id="select" name="type" class="custom-select" required>
								<?php
								foreach ($type as $key => $value) {
									echo "<option value='" . $value->ID_type . "'>" . $value->name_type . "</option>";
								}
								?>
							</select>
							<script>
								$("#select").val("<?php echo $product->type ?>");
							</script>
						</div>

					</td>
				</tr>
				<tr>
					<td colspan="4"><label for="editor"><b>Thông Tin Sản Phẩm</b></label></td>
				</tr>
				<tr>
					<td colspan="4">
						<textarea id="editor" name="descript">
							<?php echo $product->Descrip ?>
							</textarea>
						<script type="text/javascript">
							$(document).ready(function() {
								$("#editor").editor();
							});
						</script>
					</td>
				</tr>
				<tr>
					<td><button class="btn btn-success w-100" type="submit" name="ID">Cập Nhập</button></td>
					<td><a href="<?php echo site_url('admin/product'); ?>"><button type="button" class="btn btn-danger">Hủy</button> </a></td>
				</tr>
			</table>
		</form>

		<!--end-->
	</div>
</div>
<?php
//include("controller/DBconnet.php");
require("../controller/DBconnet.php");
require("../controller/MysqlConnet.php");
$mySQl = new MySQL();
$Product = $mySQl->SelectAllProduct();
$srcImage;
?>

<html>
<meta charset="utf-8">

<head>
	<title>Sản Phẩm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../asset/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/style.css">
	<link rel="stylesheet" href="../asset/css/gijgo.min.css">
	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/popper.min.js"></script>
	<script src="../asset/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="../asset/js/gijgo.min.js"></script>
</head>

<body class="container-fluid">
	<div class="row">
		<div class="col-2 bg-dark">
			<div style="position: relative; overflow: hidden; height: 100%">
				<nav class="nav flex-column">
					<img class="nav-item rounded-circle mx-auto" src="../upload/image/logo.png" height="50px" width="50px">
					<p class="nav-item text-white text-center" id="admin_name">haymay</p>
					<hr>
					<a class="nav-link" href="index.php">Thống Kê</a>
					<hr>
					<a class="nav-link" href="products_list.php">Sản Phẩm</a>
					<a class="nav-link" href="accout.php">Tài Khoản</a>
					<a class="nav-link" href="uploadPage.php">Upload</a>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-xl-10 ">
			<!--HIỆN NÔI DUNG-->
			<form class="mt-4 shadow mx-5 mt-5" action="../controller/addProductController.php" method="POST" enctype="multipart/form-data">
				<table class="table table-borderless">
					<tr>
						<td rowspan="3">
							<!--phần viết ajax-->
							<script type="text/javascript">
							var ID_image;//lưu ID 
								function realTimeImage(ID) 
								{
									//$("#a").load("../controller/ImageRealTime.php?id=" + ID);
									var image = document.getElementById('preview');
									var request = new XMLHttpRequest();
									request.open("GET", "../controller/ImageRealTime.php?id=" + ID, true);
									request.onreadystatechange = function() {
										if (request.readyState == 4)
											if (request.status == 200)
											{
												image.src = request.responseText;
												ID_image = ID;													
											}
											else alert("Err");
									}
									request.send();
								}
								//chuyển chuyền từ dialog vào image
								function btnOK()
								{
									var srcPreview = document.getElementById("preview");
									var image = document.getElementById("image");
									image.src = srcPreview.src;
									$('#choseImage').attr('value', ID_image);
									$('#choseImage').attr('name', "choseImage");

								}
								function btnUpload(){
									var src = document.getElementById("image");
									src.src= URL.createObjectURL(event.target.files[0]);									
								}
							</script>
							<img id="image" src="../upload/image/default.jpg" height="200px" width="200px">
							
							<br>
							<div class="mt-1">
								<label class="btn btn-primary hover" for="upload">Upload</label>
								<input onchange="btnUpload()" id="upload" type="file" name="image" value="../upload/image/default.jpg" style="display:none">													
								<label class="btn btn-primary hover" for="btnChosse">Chọn Ảnh</label>
								<input type="text" id="choseImage" style="display:none" >
								<button id="btnChosse" type="button" class="btn btn-primary hide" data-toggle="modal" data-target="#myModal">Chọn Ảnh</button>
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
												$result = $con->query("SELECT *from image");

												foreach ($result as $value) 
												{
													echo '<button type="button" onclick="realTimeImage(' . $value['ID_image'] . ')" class="btn"><img src="' . $value['link'] . '" height="100px" width="100px"></button>';
												}
												?>

											</div>

											<!-- Modal footer -->
											<div class="modal-footer">
												<img id="preview" height="50px" width="50px">
												<button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
						<td><a href="products_list.php"><button type="button" class="btn btn-danger">Hủy</button> </a></td>
					</tr>
				</table>
			</form>

			<!--end-->
		</div>
</body>

</html>
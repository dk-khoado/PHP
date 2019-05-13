
<html>
<meta charset="utf-8">

<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../asset/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/datatables.min.css">
	<link rel="stylesheet" href="../asset/css/style.css">
	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/datatables.min.js"></script>
	<script src="../asset/js/popper.min.js"></script>
	<script src="../asset/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="../asset/js/gijgo.min.js"></script>	
</head>

<body class="container-fluid">
	<div class="row">
		<!-- phần navbar -->
		<div id="navbar" class="col-sm-2 bg-dark">
		</div>
		<div id="context" class="col-sm-10">
			<!--hiện nội dung chính-->

			<!-- Nav pills -->
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="pill" href="#home">Trang Chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#menu1">Loại sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content mt-4">
				<!--			phần thiết lập trang chủ-->
				<div class="tab-pane active" id="home">
					<div class="card shadow">
						<div class="card-header bg-info"><strong>Banner And Logo</strong>
						</div>
						<div class="card-body">
							<table class="table">
								<thead>
									<th>Image</th>
									<th>Name</th>
									<th>#</th>
								</thead>
								<tbody>
									<tr>
										<td><img src="../upload/image/default.jpg" height="50px" width="50px">
										</td>
										<td>Logo
										</td>
										<td class="w-25">
											<label for="uploadLogo" class="btn btn-primary hover">Chỉnh Sửa</label>
											<input id="uploadLogo" type="file" style="display: none" accept="image/*">
										</td>
									</tr>
									<tr>
										<td><img src="../upload/image/default.jpg" height="50px" width="50px">
										</td>
										<td>Banner 1
										</td>
										<td>
											<label for="uploadBanner1" class="btn btn-primary hover">Chỉnh Sửa</label>
											<input id="uploadBanner1" type="file" style="display: none" accept="image/*">
										</td>
									</tr>
									<tr>
										<td><img src="../upload/image/default.jpg" height="50px" width="50px">
										</td>
										<td>Banner 2
										</td>
										<td>
											<label for="uploadBanner2" class="btn btn-primary hover">Chỉnh Sửa</label>
											<input id="uploadBanner2" type="file" style="display: none" accept="image/*">
										</td>
									</tr>
									<tr>
										<td><img src="../upload/image/default.jpg" height="50px" width="50px">
										</td>
										<td>Banner 3
										</td>
										<td>
											<label for="uploadBanner3" class="btn btn-primary hover">Chỉnh Sửa</label>
											<input id="uploadBanner3" type="file" style="display: none" accept="image/*">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
				<div class="tab-pane fade" id="menu1">
					<script type="text/javascript">
						// js tạo bảng
						$(document).ready(function() {
							$('#table_type').DataTable({
								"lengthChange": false,
								"lengthMenu": 10
							});
						});

						function openModal() {
							$("#myModal").modal();
						}

						function addType() {
							var form = document.querySelector("form");
							var data = new FormData(form);
							var request = new XMLHttpRequest();
							request.open("POST", "../controller/addType.php", true);
							request.onreadystatechange = function() {
								if (request.readyState == 4)
									if (request.status == 200)
										document.getElementById('table_row').innerHTML = request.responseText;
									else alert("Err");
							}
							request.send(data);
						}
					</script>
					<!-- phần hiện danh sách các loại sản phẩm -->
					<button type="button" class="btn btn-dark" onclick="openModal()">Thêm</button>
					<div class="card shadow mt-3">
						<table id="table_type" class="table">
							<thead>
								<th>ID loại</th>
								<th>Loại </th>
								<th>#</th>
							</thead>
							<tbody id="table_row">
								<?php
								$data = $type->getAllData();
								foreach ($data as $value) {
									echo "<tr>";
									echo "<td>" . $value['ID_type'] . "</td>";
									echo "<td>" . $value['name_type'] . "</td>";
									echo "<td></td>";
									echo "</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="menu2">...</div>
			</div>
			<!---->
		</div>
	</div>

	<!-- dialog  -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Nhập Thể Loại</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form method="post" id="form" enctype="multipart/form-data">
						<input type="text" id="inputType" name="type" >
						<button type="button" class="btn btn-success" data-dismiss="modal" onclick="addType()">Thêm</button>
					</form>
					
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
</body>

</html>
<?php
//include("controller/DBconnet.php");
require("../controller/DBconnet.php");
require("../controller/MysqlConnet.php");
$mySQl = new MySQL();
$Product = $mySQl->SelectAllProduct();
?>

<html>
<meta charset="utf-8">

<head>
	<title>Sản Phẩm</title>
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
		<!--Bảng điều hướng-->
		<div class="col-sm-2 bg-dark">
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
		<div class="col-sm-10 mt-2">
			<!--HIỆN NÔI DUNG-->
			<!--Thanh MENU-->
			<script type="text/javascript">
				function f1() {
					
					var formElement = document.querySelector("form");
					var data = new FormData(formElement);
					var request = new XMLHttpRequest();
					request.open("POST", "../controller/uploadFile.php", true);
					request.onreadystatechange = function() {
						if (request.readyState == 4)
							if (request.status == 200)
								document.getElementById('content').innerHTML = request.responseText;
							else alert("Err");
					}
					request.send(data);
				}
			</script>
			<div>
				<form id="form" method="post" enctype="multipart/form-data">
					<label>Upload Image File:</label><br />
					<input name="image" type="file" />
					<input type="button" name="submit" onclick="f1()" value="Submit" />
				</form>
			</div>
			<!--HIỆN BẢNG SẢN PHẨM-->
			<script type="text/javascript">
				$(document).ready(function() {
					$('#table_image').DataTable();					
				});
			</script>
			<table id="table_image" class="table table-striped table-bordered dataTable mb-auto-5">
				<thead>
					<tr>

						<th>Image</th>
						<th>Name</th>
						<th></th>

					</tr>
				</thead>
				<tbody id="content">
					<?php
					$result =	$con->query("SELECT * from image");
					foreach ($result as $value) {
						echo "<tr>";
						echo "<td>";
						echo "<img class='mx-3' src='" . $value['link'] . "' height='100px' width='100px'>";
						echo "</td>";
						echo "<td>";
						echo $value['name'];
						echo "</td>";
						echo "<td></td>";
						echo "</tr>";
					}
					?>
				</tbody>

			</table>
			<!--end-->
		</div>
</body>

</html>
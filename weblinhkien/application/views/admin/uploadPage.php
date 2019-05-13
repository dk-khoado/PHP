<?php
//include("controller/DBconnet.php");
require("../controller/DBconnet.php");
require("../models/adminModel.php");
session_start();
if(!isset($_SESSION["login"]))
{
	header("Location: ../");
}
$admin =new Admin();
$admin->LoginByID($_SESSION['login']);
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
	<script>
	$(document).ready(function(){
			$("#navbar").load("../controller/LoadNav.php");
		});
	</script>
</head>

<body class="container-fluid">
	<div class="row">
		<!--Bảng điều hướng-->
		<div class="col-sm-2 bg-dark" id ="navbar">
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
					$('#table_image').DataTable({					
						"lengthChange": false,
						"lengthMenu":10
					});					
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

<html>

<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/gijgo.min.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/gijgo.min.js"></script>

	<link rel="stylesheet" href="layoutside.css">
</head>

<body>
	<!-- phần header -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-1">
			</div>
			<div class="col-10">
				<div class="fixed-top">
					<nav class="navbar w3-flat-clouds">
						<a href="#" class="navbar-brand"><img src="admin/upload/avartar/default.png" height="50px" width="50px"></a>
						<div class="dropdown" style="width: 300px; display: none">
							<button type="button" class="btn btn-primary w-100 dropdown-toggle" data-toggle="dropdown">
								Danh Mục Sản Phẩm
							</button>
							<div class="dropdown-menu">
								<?php
								$data = $type->getAllData();
								foreach ($data as $value) {
									echo '<a class="dropdown-item" href="?id=' . $value['ID_type'] . '">' . $value['name_type'] . '</a>';
								}
								?>
							</div>
						</div>
						<form class="nav-item" method="get" action="#">
							<input class="form-control form-control-lg" style="width:500px" type="text" name="search" placeholder="Tìm kiếm">
						</form>
						<div class="nav nav-item">
							<a class="nav-link" href="#">Giỏ Hàng</a>
							<a class="nav-link" href="#">Đăng nhâp</a>
							<a class="nav-link" href="#">Đăng Ký</a>
						</div>
					</nav>
				</div>
				<!-- thanh điều hướng và quản cáo -->
				<div class="row" style="margin-top: 100px">
					<div class="col-3">
						<h4 class="bg-light">Danh Mục Sản Phẩm</h4>
						<div class="bg-light mt-1" style="height: 300px; overflow: auto;">
							<ul class="nav flex-column">
								<?php
								foreach ($data as $value) {
									echo '<li class="nav-item">';
									echo '<a class="nav-link" href="#">' . $value['name_type'] . '</a>';
									echo '</li>';
								}
								?>
							</ul>
						</div>
					</div>
					<div class="col-9">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="la.jpg" alt="Los Angeles">
								</div>
								<div class="carousel-item">
									<img src="chicago.jpg" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="ny.jpg" alt="New York">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header -->


		<!-- phần body -->
		
		<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <table class="form-horizontal">
        <div class="form-group">
          <tr>
            <td><label class="col-sm-12">Họ Tên</label></td>
            <th> <input type="text" name="Hoten"></th>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td><label class="col-sm-12">Điện thoại di động</label></td>
            <th><input type="text" name="DT"></th>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td><label class="col-sm-12">Tỉnh/Thành Phố</label></td>
            <th><select name="form-control" class="custom-select mb-3">
                <option value="TP.HCM">TP.HCM</option>
                <option value="TP.Hue">TP.Huế</option>
                <option value="Da Nang">Đà Nẵng</option>
                <option value="Vinh Long">Vĩnh Long</option>
              </select></th>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td><label	 class="col-sm-12">Quận/Huyện</label></td>
            <th> <select name="form-control" class="custom-select mb-3">
                <option>Hóc Môn</option>
                <option>Bình Thạnh</option>
                <option>Tân Bình</option>
                <option>Quận 12</option>
              </select></th>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td><label class="col-sm-12">Phường/Xã</label></td>
            <th><select name="form-control" class="custom-select mb-3">
                <option>Tân Thới Nhì</option>
                <option>Tân Thới Thượng</option>
                <option>Thống Nhất</option>
                <option>Tân Thới Tam</option>
              </select></th>
          </tr>
        </div>
        <div class="form-group">
          <tr>
            <td><label class="col-sm-12">Địa chỉ</label></td>
            <th> <textarea name="form-control" rows="2" class="custom-control"></textarea></th>
            <br>
          </tr>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <tr>
              <td><label class="col-sm-12"></label></td>
              <th><button type="button" class="btn btn-light">Hủy bỏ</button>
                <button type="button" class="btn btn-info ">Cập Nhật</button></th>
            </tr>
          </div>
        </div>
      </table>
    </div>
    <div class="col-sm-6">
      <table class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12 text-center">
            <tr>
              <td><label for="SP">Tên sản phẩm:</label></td>
              <th><label for="Ten"> Kingspec P3-240 2.5 Sata III 240Gb</label>
              </th>
            </tr>
          </div>
        </div>
        <div class="form-group text-center">
          <div class="col-sm-12">
            <tr>
              <td><label for="Gia">Giá :</label></td>
              <th> <label for="Sotien"> 899.000đ</label>
              </th>
            </tr>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <tr>
              <td><label for="Soluong">Số Lượng</label></td>
              <th> <label for="item"> 1</label>
              </th>
            </tr>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 text-center">
            <tr>
              <td><label for="Tien">Thành tiền</label></td>
              <th> <label for="Tong">899.000đ</label>
              </th>
            </tr>
          </div>
        </div>
        <div class="form-group">
        		<div class="card">
        		<div class="card-subtitle">
        			<p class="card-text"> Tên Khách hàng : Ngô Đầu Buồi</p>
        			<p class="card-text"> Số điện thoại : 090921029</p>
        			<p class="card-text"> Địa chỉ: Tào lao bí đao</p>
					</div>
        		</div>
        </div>
      </table>
    </div>
  </div>
</div>

		<!-- end body -->


		<!-- phần footer -->
		<div>
			<section class="clearfix hd1-policy border-top border-bottom-2 py-5">
				<div class="container">
					<div class="row">
						<div class="col-md-3"> Chất lượng hàng đầu
							Cam kết tất cả sản phẩm chính hãng 100% </div>
						<div class="col-md-3"> Chất lượng hàng đầu
							Cam kết tất cả sản phẩm chính hãng 100% </div>
						<div class="col-md-3"> Chất lượng hàng đầu
							Cam kết tất cả sản phẩm chính hãng 100% </div>
						<div class="col-md-3"> Chất lượng hàng đầu
							Cam kết tất cả sản phẩm chính hãng 100% </div>
					</div>
				</div>
			</section>
			<section class="clearfix hd1-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<ul class="list-menu">
								<h6><b> VỀ 9586 </b></h6>
								<li> <a href="#">Trang chủ </a></li>
								<li> Sản phẩm </li>
								<li> Giới thiệu </li>
								<li> Liên hệ </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-menu">
								<h6><span><b> HƯỚNG DẪN KHÁCH HÀNG </b></span></h6>
								<li> Hướng dẫn mua online </li>
								<li> Hướng dẫn mua trả góp </li>
								<li> Hướng dẫn giao nhận</li>
								<li> Hướng dẫn thanh toán </li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-menu">
								<h6><span><b>CHÍNH SÁCH CỦA 9586</b></span></h6>
								<li> <a href="#">Chính sách ưu đãi </a></li>
								<li> <a href="#">Chính sách đổi trả </a></li>
								<li> <a hr ef="#">Chính sách vận chuyển</a></li>
								<li> <a href="#">Chính sách bảo hành </a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="list-menu">
								<h6><span><b>KẾT NỐI VỚI CHÚNG TÔI</b></span></h6>
								<li> <a target="_blank" href="https://www.facebook.com/profile.php?id=100016526086092">Đỗ Kim Đăng Khoa</a></li>
								<li> <a target="_blank" href="https://www.facebook.com/duy.ngo.589583">Ngô Quốc Duy</a></li>
								<li> <a target="_blank" href="https://www.facebook.com/TuKent00">Nguyễn Thanh Tú </a></li>
								<li> <a target="_blank" href="https://www.facebook.com/tuan.ho.02">Hồ Anh Tuấn </a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="clearfix hd1-copyright"> </section>
		</div>
		<!-- end footer -->
</body>

</html>
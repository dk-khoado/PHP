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
    <!-- phần navbar -->   
    <div class="col-12 ">
        <!--hiện chỉ số-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable({
                    "lengthChange": false,
                    "lengthMenu": 10
                });
            });
        </script>
        <table id="table" class="table table-striped table-bordered">
            <thead>
                <th>Mã đơn hàng</th>
                <th>Tên Người Đặt</th>
                <th>Ngày Đặt</th>
                <th>Trạng thái</th>
                <th>#</th>
            </thead>
            <tbody>
            <?php
            foreach($data as $key=> $value){
                echo "<td>".$value->ID_order."</td>";
                echo "<td>".$value->ID_User."</td>";
                echo "<td>".$value->OnSellDate."</td>";
                echo "<td>".$value->status."</td>";
                echo "<td>"<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Thongtin</button>."</td>";
            }
            ?>
              <div class="modal" id="myModal">
  			<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <div class="modal-body">
         	<form role="form">
          		<div class="input-group">
          			<span class="input-group-text input-group-prepend">ID_detail:</span>
					<input name="codeDetail" class="form-control" type="text" required>
				</div></br>
          	<div class="input-group">
          			<span class="input-group-text input-group-prepend">ID_order:</span>
          			<input name="codeOrder" class="form-control" type="text" required>
			</div></br>
          	<div class="input-group">
          			<span class="input-group-text input-group-prepend">ID_Product</span>
          			<input name="codeProduct" class="form-control" type="text" required>
			</div></br>
          	<div class="input-group">
          			<span class="input-group-text input-group-prepend">Price</span>
          			<input name="codePrice" class="form-control" type="text" required>
				</div></br>
          	<div class="input-group">
          			<span class="input-group-text input-group-prepend">amount</span>
          			<input name="codeAmount" class="form-control" type="text" required> 
				  </div></br>
          	</form>
			</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
				</div>
      </div>
    </div>
            </tbody>
        </table>
        <!---->
    </div>
</div>
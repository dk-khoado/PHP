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
                foreach ($data as $key => $value) {
                    echo "<td>" . $value->ID_order . "</td>";
                    echo "<td>" . $value->name . "</td>";
                    echo "<td>" . $value->OnSellDate . "</td>";
                    echo "<td>" . $value->status . "</td>";
                     echo '<td><button type ="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"  onClick="Click('.$value->ID_order.')">Chi tiết</button></td>';
                }
                ?>
            </tbody>
        </table>
        <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="font-size: 24px">
                            <table>
           					<tr>
           						<td> Thong tin:</td>
           						<th colspan="4" id="CodeDetail"></th>
           					</tr>
                           <tr>
                           		<td>Ma don hang:</td>
                           		<th colspan="4" id="CodeOrder"></th>
                           </tr>
                           <tr>
                           		<td>San pham:</td>
                           		<th colspan="4" id="CodeProduct"></th>
                           </tr>
                           <tr>
                           		<td>Gia:</td>
                           		<th colspan="4" id="CodePrice"></th>
                           </tr>
                           <tr>
                           		<td>So luong:</td>
                           		<th colspan="4" id="Codeamount"></th>
                           </tr>
                           </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <script>
       				function Click(ID_order){
						url = "<?php echo base_url() . 'ApiAjax/orderdetail'; ?>"
						$.ajax({
						url:url,
						method:'POST',
						async:false,
						data:{
							"id_order":ID_order
						},
						dataType:'json'
						}).done(function(callback){
							$.each(callback,function(k,v){
								$('#myModal').children().remove();
							data = "  <div class='modal-dialog modal-lg'> <div class='modal-content'> <div class='modal-header'> <h4 class='modal-title'>Modal Heading</h4> <button type='button' class='close' data-dismiss='modal'>&times;</button> </div> <div class='modal-body' style='font-size: 24px'> <table> <tr> <td> Thong tin:</td> <th colspan='4' id='CodeDetail'>"+v.ID_detail+"</th> </tr> <tr> <td>Ma don hang:</td> <th colspan='4' id='CodeOrder'>"+v.ID_order+"</th> </tr> <tr> <td>San pham:</td> <th colspan='4' id='CodeProduct'>"+v.ID_PRODUCT+"</th> </tr> <tr> <td>Gia:</td> <th colspan='4' id='CodePrice'>"+v.Price+"</th> </tr> <tr> <td>So luong:</td> <th colspan='4' id='Codeamount'>"+v.amount+"</th> </tr> </table> </div> <div class='modal-footer'> <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button> </div> </div> </div>";
							$('#myModal').append(data);
							 });
						});
					}
			</script>
        <!---->
    </div>
</div>
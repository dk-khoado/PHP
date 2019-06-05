<!-- load dữ liệu form -->
<script>
    $(document).ready(function() {
        $("#firstName").val('<?php echo $data->NAME ?>');
        $("#Email").val('<?php echo $data->EMAIL ?>');
        $("#address").val('<?php echo $data->ADDRESS ?>');
        $("#city").val('<?php echo $data->id_city ?>');
        $("#state").val('<?php echo $data->id_quan ?>');
        $("#phonenumber").val('<?php echo $data->NBERPHONE ?>');
    });
</script>
<!-- ================================= -->
<!-- ================================= -->
<!-- ================================= -->
<!-- ================================= -->
<script>
	function LoadDis(){
	url = "<?php echo base_url() . 'apiajax/loadDistrist'; ?>"
			id=$('#city').val();
			$.ajax({
				url:url,
				method:'POST',
				async: false,
				data: {
					'ID_city':id
				},
				dataType:'json'
			}).done(function(kq){
				$('#state').children().remove();
				$.each(kq, function(k,v){
						data = "<option value="+ v.ID_city +">"+ v.quan_huyen_name +"</option>";
						$('#state').append(data);
				
				});
				console.log(kq);
			});
	};


</script>

<div class="row" style="margin-top: 110px">
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Địa chỉ giao hàng</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url()."checkout/send/index"; ?>">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="firstName">Họ và tên</label>
                                    <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="email">Email <span class="text-muted">(Bắt buộc)</span></label>
                                <input type="email" class="form-control" id="Email" name="email" placeholder="you@example.com" readonly>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Tỉnh/Thành Phố</label>
                                    <select class="custom-select d-block w-100" id="city" onChange="LoadDis()" required>
                                        
                                        <?php
											foreach($city as $key => $value){
											echo "<option value = '".$value->ID_city."'>".$value->city_name."</option>";
											}
										?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Quận/huyện</label>
                                    <select class="custom-select d-block w-100" id="state" required>
                                        
                                        
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Số điện thoại</label>
                                <input type="text" class="form-control" id="phonenumber" name="numberphone" placeholder="(+84) 123456789" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <hr class="mb-4">
                            <h4 class="mt-3">Phương thức thanh toán</h4>
                            <div class="d-block my-3">

                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Thẻ tín dụng/visa</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Thanh toán trực tiếp</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Tên trên thẻ</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Tên giống như trên thẻ(*)</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Số thẻ</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>

                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Tiếp tục thanh toán</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-flex justify-content-between align-items-center mb-0">
                            <span class="text-muted">Giỏ hàng của bạn</span>
                            <span class="badge badge-secondary badge-pill">3</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3"> 
                            <?php
                            $sum = 0;
                            foreach ($cart as $key => $value) {                                
                                $total = $value->amount*$value->PriceProduct;
                                $sum +=$total;
                                echo '<li class="list-group-item d-flex justify-content-between">';
                                echo '<div>';
                                echo '<h6 class="my-0">'.$value->NameProduct.'</h6>';
                                echo '<small class="text-muted">'.$value->amount.'</small>';
                                echo '</div>';   
                                echo '<span class="text-muted">'.number_format($total).'</span>'; 
                                echo '</li>';                       
                            }
                            ?>
                            <!-- <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <h6 class="my-0">Product name</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">$12</span>
                            </li>                      -->
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (VNĐ)</span>
                                <strong><?php echo number_format($sum) ?></strong>
                            </li>
                        </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
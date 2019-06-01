<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
   
       
              
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Địa chỉ giao hàng</h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="firstName">Họ và tên</label>
                                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid first name is required.
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username">Tên đăng nhập</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Your username is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email">Email <span class="text-muted">(Bắt buộc)</span></label>
                                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email address for shipping updates.
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address">Địa chỉ</label>
                                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                                    <div class="invalid-feedback">
                                                        Please enter your shipping address.
                                                    </div>
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">Tỉnh/Thành Phố</label>
                                                        <select class="custom-select d-block w-100" id="country" required>
                                                            <option value="">Choose...</option>
                                                            <option>United States</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid country.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="state">Quận</label>
                                                        <select class="custom-select d-block w-100" id="state" required>
                                                            <option value="">Choose...</option>
                                                            <option>California</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                          
                                                <hr class="mb-4">
                                                <h4 class="mt-3">Phương thức thanh toán</h4>
                                                <div class="d-block my-3">
                                                  
                                                    <div class="custom-control custom-radio">
                                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="debit">Thẻ tín dụng/visa</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="paypal">Thanh toán trực tiếp</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-name">Tên trên thẻ</label>
                                                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                        <small class="text-muted">Tên giống như trên thẻ(*)</small>
                                                        <div class="invalid-feedback">
                                                            Name on card is required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-number">Số thẻ</label>
                                                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
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
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div>
                                                        <h6 class="my-0">Product name</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$12</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div>
                                                        <h6 class="my-0">Second product</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$8</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <div>
                                                        <h6 class="my-0">Third item</h6>
                                                        <small class="text-muted">Brief description</small>
                                                    </div>
                                                    <span class="text-muted">$5</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between bg-light">
                                                    <div class="text-success">
                                                        <h6 class="my-0">Promo code</h6>
                                                        <small>EXAMPLECODE</small>
                                                    </div>
                                                    <span class="text-success">-$5</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Total (USD)</span>
                                                    <strong>$20</strong>
                                                </li>
                                            </ul>
                                           
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
               
     

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js-->
    <script src="assets/libs/js/main-js.js"></script>
</body>

 
</html>
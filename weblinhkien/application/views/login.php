
<div class="splash-container">
    <div class="card ">
        <div class="container">
            <h2>Modal Example</h2>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Sign In </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="splash-container">
                                <div class="card ">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                                        </form>
                                    </div>
                                    <div class="card-footer bg-white p-0  ">
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="#" class="footer-link">Create An Account</a></div>
                                        <div class="card-footer-item card-footer-item-bordered">
                                            <a href="#" class="footer-link">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<form action="<?php echo site_url('main/AddUser'); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input class="form-control form-control-lg" type="text" name="username" placeholder="Username">
    </div>
    <div class="form-group">
    <input class="form-control form-control-lg" type="text" name="password" placeholder="pass">
    </div>
    <div class="form-group">
        <label class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
</form>


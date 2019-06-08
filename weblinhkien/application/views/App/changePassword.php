<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Change Password</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form method="post" id="passwordForm" action="<?php echo base_url()."Service/d_password" ?>">
            <input style="visibility:hidden" name="email" type="email" value="<?php echo $email ?>">
                <div class="form-group">
                    <label for="inputPassword">Mật khẩu</label>
                    <input id="inputPassword" name="c_pass1" type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Nhập lại mật khẩu</label>
                    <input id="inputPassword" name="c_pass2" type="password" placeholder="Config Password" class="form-control">
                </div>
                <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
            </form>
        </div>
        <!--/col-sm-6-->
    </div>
    <!--/row-->
</div>
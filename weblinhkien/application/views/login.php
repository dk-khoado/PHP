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
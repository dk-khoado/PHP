<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Admin</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css" />
<script src="<?php echo base_url(); ?>assets/css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="" id="icon" alt="" />
    </div>

    <!-- Login Form -->
    <form method="post" action="<?php echo site_url('admin_login/login/Checklogin') ?>">
      <input type="text" required id="username" class="fadeIn second" name="username" placeholder="Username">
      <input type="password" required id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="	fadeIn fourth" value="Đăng nhập">
      
    </form>
    <b><?php echo $this->session->flashdata('error_login') ?></b>
    <!-- Remind Passowrd -->
    <div id="formFooter">     
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>
<html>
    <h3>Xin chào</h3>
    <p>bạn đã yêu cầu thay đổi mật khẩu của mình.</p>
    <a href="<?php echo base_url()."Service/Password?email=$email" ?>">Đúng òi!</a>
    <a href="<?php echo base_url()."Service/Password?denied=true&email=$email" ?>">Làm gì cóa!</a>
</html>
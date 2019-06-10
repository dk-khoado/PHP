<html>
    <h3>Xin Chào <?php echo $hello_name ?> !</h3>
    <p>yêu cầu trở thành thành viên của ban quản trị của bạn đã được phê duyệt</p>
    <p>bây giờ bạn cần click vào đường link bên dưới để có thể hoàn tất quá trình đăng ký.</p>
    <a href="<?php echo base_url()."api/finish/".$key ?>">Hoàn Tất</a>
    <br>
    <p>bạn phải dùng key <b><?php echo $keyuser ?></b></p>
    <p>để kích hoạt tài khoản</p>
</html>
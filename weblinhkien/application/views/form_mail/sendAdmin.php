<html>
    <h1>Yêu cầu trở thành ADMIN</h1>
<table>
    <tr>
        <th>Tài Khoản</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?php echo $data->USER ?></td>
        <td><?php echo $data->EMAIL ?></td>
    </tr>
</table>
<br>
<a href="<?php echo base_url()."api/check/".$key ?>">Chấp nhận</a>
<a style="margin-left: 100px" href="<?php echo base_url()."api/delete/".$key ?>">Từ chối</a>

<p>key admin dùng để kích hoạt tài khoản: <b><?php echo $keyadmin ?></b></p>
</html>
<html>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<body>
    <h2>Xin Chào </h2>
    <p>Gần đây bạn đã mua 1 vài sản phẩm trên trang <a href="linhkien9586.tk">linhkien9586.tk</a></p>
    <p>Chúng tôi xin gửi đến bạn hóa đơn mua hàng để tiện cho việc quản lý theo dõi đơn hàng</p>
    <h3>Mã đơn hàng <?php echo $id_order ?></h3>
    <table border="1">
        <thead>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>số lượng</th>
            <th>giá</th>
        </thead>
        <tbody>
            <?php
            $total =0;            
            foreach ($data as $key => $value) {
                echo "<tr>";
                echo "<td>".$value->ID_PRODUCT."</td>";
                echo "<td>".$value->NameProduct."</td>";
                echo "<td>".$value->amount."</td>";
                echo "<td>".$value->Price."</td>";
                echo "</tr>";
                $total +=$value->amount * $value->Price;
            }
            ?>
        </tbody>
        <tfoot>
            <td colspan="3">Tổng: </td>
            <td><?php echo $total ?></td>         
        </tfoot>
    </table>
</body>

</html>
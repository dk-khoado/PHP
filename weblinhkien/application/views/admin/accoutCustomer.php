<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title"><?php echo $header ?> </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- phần navbar -->
    <div class="col-12 ">
        <!--hiện chỉ số-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable({
                    "lengthChange": false,
                    "lengthMenu": 10
                });
            });
        </script>
        <table id="table" class="table table-striped table-bordered">
            <thead>
                <th>ID_User</th>
                <th>User Name</th>
                <th>EMAIL</th>
                <th>NAME</th>
                <th>type_login</th>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value->ID_User . "</td>";
                    echo "<td>" . $value->USER . "</td>";
                    echo "<td>" . $value->EMAIL . "</td>";
                    echo "<td>" . $value->NAME . "</td>";
                    echo "<td>" . $value->type_login . "</td>";
                    echo '<td></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table> 
        <!---->
    </div>
</div>
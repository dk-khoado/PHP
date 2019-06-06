<div class="row">
    <div class="col-3">
        <!-- <h4 class="bg-light">Danh Mục Sản Phẩm</h4> -->
        <div class="bg-light mt-1" style="height: 300px; overflow: auto;">
            <ul class="nav flex-column">
                <?php
                foreach ($type as $key => $value) {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="' . site_url("main/product_list/$value->ID_type/1") . '">' . $value->name_type . '</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col-9">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>assets/image/default_banner1.jpg" height="300px" width="100%" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/image/default_banner2.jpg" height="300px" width="100%" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/image/default_banner3.jpg" height="300px" width="100%" alt="New York">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>
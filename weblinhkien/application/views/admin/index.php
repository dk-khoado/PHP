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
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Tổng Doanh Thu</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1"><?php echo number_format($total)." VNĐ" ?></h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <!-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span> -->
                </div>
            </div>
            <div id="sparkline-revenue"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Tổng Đơn Hàng trong tháng</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1"><?php echo $don_hang?></h1>
                </div>
                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    <!-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span> -->
                </div>
            </div>
            <div id="sparkline-revenue2"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Đơn Hàng Đã Hoàn tất</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1"><?php echo $da_hoan_tat?></h1>
                </div>
                <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                    <!-- <span>N/A</span> -->
                </div>
            </div>
            <div id="sparkline-revenue3"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Avg. Revenue Per User</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">$28000</h1>
                </div>
                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                    <span>-2.00%</span>
                </div>
            </div>
            <div id="sparkline-revenue4"></div>
        </div>
    </div>
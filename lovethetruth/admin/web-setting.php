<?php
include "header.php";
include "nav.php";
?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Website Settings!</h2>
                    <p class="az-dashboard-text">Update All website Information in a single click</p>
                </div>
                <div class="az-content-header-right">
                    <div class="media">
                        <div class="media-body">
                            <label>Total Articles</label>
                            <h6>Oct 10, 2018</h6>
                        </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                        <div class="media-body">
                            <label>All Services</label>
                            <h6>Oct 23, 2018</h6>
                        </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                        <div class="media-body">
                            <label>All Inbox</label>
                            <h6>All Categories</h6>
                        </div><!-- media-body -->
                    </div><!-- media -->
                    <a href="article.php" class="btn btn-purple"><i class="fa fa-plus"></i> Create New Article</a>
                </div>
            </div><!-- az-dashboard-one-title -->
            <hr>
            <div class="az-dashboard-nav">
                <nav class="nav">
                    <a class="nav-link active" data-toggle="tab" href="#">Web settings</a>
                    <a class="nav-link" data-toggle="tab" href="#">Logo and Icons</a>
                    <a class="nav-link" data-toggle="tab" href="#">Contact Information</a>
                    <a class="nav-link" data-toggle="tab" href="#">Web Information</a>
                </nav>
            </div>

            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Website Information</h6>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <form method="post" class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="webname">Website Name</label>
                                        <input type="text" name="webname" class="form-control" value="<?php echo $web_row['webname'] ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="webname">Website Name</label>
                                        <input type="text" name="webname" class="form-control" value="<?php echo $web_row['webname'] ?>" required>
                                    </div>
                                </div>
                            </form>

                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                    <div class="row row-sm">
                        <div class="col-sm-6">
                            <div class="card card-dashboard-two">
                                <div class="card-header">
                                    <h6>33.50% <i class="icon ion-md-trending-up tx-success"></i> <small>18.02%</small></h6>
                                    <p>Bounce Rate</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div id="flotChart1" class="flot-chart"></div>
                                    </div><!-- chart-wrapper -->
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                            <div class="card card-dashboard-two">
                                <div class="card-header">
                                    <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                                    <p>Total Users</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div id="flotChart2" class="flot-chart"></div>
                                    </div><!-- chart-wrapper -->
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-12 mg-t-20">
                            <div class="card card-dashboard-three">
                                <div class="card-header">
                                    <p>All Sessions</p>
                                    <h6>16,869 <small class="tx-success"><i class="icon ion-md-arrow-up"></i> 2.87%</small></h6>
                                    <small>The total number of sessions within the date range. It is the period time a user is actively
                                        engaged with your website, page or app, etc.</small>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <div class="chart"><canvas id="chartBar5"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!--col -->
            </div><!-- row -->




        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
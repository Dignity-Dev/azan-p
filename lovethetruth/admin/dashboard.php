<?php
include "header.php";
include "nav.php";
?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Hi, welcome back!</h2>
                    <p class="az-dashboard-text">Your web dashboard hit up.</p>
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

            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                    <div class="card card-dashboard-one">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Website Audience Metrics</h6>
                                <p class="card-text">Audience to which the users belonged while on the current date range.</p>
                            </div>
                            <div class="btn-group">
                                <button class="btn active">Day</button>
                                <button class="btn">Week</button>
                                <button class="btn">Month</button>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="card-body-top">
                                <div>
                                    <label class="mg-b-0">Users</label>
                                    <h2>13,956</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Bounce Rate</label>
                                    <h2>33.50%</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Page Views</label>
                                    <h2>83,123</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Sessions</label>
                                    <h2>16,869</h2>
                                </div>
                            </div><!-- card-body-top -->
                            <div class="flot-chart-wrapper">
                                <div id="flotChart" class="flot-chart"></div>
                            </div><!-- flot-chart-wrapper -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                  
                </div><!--col -->
            </div><!-- row -->

     
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
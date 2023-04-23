<?php
include "header.php";
include "nav.php";
?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">All Inbox!</h2>
                    <p class="az-dashboard-text">Manage your Inbox, see who contact you</p>
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

            <!-- MAIN -->
            <div class="row row-sm mg-b-20">

                <div class="col-lg-10 offset-lg-1 mg-t-20 mg-lg-t-0">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">All Messages</h6>
                                <p class="card-text">Manage All Articles, Update and delete.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Subject</th>
                                            <th>Sender Name</th>
                                            <th>Sender Email</th>
                                            <th>Date Sent</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        $fetch = mysqli_query($con, "SELECT * FROM message order by m_date DESC");
                                        while ($act = mysqli_fetch_array($fetch)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $counter++ . '.'; ?></td>
                                                <td>
                                                    <?php 
                                                    if ($act['m_status'] == '1') {
                                                        ?>
                                                        <span class="badge rounded-pill bg-warning">New</span> <a href="read-message.php?message=<?php echo $act['message_id']; ?>" class="text-success" title="read Me"> <?php echo $act['m_title'];?> </a> 
                                                        <?php
                                                    }else{
                                                        ?>
                                                         <a href="read-message.php?message=<?php echo $act['message_id']; ?>" title="read Me"> <?php echo $act['m_title'];?> </a>
                                                   <?php }
                                                     ?>
                                                </td>
                                                <td><?php echo $act['m_name']; ?></td>
                                                <td><?php echo $act['m_email']; ?></td>
                                                <td><?php echo date("l, d F Y - H:i:s", strtotime($act['m_date'])) ; ?></td>
                                                <td>
                                                    
                                                    <a href="delete-message.php?message=<?php echo $act['message_id']; ?>" class="text-danger" title="delete Me"> <i class="fa fa-trash"> </i> </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div><!--col -->
            </div><!-- row -->


        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
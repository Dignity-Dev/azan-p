<?php
include "header.php";
include "nav.php";

$get_id = $_GET['message'];
$fetch = mysqli_query($con, "SELECT * FROM message WHERE message_id = '$get_id'");
$res = mysqli_fetch_array($fetch);

mysqli_query($con, "UPDATE message SET m_status = '0' WHERE message_id = '$get_id'");
?>
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Message From <?php echo $res['m_name']; ?></h2>
                    <p class="az-dashboard-text"><?php echo $res['m_title']; ?></p>
                </div>
                <div class="az-content-header-right">
                    
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
                                <h6 class="card-title">Messages</h6>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body bg-white">
                            <div class="row">
                                <h3>Subject: <?php echo $res['m_title']; ?></h3>
                                <div class="col-md-4 border p-3">
                                    <h4>Sender</h4>
                                    <p class="text-info"><b><?php echo $res['m_name']; ?></b></p>
                                </div>
                                <div class="col-md-4 border p-3">
                                    <h4>Email</h4>
                                    <p class="text-info"><b><a href="mailto:<?php echo $res['m_email']; ?>"></a> <?php echo $res['m_email']; ?></b></p>
                                </div>
                                <div class="col-md-4 border p-3">
                                    <h4>Phone No.</h4>
                                    <p class="text-info"><b>Call now: <a href="tel:<?php echo $res['m_phone']; ?>"><?php echo $res['m_phone']; ?></a></b></p>
                                </div>
                            </div>
                            <br>
                            <h3>Body of the Message</h3>
                            <?php echo $res['m_message']; ?>

                        </div>
                    </div>
                </div><!--col -->
            </div><!-- row -->


        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
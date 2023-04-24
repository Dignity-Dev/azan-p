<?php include("include/header.php");
$get_id = $_GET['article'];
$fetch = mysqli_query($con, "SELECT * FROM article WHERE article_slug='$get_id'");
$res = mysqli_fetch_array($fetch);


?>

<title> <?php echo $res['article_title']; ?> – <?php echo $web_row['webname']; ?></title>
<meta name="description" content="<?php echo $res['article_title']; ?>,<?php echo $web_row['webname']; ?>">
<meta name="keywords" content="<?php echo $res['article_title']; ?>,<?php echo $web_row['webname']; ?>">
</head>

<body>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <?php
        include("other-head.php");
        ?>
        <!-- Breadcrumb area -->
        <section class="cr-section breadcrumb-area" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="cr-breadcrumb text-center">
                            <h2 class="cr-breadcrumb__title"><?php echo $res['article_title']; ?></h2>
                            <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Article</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- //Breadcrumb area -->

        <!-- Page Conent -->
        <main class="page-content">

            <!-- Event Details Area -->
            <div class="event-details-area ptb--150 bg--white">
                <div class="container">
                    <div class="row">

                        <!-- Page Activitie -->
                        <div class="col-lg-8 col-xl-9">
                            <div class="activity-details">
                                <div class="activity-details__thumb">
                                    <img src="<?php echo 'images/activity/' . $res['article_image']; ?>" alt="<?php echo $res['article_title']; ?>">
                                </div>
                                <p>Posted on - <?php echo date("l d F, Y", strtotime($res['article_date']))  ?></p>
                                <h2 class="activity-details__title" title="<?php echo $res['article_title']; ?>"><?php echo $res['article_title']; ?></h2>

                                <div class="activity-details__content">
                                    <?php echo $res['article_content']; ?>

                                </div>


                            </div>
                        </div><!-- Page Activitie -->

                        <!-- Sidebar Widgets Area -->
                        <div class="col-lg-4 col-xl-3">
                            <!-- Sidebar Widgets -->
                            <div class="sidebar widgets">

                                <!-- Single Widget (Searchbox) -->
                                <!-- <div class="single-widget wgt-searchbox">
                                    <h4 class="widget-title">Search Event</h4>
                                    <form action="#">
                                        <input type="text" placeholder="Keywords here...">
                                        <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                    </form>
                                </div> -->
                                <!-- //Single Widget (Searchbox) -->

                                <!-- Single Widget (Categories) -->
                                <div class="single-widget wgt-categories">
                                    <h4 class="widget-title">All Article</h4>
                                    <ul>
                                        <?php
                                        $b = mysqli_query($con, "SELECT * FROM `article` WHERE article_status='1' ");
                                        while ($a_row = mysqli_fetch_array($b)) {
                                        ?>
                                            <li><a href="article-details.php?article=<?php echo $a_row['article_slug'] ?>"><?php echo $a_row['article_title']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div><!-- //Single Widget (Categories) -->

                            </div><!-- //Sidebar Widgets  -->
                        </div><!-- //Sidebar Widgets Area -->

                    </div>
                </div>
            </div><!-- //Event Details Area -->

        </main><!-- //Page Conent -->

        <?php include "include/footer.php"; ?>
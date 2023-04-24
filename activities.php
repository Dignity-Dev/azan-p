<?php include("include/header.php"); ?>

<title> Our activities – <?php echo $web_row['webname']; ?> </title>
<meta name="description" content=" Our activities – <?php echo $web_row['webname']; ?> ">
<meta name="keywords" content=" Our activities, What we do, <?php echo $web_row['webname']; ?> ">
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
                            <h2 class="cr-breadcrumb__title">Activities</h2>
                            <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- //Breadcrumb area -->
        <?php include 'translator.php'; ?>

        <!-- Page Conent -->
        <main class="page-content">

            <div class="events-grid ptb--150 bg--white">
                <div class="container">
                    <div class="activities">
                        <div class="row">
                            <?php
                            $a = mysqli_query($con, "SELECT * FROM `activities` WHERE a_status='1'");
                            if (mysqli_num_rows($a) < 1) {

                            ?>
                                <div class="alert alert-info">No Activities yet</div>
                                <?php } else {
                                $b = mysqli_query($con, "SELECT * FROM `activities` WHERE a_status='1'");
                                while ($a_row = mysqli_fetch_array($b)) {
                                ?>
                                    <!-- Single Activity -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <figure class="activity wow fadeInLeft">
                                            <div class="activity__thumb">
                                                <a href="this-activity.php?activity=<?php echo $a_row['a_slug'] ?>">
                                                    <img src="<?php echo 'images/activity/' . $a_row['a_thumbnail'] ?>" alt="<?php echo $web_row['webname'] ?> - <?php echo $a_row['a_title'] ?> image" style="max-height:300px; min-height:270px;">
                                                </a>
                                            </div>
                                            <figcaption class="activity__content text-center">
                                                <h3><a href="this-activity.php?activity=<?php echo $a_row['a_slug'] ?>"><?php echo $a_row['a_title'] ?></a></h3>
                                                <?php echo substr_replace($a_row['a_content'], "...", 100);  ?>
                                            </figcaption>
                                        </figure>
                                    </div><!-- //Single Activity -->
                            <?php }
                            } ?>
                        </div>
                    </div>

                </div>
            </div>

        </main><!-- //Page Conent -->


        <?php include("include/footer.php"); ?>
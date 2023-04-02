<?php include("include/header.php"); ?>

<title> About Us – <?php echo $web_row['webname']; ?> <?php echo $web_row['web_slug']; ?></title>
<meta name="description" content="">
<meta name="keywords" content="">
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
                            <h2 class="cr-breadcrumb__title">About us</h2>
                            <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- //Breadcrumb area -->

        <!-- Page Conent -->
        <main class="page-content">
            <?php
            include("file/about.php");
            ?>


            <!-- About Details Area -->
            <div class="cr-section about-details-area ptb--120 bg--pattern">
                <div class="container">
                    <div class="about-details">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 offset-0 offset-md-2 offset-lg-0">
                                <!-- About Details Thumb -->
                                <img src="<?php echo 'images/about/' . $web_row['about_picture']; ?>" alt="about details thumb">
                            </div><!-- //About Details Thumb -->
                            <div class="col-lg-7">
                                <!-- About Details Content -->
                                <div class="about-details__content">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-block">
                                                <h4 class="single-block__title">Our Mission</h4>
                                                <?php echo $web_row['mission']; ?>
                                            </div>
                                            <div class="single-block">
                                                <h4 class="single-block__title">Our Vision</h4>
                                                <?php echo $web_row['vision']; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-block">
                                                <h4 class="single-block__title">Our History</h4>
                                                <?php echo $web_row['history']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- //About Details Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- //About Details Area -->

            <!-- Activities area -->
            <section class="cr-section activities-area bg--white pt--120 pb--130 flower--left-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                            <div class="section-title text-center">
                                <h4>Our “Activities”</h4>
                                <h2>Here is our Activities</h2>
                               
                            </div>
                        </div>
                    </div>
                    <div class="activity-slider-active slider-arrow--style2">
                        <?php
                            $a = mysqli_query($con, "SELECT * FROM `activities` WHERE a_status='1'");
                            if (mysqli_num_rows($a) < 1) {

                            ?>
                                <div class="alert alert-info">No Activities yet</div>
                                <?php } else {
                                $b = mysqli_query($con, "SELECT * FROM `activities` WHERE a_status='1' ");
                                while ($a_row = mysqli_fetch_array($b)) {
                                ?>
                        <!-- Single Activity -->
                        <div class="activity-wrap">
                            <figure class="activity">
                                <div class="activity__thumb">
                                    <a href="this-activity.php?activity=<?php echo $a_row['a_slug'] ?>">
                                        <img src="<?php echo 'images/activity/' . $a_row['a_thumbnail'] ?>" alt="<?php echo $web_row['webname'] ?> - <?php echo $a_row['a_title'] ?> image">
                                    </a>
                                </div>
                                <figcaption class="activity__content text-center">
                                    <h3><a href="this-activity.php?activity=<?php echo $a_row['a_slug'] ?>"><?php echo $a_row['a_title'] ?></a></h3>
                                    <?php echo $a_row['a_description'] ?>

                                </figcaption>
                            </figure>
                        </div><!-- //Single Activity -->
                        <?php }}?>
                    </div>
                </div>
            </section><!-- //Activities area -->

    
        </main><!-- //Page Conent -->



        <?php include("include/footer.php"); ?>
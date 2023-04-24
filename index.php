<?php include("include/header.php"); ?>

<title> Homepage – <?php echo $web_row['webname']; ?></title>
<meta name="description" content="Homepage – <?php echo $web_row['webname']; ?>">
<meta name="keywords" content="Homepage, truth, preech, praise, islam, <?php echo $web_row['webname']; ?>">
</head>

<body>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <?php
        include("head.php");
        include("banner.php");
        ?>





        <!-- Page Conent -->
        <main class="page-content">

            <?php
            include("file/about.php");
            include("file/pillar.php");
            ?>
            <?php include 'translator.php'; ?>

            <!-- Activities area -->
            <section class="cr-section activities-area half--bg bg-image--1 pt--90 pb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                            <div class="section-title section-title--white text-center">
                                <h4>Our “Activities”</h4>
                                <h2>Here is our Activities</h2>
                            </div>
                        </div>
                    </div>
                    <div class="activities">
                        <div class="row">
                            <?php
                            $a = mysqli_query($con, "SELECT * FROM `activities` WHERE a_status='1'");
                            if (mysqli_num_rows($a) < 1) {

                            ?>
                                <div class="alert alert-info">No Activities yet</div>
                                <?php } else {
                                $b = mysqli_query($con, "SELECT * FROM `activities` WHERE a_status='1' LIMIT 3");
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
            </section><!-- //Activities area -->


            <!-- Article Area -->
            <section class="cr-section blog-area pt--90 pb--100 bg--white flower--right-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                            <div class="section-title text-center">
                                <h4>From Article</h4>
                                <h2>Latest Article Post</h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $b = mysqli_query($con, "SELECT * FROM `article` WHERE article_status='1'");
                        if (mysqli_num_rows($b) < 1) {

                        ?>
                            <div class="alert alert-info">No article available</div>
                            <?php } else {
                            $c = mysqli_query($con, "SELECT * FROM `article` WHERE article_status='1' LIMIT 4");
                            while ($b_row = mysqli_fetch_array($c)) {
                            ?>
                                <!-- Start Single Blog -->
                                <div class="col-lg-6 col-md-6 col-xl-3">
                                    <article class="blog wow fadeInUp">
                                        <div class="blog__thumb">
                                            <a href="article-details.php?article=<?php echo $b_row['article_slug'] ?>">
                                                <img src="<?php echo 'images/activity/' . $b_row['article_image'] ?>" alt="<?php echo $b_row['article_title'] ?>">
                                            </a>
                                        </div>
                                        <div class="blog__content">
                                            <div class="blog__content__meta">
                                                <p>Posted on - <?php echo date("l d F, Y", strtotime($b_row['article_date']))  ?></p>
                                            </div>
                                            <h4 class="blog-title"><a href="article-details.php?article=<?php echo $b_row['article_slug'] ?>"> <?php echo $b_row['article_title'] ?> </a></h4>
                                            <?php echo substr_replace($b_row['article_content'], "...", 200); ?>
                                            <br><a href="article-details.php?article=<?php echo $b_row['article_slug'] ?>" class="cr-readmore">Read More</a>
                                        </div>
                                    </article>
                                </div><!-- //Start Single Blog -->

                        <?php }
                        } ?>
                    </div>
                </div>
            </section><!-- //Blog Area -->


            <!-- Salat times area -->
            <section class="cr-section salat-times-area bg--pattern bg--pattern zig-zag--top zig-zag--bottom">
                <div class="row no-gutters salat-times-wrap align-items-center">
                    <div class="col-lg-12 col-xl-5">
                        <div class="salat-times d-flex align-items-center justify-content-center">
                            <div class="salat-times__inner text-center">
                                <h2>Time of Salat</h2>
                                <h4>Prayer Times</h4>
                                <div class="salat-times__boxes d-flex flex-sm-wrap flex-wrap justify-content-center flex-md-nowrap">
                                    <div class="salat-times__box">
                                        <h4>Fajr</h4>
                                        <span>[{timeCalc.timeDawn}]</span>
                                    </div>
                                    <div class="salat-times__box">
                                        <h4>Dhuhr</h4>
                                        <span>[{timeCalc.timeZuhr}]</span>
                                    </div>
                                    <div class="salat-times__box">
                                        <h4>Asr</h4>
                                        <span>[{timeCalc.timeAsr}]</span>
                                    </div>
                                    <div class="salat-times__box">
                                        <h4>Maghrib</h4>
                                        <span><span class="time-sunset"></span></span>
                                    </div>
                                    <div class="salat-times__box">
                                        <h4>Isha</h4>
                                        <span>[{timeCalc.timeIsha}]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-7">
                        <div class="donation-wantend text-center ptb--130">
                            <h2>Solat: Bountiful Rewards</h2>
                            <h5> how Solat was made compulsory</h5>
                            <p>The Prophet s.a.w. had travelled on a particular night in a journey called Isra’. He then ascended to the seven heavens and beyond to meet Allah s.w.t. where the process of decreeing Solat took place on that very same night. This was the Mi’raj.</p>
                            <p>Initially, Muslims were supposed to pray 50 prayers (Solat) every day if the Prophet s.a.w. had not gone out of his way to lower the number to five that night, and he did so with careful consideration of his people - Us.</p>
                            <p>Allah s.w.t. says in a Hadith Qudsi:
                                <br>
                                <br>
                                مَن جَاءَ بالحَسَنَةِ فَلَهُ عَشْرُ أَمْثَالِهَا وَأَزِيدُ
                                <br>
                                “Whoever does one good deed will have (the reward of) ten like it and more”
                                <br>
                                (Sahih Muslim)
                                <br>
                                <br>
                                In other words, when we pray the five daily prayers, the rewards are equal to that of 50 prayers. That, as amazing as it is, is not what Solat is entirely all about.
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- //Salat times area -->



        </main><!-- //Page Conent -->







        <?php include("include/footer.php"); ?>
<?php include("include/header.php"); ?>

<title> Homepage – <?php echo $web_row['webname']; ?> <?php echo $web_row['web_slug']; ?></title>
<meta name="description" content="">
<meta name="keywords" content="">
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

            <!-- About Area -->
            <section class="cr-section about-area ptb--150 bg--white flower--left-top flower--right-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h3><strong><?php echo $web_row['webname']; ?></strong> <?php echo $web_row['web_slug']; ?></h3>
                                <h2><?php echo $web_row['side_head']; ?></h2>
                                <?php echo $web_row['side_text']; ?>
                                <div class="about-content__bottom d-flex align-items-center flex-wrap flex-sm-nowrap">
                                    <div class="about-content__bottom__left">
                                        <p>Fell free to connect with us</p>
                                        <h3 class="body--font"><a href="tel:<?php echo $web_row['web_phone_1']; ?>"><?php echo $web_row['web_phone_1']; ?></a></h3>
                                    </div>
                                    <span>or</span>
                                    <div class="about-content__bottom__right">
                                        <a href="about-us.php" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>Read
                                                More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-images clearfix">
                                <img class="wow fadeInUp" src="images/about/large-1.jpg" alt="about image">
                                <img class="wow fadeInUp" src="images/about/small-1.jpg" alt="smalal image">
                                <img class="wow fadeInUp" data-wow-delay="0.1s" src="images/about/small-2.jpg" alt="smalal image">
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- //About Area -->

            <!-- Pillar Of Islam -->
            <section class="cr-section islams-pillar-area ptb--120 bg--pattern zig-zag--top zig-zag--bottom">
                <div class="islams-pillars d-flex justify-content-between justify-content-lg-center align-items-center flex-wrap flex-xl-nowrap flex-xx-nowrap flex-sp-nowrap">
                    <div class="islams-pillars__thumb text-lg-center wow fadeInLeft">
                        <img src="images/pillars/pillars-thumb.png" alt="pillars thumb">
                    </div>
                    <div class="islams-pillars__content">
                        <h2>Take the proper knowledge about 5 pillers of Islam</h2>
                        <p><span>Piller of islam</span> is the know how to rsue pleasure rationally encounter equ</p>
                    </div>
                    <div class="pillars d-flex justify-content-lg-between flex-md-wrap justify-content-md-center justify-content-sm-center justify-content-center">
                        <div class="pillar__single wow fadeInRight" data-wow-delay="0s">
                            <div class="pillar__single__inner">
                                <img class="pillar__single__icon" src="images/pillars/pillar-icon-1.png" alt="pillar 1">
                                <h3>Kalima</h3>
                            </div>
                        </div>
                        <div class="pillar__single wow fadeInRight" data-wow-delay="0.1s">
                            <div class="pillar__single__inner">
                                <img class="pillar__single__icon" src="images/pillars/pillar-icon-2.png" alt="pillar 2">
                                <h3>Salat</h3>
                            </div>
                        </div>
                        <div class="pillar__single wow fadeInRight" data-wow-delay="0.2s">
                            <div class="pillar__single__inner">
                                <img class="pillar__single__icon" src="images/pillars/pillar-icon-3.png" alt="pillar 3">
                                <h3>Zakat</h3>
                            </div>
                        </div>
                        <div class="pillar__single wow fadeInRight" data-wow-delay="0.3s">
                            <div class="pillar__single__inner">
                                <img class="pillar__single__icon" src="images/pillars/pillar-icon-4.png" alt="pillar 4">
                                <h3>Siam</h3>
                            </div>
                        </div>
                        <div class="pillar__single wow fadeInRight" data-wow-delay="0.4s">
                            <div class="pillar__single__inner">
                                <img class="pillar__single__icon" src="images/pillars/pillar-icon-5.png" alt="pillar 5">
                                <h3>HAJJ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- //Pillar Of Islam -->

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
                                                    <img src="<?php echo 'images/activity/' . $a_row['a_thumbnail'] ?>" alt="<?php echo $web_row['webname'] ?> - <?php echo $a_row['a_title'] ?> image">
                                                </a>
                                            </div>
                                            <figcaption class="activity__content text-center">
                                                <h3><a href="this-activity.php?activity=<?php echo $a_row['a_slug'] ?>"><?php echo $a_row['a_title'] ?></a></h3>
                                                <?php echo $a_row['a_description'] ?>
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
                                <p>Islam is the know how to pursue pleasure rationally encounter consequences that are
                                    extremely painful again is there anyone who loves or pursues or desires to obtain
                                    pain of itself</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Start Single Blog -->
                        <div class="col-lg-6 col-md-6 col-xl-3">
                            <article class="blog wow fadeInUp">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="images/blog/1.jpg" alt="single blog thumb">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__content__meta">
                                        <p>December 20, 2022 - <a href="blogs.html">Afser</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-details.html">Islam is the only one way for
                                            peace </a></h4>
                                    <p>Islam is the know how to pursuesure nally encounter consequences extremely </p>
                                    <a href="blog-details.html" class="cr-readmore">Read</a>
                                </div>
                            </article>
                        </div><!-- //Start Single Blog -->

                        <!-- Start Single Blog -->
                        <div class="col-lg-6 col-md-6 col-xl-3">
                            <article class="blog wow fadeInUp">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="images/blog/2.jpg" alt="single blog thumb">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__content__meta">
                                        <p>December 18, 2022 - <a href="blogs.html">Julfiqar</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-details.html">Salat can help us to move closer
                                            to Allah </a></h4>
                                    <p>Islam is the know how to pursuesure nally encounter consequences extremely </p>
                                    <a href="blog-details.html" class="cr-readmore">Read</a>
                                </div>
                            </article>
                        </div><!-- //Start Single Blog -->

                        <!-- Start Single Blog -->
                        <div class="col-lg-6 col-md-6 col-xl-3">
                            <article class="blog wow fadeInUp">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="images/blog/3.jpg" alt="single blog thumb">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__content__meta">
                                        <p>December 15, 2022 - <a href="blogs.html">Iftekhar</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-details.html">Ramadan teach us how to realize
                                            fasting</a></h4>
                                    <p>Islam is the know how to pursuesure nally encounter consequences extremely </p>
                                    <a href="blog-details.html" class="cr-readmore">Read</a>
                                </div>
                            </article>
                        </div><!-- //Start Single Blog -->

                        <!-- Start Single Blog -->
                        <div class="col-lg-6 col-md-6 col-xl-3">
                            <article class="blog wow fadeInUp">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="images/blog/4.jpg" alt="single blog thumb">
                                    </a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__content__meta">
                                        <p>December 12, 2022 - <a href="blogs.html">Momen</a></p>
                                    </div>
                                    <h4 class="blog-title"><a href="blog-details.html">Learn about Islam, It is very
                                            simple & realistic</a></h4>
                                    <p>Islam is the know how to pursuesure nally encounter consequences extremely </p>
                                    <a href="blog-details.html" class="cr-readmore">Read</a>
                                </div>
                            </article>
                        </div><!-- //Start Single Blog -->

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
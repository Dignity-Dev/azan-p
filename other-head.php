<!-- Header -->
<header id="header-area" class="header-area sticky--header">
    <div class="header header--style-2">
        <!-- Header Top Area <-->
        <div class="header__top bg--white">
            <div class="container">
                <div class="header__top__inner">
                    <div class="logo image--logo hidden-md hidden-sm hidden-xs">
                        <a href="index.php"><img src="<?php echo "images/" . $web_row['web_logo_color']; ?>" alt="<?php echo $web_row['webname']; ?> logo"></a>
                    </div>
                    <div class="header__right">
                        <div class="header__right__top d-flex justify-content-end align-items-center flex-wrap flex-sm-nowrap">
                            <ul class="header__right__times d-flex justify-content-end">
                                <li>
                                    <p><i class="icofont icofont-full-sunny"></i>SUNRISE : <span class="time-sunrise"></span></p>
                                </li>
                                <li>
                                    <p><i class="icofont icofont-full-night"></i>SUNSET : <span class="time-sunset"></span></p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //Header Top Area -->

        <!-- Header Bottom Area -->
        <div class="header__bottom bg--theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Main naviagtion -->
                        <nav class="menu">
                            <ul class="justify-content-center">
                                <li><a href="index.php">HOMEPAGE</a></li>
                                <li><a href="article.php">ARTICLE</a></li>
                                <li><a href="activities.php">OUR ACTIVITIES</a></li>
                                <li><a href="QA.php">QUESTION & ANSWER</a></li>
                                <li><a href="about-us.php">ABOUT</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav><!-- //Main naviagtion -->

                        <!-- Mobile Menu -->
                        <div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp">
                            <a class="mobile-logo" href="index.php"><img src="<?php echo "images/" . $web_row['web_logo_color']; ?>" alt="<?php echo $web_row['webname']; ?> logo"></a>
                        </div><!-- //Mobile Menu -->

                    </div>
                </div>
            </div>

        </div>
        <!-- //Header Bottom Area -->



    </div>
</header><!-- //Header -->
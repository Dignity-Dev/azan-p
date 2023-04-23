<!-- Header -->
<header id="header-area" class="header-area fixed--header sticky--header">
    <div class="container">
        <div class="header header--style-1">
            <div class="logo image--logo hidden-md hidden-sm hidden-xs">
                <a href="index-2.html"><img src="<?php echo "images/" . $web_row['web_logo_white']; ?>" alt="<?php echo $web_row['webname']; ?> logo"></a>
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
                <div class="header__right__bottom">

                    <!-- Main naviagtion -->
                    <nav class="menu">
                        <ul class="justify-content-end">

                            <li><a href="index.php">HOMEPAGE</a></li>
                            <li><a href="article.php">ARTICLE</a></li>
                            <li><a href="activities.php">OUR ACTIVITIES</a></li>
                            <li><a href="about-us.php">ABOUT</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav><!-- //Main naviagtion -->

                </div>
            </div>
            <div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp">
                <a class="mobile-logo" href="index.php"><img src="<?php echo "images/" . $web_row['web_logo_white']; ?>" alt="logo"></a>
            </div>
        </div>
    </div>
</header><!-- //Header -->

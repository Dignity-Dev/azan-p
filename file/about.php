<!-- About Area -->
<section class="cr-section about-area ptb--150 bg--white flower--left-top flower--right-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h3><strong><?php echo $web_row['webname']; ?></strong> </h3>
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
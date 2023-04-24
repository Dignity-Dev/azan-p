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
                <h1><strong>Question and Answers</strong></h1>
                <h3>Explore your mind</h3>

                <div id="accordion">
                    <?php
                    $counter = 1;
                    $fetch = mysqli_query($con, "SELECT * FROM qa LIMIT 4");
                    while ($res = mysqli_fetch_array($fetch)) {
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                    <?php echo $res['qa_title']; ?>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                <div class="card-body">
                                    <?php echo $res['qa_contect']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <br>
                <a href="QA.php" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"> All Question and Answers</a>
            </div>
        </div>
    </div>
</section><!-- //About Area -->
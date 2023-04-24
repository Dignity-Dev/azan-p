<?php include("include/header.php"); ?>

<title> Articles – <?php echo $web_row['webname']; ?></title>
<meta name="description" content=" Articles – <?php echo $web_row['webname']; ?>">
<meta name="keywords" content=" Articles, Knowledge, <?php echo $web_row['webname']; ?>">
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
                            <h2 class="cr-breadcrumb__title">Articles</h2>
                            <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Articles</li>
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

            <div class="events-grid ptb--100 bg--white">
                <div class="container">
                    <div class="activities">
                        <div class="row">
                            <?php
                            $b = mysqli_query($con, "SELECT * FROM `article` WHERE article_status='1'");
                            if (mysqli_num_rows($b) < 1) {

                            ?>
                                <div class="alert alert-info">No article available</div>
                                <?php } else {
                                $c = mysqli_query($con, "SELECT * FROM `article` WHERE article_status='1' ORDER BY article_date ASC ");
                                while ($b_row = mysqli_fetch_array($c)) {
                                ?>
                                    <!-- Start Single Blog -->
                                    <div class="col-lg-6 col-md-6 col-xl-3">
                                        <article class="blog wow fadeInUp">
                                            <div class="blog__thumb">
                                                <a href="article-details.php?article=<?php echo $b_row['article_slug'] ?>">
                                                    <img src="<?php echo 'images/activity/' . $b_row['article_image'] ?>" alt="s<?php echo $b_row['article_title'] ?>">
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

                </div>
            </div>

        </main><!-- //Page Conent -->






        <?php include "include/footer.php"; ?>
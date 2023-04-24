<?php include("include/header.php"); ?>

<title> Questions and Answers – <?php echo $web_row['webname']; ?> </title>
<meta name="description" content="Questions and Answers – <?php echo $web_row['webname']; ?> ">
<meta name="keywords" content="Questions and Answers – <?php echo $web_row['webname']; ?> ">
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
                            <h2 class="cr-breadcrumb__title">Questions and Answers</h2>
                            <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Q & A</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- //Breadcrumb area -->
<?php include 'translator.php';?>
        <!-- Page Conent -->
        <main class="page-content">
            <!-- About Area -->
            <section class="cr-section about-area ptb--150 bg--white flower--left-top flower--right-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="text-center">

                            <h1><strong>Question and Answers</strong></h1>
                            <h3>Explore your mind</h3>
                        </div>

                        <?php
                        $counter = 1;
                        $fetch = mysqli_query($con, "SELECT * FROM qa");
                        while ($res = mysqli_fetch_array($fetch)) {
                        ?>
                            <div class="card mb-5">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3><?php echo $res['qa_title']; ?></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php echo $res['qa_contect']; ?>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
    </div>
    </section><!-- //About Area -->



    </main><!-- //Page Conent -->



    <?php include("include/footer.php"); ?>
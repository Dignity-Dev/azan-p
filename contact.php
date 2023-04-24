<?php include("include/header.php"); ?>

<title> Contact Us – <?php echo $web_row['webname']; ?> </title>
<meta name="description" content="Contact Us – <?php echo $web_row['webname']; ?> ">
<meta name="keywords" content="Contact Us – <?php echo $web_row['webname']; ?> ">
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
                            <h2 class="cr-breadcrumb__title">Contact us</h2>
                            <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- //Breadcrumb area -->
        <?php include 'translator.php'; ?>

        <!-- Page Conent -->
        <div class="page-content">

            <!-- Contact Page Area -->
            <div class="cr-section contact-page-area ptb--150 bg--white">
                <!-- Contact Page Details -->
                <aside class="contact-page-details">
                    <div class="container">
                        <div class="row">
                            <!-- Contact Sidebar -->
                            <div class="col-lg-4">
                                <div class="contact-sidebar">
                                    <div class="small-title">
                                        <h4>Get in touch</h4>
                                        <p>Contact us for any information or to make any enquiries. </p>
                                    </div>
                                    <ul class="contact-sidebar__body">
                                        <li class="ct__address">
                                            <p><?php echo $web_row['office_address'] ?></p>
                                        </li>
                                        <li class="ct__phone">
                                            <p><a href="tel:><?php echo $web_row['web_phone_1'] ?>"><?php echo $web_row['web_phone_1'] ?></a></p>
                                            <p><a href="tel:><?php echo $web_row['web_phone_2'] ?>"><?php echo $web_row['web_phone_2'] ?></a></p>
                                        </li>
                                        <li class="ct__mail">
                                            <p><a href="mailto:><?php echo $web_row['web_email'] ?>"><?php echo $web_row['web_email'] ?></a></p>
                                        </li>
                                    </ul>
                                    <div class="contact-sidebar__social">
                                        <h5>You can also connect us here...</h5>
                                        <div class="social-icons social-icons--rounded social-icons--medium">
                                            <ul>
                                                <li class="facebook"><a href="><?php echo $web_row['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="><?php echo $web_row['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                                                <li class="instagram"><a href="><?php echo $web_row['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                                                <li class="whatsapp"><a href="><?php echo $web_row['whatsapp'] ?>"><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- //Contact Sidebar -->
                            <!-- Contact Map -->
                            <div class="col-lg-8">

                                <div class="contact__form">
                                    <div class="small-title">
                                        <h4>Send us a message</h4>
                                        <p>Fill correct information</p>
                                    </div>
                                    <div class="comment-box">
                                        <!-- server info -->
                                        <?php
                                        if (isset($_POST['send'])) {
                                            $con_name = $_POST['con_name'];
                                            $con_email = $_POST['con_email'];
                                            $con_phone = $_POST['con_phone'];
                                            $con_subject = $_POST['con_subject'];
                                            $con_message = $_POST['con_message'];
                                            $date = date("Y/m/d H:i:s");
                                            $status = "1";

                                            $q = mysqli_query($con, "INSERT INTO `message`(`m_name`, `m_email`, `m_phone`, `m_title`, `m_message`, `m_date`, `m_status`) VALUES ('$con_name','$con_email','$con_phone','$con_subject','$con_message','$date','$status')");
                                            if ($q) {
                                                echo "<script>window.alert('Sent successfully');window.location='contact.php';</script>";
                                            } else {
                                                echo "<script>window.alert('Something went wrong');window.location='contact.php';</script>";
                                            }
                                        }

                                        ?>
                                        <form id="contact-form" method="post" autocomplete="off">
                                            <div class="single-input">
                                                <input type="text" name="con_name" placeholder="Enter your name">
                                            </div>
                                            <div class="single-input">
                                                <input type="email" name="con_email" placeholder="Your email">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" name="con_phone" placeholder="Phone">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" name="con_subject" placeholder="Subject">
                                            </div>
                                            <div class="single-input textarea">
                                                <textarea cols="3" name="con_message" rows="3" placeholder="Write your message here"></textarea>
                                            </div>
                                            <div class="single-input">
                                                <button type="submit" name="send" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--icon"><span>send</span></button>
                                            </div>
                                        </form>
                                        <p class="form-messege mt-3 mb-0"></p>
                                    </div>
                                </div>

                            </div><!-- //Contact Map -->
                        </div>
                    </div>
                </aside><!-- //Contact Page Details -->


            </div><!-- //Contact Page Area -->

        </div><!-- //Page Conent -->






        <?php include("include/footer.php"); ?>
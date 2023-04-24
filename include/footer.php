<!-- Footer -->
<footer id="footer" class="footer-area fixed--footer">

    <!-- Footer Widgets -->
    <div class="footer__widgets ptb--100 bg--dark--light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="widgets footer--widgets d-flex justify-content-between flex-md-wrap flex-wrap flex-lg-nowrap">

                        <!-- Single Widgets -->
                        <div class="single-widget widget--details">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="<?php echo "images/" . $web_row['web_logo_white']; ?>" alt="<?php echo $web_row['webname']; ?> logo">
                                </a>
                            </div>
                            <p><?php echo $web_row['footer_content']; ?></p>
                            <div class="social-icons social-icons--rounded">
                                <ul>
                                    <li class="facebook"><a href="<?php echo $web_row['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="<?php echo $web_row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li class="instagram"><a href="<?php echo $web_row['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li class="whatsapp"><a href="<?php echo $web_row['whatsapp']; ?>"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- //Single Widgets -->

                        <!-- Single Widgets -->
                        <div class="single-widget widget--support">
                            <h4 class="widget-title">Quick Link</h4>
                            <ul>
                                <li><a href="index.php">HomePage</a></li>
                                <li><a href="article.php">Article Center</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="activities.php">Our Activities</a></li>
                                <li><a href="QA.php">Question & Answer</a></li>
                                
                            </ul>
                        </div><!-- //Single Widgets -->

                        <!-- Single Widgets -->
                        <div class="single-widget widget--contact">
                            <h4 class="widget-title">Contact</h4>
                            <ul>
                                <li>
                                    <?php echo $web_row['office_address']; ?>
                                </li>
                                <li>
                                    <a href="tel:<?php echo $web_row['web_phone_1']; ?>"><?php echo $web_row['web_phone_1']; ?></a>
                                    <a href="tel:<?php echo $web_row['web_phone_2']; ?>"><?php echo $web_row['web_phone_2']; ?></a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo $web_row['web_email']; ?>"><?php echo $web_row['web_email']; ?></a>

                                </li>
                            </ul>
                        </div><!-- //Single Widgets -->

                        <div class="widget-row">

                            <!-- Single Widget -->
                            <div class="single-widget widget--newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <form action="#">
                                    <input type="text" placeholder="Email here">
                                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div><!-- //Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- //Footer Widgets -->

    <!-- Footer Copyright -->
    <div class="footer__copyright bg--dark ptb--20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p>Copyright &copy; <?php echo $web_row['webname']; ?>, All rights Reserved, <?php date("Y"); ?> Developed by <a href="http://dignitytechng.com" target="_blank">Dignity Technology</a> </p>
                </div>
             
            </div>
        </div>
    </div><!-- //Footer Copyright -->

</footer><!-- //Footer -->

</div><!-- //Main wrapper -->


<!-- JS Files -->
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/PrayTimes.js"></script>
<script src="js/active.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>
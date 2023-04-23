 <div class="az-header">
     <div class="container">
         <div class="az-header-left">
             <a href="index.php" class="az-logo"><span></span> <?php echo $web_row['webname']; ?> </a>
             <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
         </div><!-- az-header-left -->
         <div class="az-header-menu">
             <div class="az-header-menu-header">
                 <a href="index.php" class="az-logo"><span></span> <?php echo $web_row['webname']; ?> </a>
                 <a href="" class="close">&times;</a>
             </div><!-- az-header-menu-header -->
             <ul class="nav">
                 <li class="nav-item show">
                     <a href="dashboard.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
                 </li>

                 <li class="nav-item">
                     <a href="article.php" class="nav-link"><i class="typcn typcn-book"></i> Articles</a>
                 </li>
                 <li class="nav-item">
                     <a href="activities.php" class="nav-link"><i class="typcn typcn-flash-outline"></i> Activities</a>
                 </li>
                 <li class="nav-item">
                     <a href="contact.php" class="nav-link"><i class="typcn typcn-message"></i> Messages</a>
                 </li>
                 <li class="nav-item">
                     <a href="web-setting.php" class="nav-link"><i class="typcn typcn-cog-outline"></i> Web Settings</a>
                 </li>
             </ul>
         </div><!-- az-header-menu -->
         <div class="az-header-right">
             <div class="dropdown az-profile-menu">
                 <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
                 <div class="dropdown-menu">
                     <div class="az-dropdown-header d-sm-none">
                         <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                     </div>
                     <div class="az-header-profile">
                         <div class="az-img-user">
                             <img src="../img/faces/face1.jpg" alt="">
                         </div><!-- az-img-user -->
                         <h6><?php echo $row['username'] ?></h6>
                         <span>Super Administrator</span>
                     </div><!-- az-header-profile -->

                     <a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                     <a href="web-setting.php" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Website Settings</a>
                     <a href="logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Log Out</a>
                 </div><!-- dropdown-menu -->
             </div>
         </div><!-- az-header-right -->
     </div><!-- container -->
 </div><!-- az-header -->
 <div id="google_translate_element"></div>
 <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <script>
     function googleTranslateElementInit() {
         new google.translate.TranslateElement({
                 pageLanguage: 'en'
             },
             'google_translate_element'
         );
     }
 </script>
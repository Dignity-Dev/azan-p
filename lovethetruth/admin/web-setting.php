<?php
include "header.php";
include "nav.php";
include "pilot.php";
?>
<!-- translator -->

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Website Settings!</h2>
                    <p class="az-dashboard-text">Update All website Information in a single click</p>
                </div>
                <div class="az-content-header-right">
                    
                    <a href="article.php" class="btn btn-purple"><i class="fa fa-plus"></i> Create New Article</a>
                </div>
            </div><!-- az-dashboard-one-title -->
            <hr>
            <div class="az-dashboard-nav">
                <nav class="nav">
                    <a class="nav-link active" data-toggle="tab" href="#">Web settings</a>
                    <a class="nav-link" data-toggle="tab" href="#">Logo and Icons</a>
                    <a class="nav-link" data-toggle="tab" href="#">Contact Information</a>
                    <a class="nav-link" data-toggle="tab" href="#">Web Information</a>
                </nav>
            </div>

            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Website Information</h6>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <form method="post" class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="webname">Website Name</label>
                                        <input type="text" name="webname" class="form-control" value="<?php echo $web_row['webname'] ?>" required>
                                        <label for="web_slug">Website Keyword</label>
                                        <input type="text" name="web_slug" class="form-control" value="<?php echo $web_row['web_slug'] ?>" required>
                                        <label for="side_head">Homepage Second About Heading</label>
                                        <input type="text" name="side_head" class="form-control" value="<?php echo $web_row['side_head'] ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hero_head">Homepage Hero Big Text</label>
                                        <textarea name="hero_head" class="form-control" required><?php echo $web_row['hero_head'] ?></textarea>
                                        <label for="hero_text">Website Paragraph text</label>
                                        <textarea rows="4" name="hero_text" class="form-control" required><?php echo $web_row['hero_text'] ?></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="side_text">Homepage Second About Paragraph</label>
                                        <textarea name="side_text" class="form-control" id="editor" required><?php echo $web_row['side_text'] ?></textarea>
                                    </div>
                                    <div class="col-md-12 pt-2">
                                        <button type="submit" name="web" class="btn btn-primary"><i class="fa fa-sync"></i> Update Information</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- card-body -->
                    </div><!-- card -->

                    <div class="mg-t-20">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">About Informations</div>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <label for="mission">Our Mission</label>
                                    <textarea name="mission" class="form-control" required><?php echo $web_row['mission'] ?></textarea>
                                    <label for="vision">Our Vision</label>
                                    <textarea name="vision" class="form-control" required><?php echo $web_row['vision'] ?></textarea>
                                    <label for="history">Our History</label>
                                    <textarea name="history" class="form-control" required><?php echo $web_row['history'] ?></textarea>
                                    <label for="footer_content">Footer Contents</label>
                                    <textarea name="footer_content" class="form-control" required><?php echo $web_row['footer_content'] ?></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="about"><i class="fa fa-sync"></i> Update Contact Information</button>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                    <div class="row row-sm">
                        <div class="col-sm-6">
                            <div class="card ">
                                <div class="card-header">
                                    <h6>Hero Banner</h6>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post">
                                        <label for="Homepage_hero">Change Homepage Banner</label>
                                        <input type="file" name="hero_banner" class="form-control" required>
                                        <br>
                                        <button type="submit" name="hb" class="btn btn-primary"> Change</button>
                                    </form>

                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-6">
                            <div class="card ">
                                <div class="card-header">
                                    <h6>Change Website Icon</h6>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post">
                                        <label for="web_icon"> Website Icon</label>
                                        <input type="file" name="web_icon" class="form-control" required>
                                        <br>
                                        <button type="submit" name="wi" class="btn btn-primary"> Change</button>
                                    </form>
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->

                        <div class="col-sm-6 mg-t-20">
                            <div class="card ">
                                <div class="card-header">
                                    <h6>Website Logo Black</h6>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post">
                                        <label for="web_logo_black">Black Website Logo</label>
                                        <input type="file" name="web_logo_white" class="form-control" required>
                                        <br>
                                        <button type="submit" name="wlw" class="btn btn-primary"> Change</button>
                                    </form>
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20">
                            <div class="card ">
                                <div class="card-header">
                                    <h6>Website Logo Color</h6>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post">
                                        <label for="web_logo_color">Color Website Logo</label>
                                        <input type="file" name="web_logo_color" class="form-control" required>
                                        <br>
                                        <button type="submit" name="wlc" class="btn btn-primary"> Change</button>
                                    </form>
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->

                        <div class="col-sm-12 mg-t-20">
                            <div class="card ">
                                <div class="card-header">
                                    <h6>Change About Image</h6>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <form enctype="multipart/form-data" method="post">
                                        <label for="about_picture">About Picture</label>
                                        <input type="file" name="about_picture" class="form-control" required>
                                        <br>
                                        <button type="submit" name="ap" class="btn btn-primary"> Change</button>
                                    </form>
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->


                        <div class="col-sm-12 mg-t-20 mg-b-20">
                            <div class="card">
                                <div class="card-header">
                                    <p>Contact Information</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <form method="post">
                                        <label for="web_email">Website Email</label>
                                        <input type="text" name="web_email" class="form-control" value="<?php echo $web_row['web_email'] ?>" required>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="web_phone_1">Phone No.</label>
                                                <input type="text" name="web_phone_1" class="form-control" value="<?php echo $web_row['web_phone_1'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="web_phone_2">Tel. Number</label>
                                                <input type="text" name="web_phone_2" class="form-control" value="<?php echo $web_row['web_phone_2'] ?>">
                                            </div>
                                        </div>


                                        <label for="office_address">Office Address</label>
                                        <input type="text" name="office_address" class="form-control" value="<?php echo $web_row['office_address'] ?>">
                                        <br>
                                        <p class="border-bottom"><b>Social Media Handles</b></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="facebook">Facebook</label>
                                                <input type="text" name="facebook" class="form-control" value="<?php echo $web_row['facebook'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="twitter">Twitter</label>
                                                <input type="text" name="twitter" class="form-control" value="<?php echo $web_row['twitter'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="instagram">Instagram</label>
                                                <input type="text" name="instagram" class="form-control" value="<?php echo $web_row['instagram'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="whatsapp">WhatsApp</label>
                                                <input type="text" name="whatsapp" class="form-control" value="<?php echo $web_row['whatsapp'] ?>">
                                            </div>
                                        </div>


                                        <br>
                                        <button type="submit" name="contact" class="btn btn-primary"><i class="fa fa-sync"></i> Update Contact Information</button>

                                    </form>

                                </div>
                            </div>
                        </div>



                    </div><!-- row -->
                </div><!--col -->
            </div><!-- row -->




        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
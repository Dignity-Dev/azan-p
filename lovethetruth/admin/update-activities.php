<?php
include "header.php";
include "nav.php";
?>
<?php
$get_id = $_GET['activities'];
$fetch = mysqli_query($con, "SELECT * FROM activities WHERE a_id = '$get_id'");
$res = mysqli_fetch_array($fetch);
?>
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Update Activities </h2>
                    <p class="az-dashboard-text">change info of: <?php echo $res['a_title']; ?></p>
                </div>
                <div class="az-content-header-right">
                    
                    <a href="article.php" class="btn btn-purple"><i class="fa fa-plus"></i> Create New Article</a>
                </div>
            </div><!-- az-dashboard-one-title -->
            <hr>

            <!-- MAIN -->
            <div class="row row-sm mg-b-20">
                <div class="col-lg-9 ht-lg-100p offset-lg-1">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Update Activities</h6>
                                <p class="card-text">Modify the information of this activities, input the correct information.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- SERVER CODE -->
                            <?php
                            if (isset($_POST['update'])) {
                                $title = $_POST['title'];
                                $content = $_POST['content'];
                                $description = $_POST['description'];
                                $slug = preg_replace('#[ -]+#', '-', trim($title));

                                $send = mysqli_query($con, "UPDATE `activities` SET `a_title`='$title', `a_slug`='$slug', `a_content`='$content', `a_description`='$description' WHERE `a_id`='$get_id'");
                                if ($send) {
                                    $_SESSION['title'] = "Updated Successfully";
                                    $_SESSION['message'] = "An activities was successfully updated";
                                    $_SESSION['icon'] = "success";
                                    $_SESSION['location'] = "activities.php";
                                } else {
                                    $_SESSION['title'] = "Not updated Successfully";
                                    $_SESSION['message'] = "something went wrong, check your input and try again";
                                    $_SESSION['icon'] = "error";
                                    $_SESSION['location'] = "activities.php";
                                }
                            }
                            if (isset($_POST['update_img'])) {
                                // Image Upload Code
                                $fileInfo = PATHINFO($_FILES["act_img"]["name"]);
                                if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg" or $fileInfo['extension'] == "PNG" or $fileInfo['extension'] == "JPG" or $fileInfo['extension'] == "JPEG") {

                                    $filename = $_FILES["act_img"]["name"];
                                    $tempname = $_FILES["act_img"]["tmp_name"];

                                    $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
                                    // Folder Location
                                    $folder = "../../images/activity/" . $newFileName;
                                    // Now let's move the uploaded file into the folder: ebook
                                    move_uploaded_file($tempname, $folder);
                                    // Image Upload Code End
                                    $send = mysqli_query($con, "UPDATE `activities` SET `thumbnail`='$newFileName' WHERE `a_id`='$get_id'");
                                    if ($send) {
                                        $_SESSION['title'] = "Updated Successfully";
                                        $_SESSION['message'] = "An activities was successfully updated";
                                        $_SESSION['icon'] = "success";
                                        $_SESSION['location'] = "activities.php";
                                    } else {
                                        $_SESSION['title'] = "Not updated Successfully";
                                        $_SESSION['message'] = "something went wrong, check your input and try again";
                                        $_SESSION['icon'] = "error";
                                        $_SESSION['location'] = "activities.php";
                                    }
                                }
                            }
                            ?>
                            <!-- SERVER CODE END -->
                            <form method="post" class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $res['a_title']; ?>" required>
                                <label for="Short">Short description</label>
                                <textarea name="content" class="form-control" required><?php echo $res['a_content']; ?></textarea>
                                <label for="title">Description</label>
                                <textarea name="description" class="form-control" required id="editor"><?php echo $res['a_description']; ?></textarea>

                                <br>
                                <button type="submit" name="update" class="btn btn-check btn-primary"><i class="fa fa-sync"></i> Update</button>
                            </form>
                            <hr>
                            <img src="<?php echo '../../images/activity/'. $res['a_thumbnail']; ?>" alt="<?php echo $res['a_title']; ?> Image" style="max-width:150px; max-height:150px;">
                            <form method="post" enctype="multipart/form-data">
                                <label for="thumbnail">Change Image</label>
                                <input type="file" name="act_img" class="form-control" required>
                            </form>
                            <br>
                            <button type="submit" name="update_img" class="btn btn-check btn-primary"><i class="fa fa-sync"></i> Update Image</button>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                
            </div><!-- row -->


        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
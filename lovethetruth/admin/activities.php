<?php
include "header.php";
include "nav.php";
?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">What we do!</h2>
                    <p class="az-dashboard-text">Manage all Activities</p>
                </div>
                <div class="az-content-header-right">
                    
                    <a href="article.php" class="btn btn-purple"><i class="fa fa-plus"></i> Create New Article</a>
                </div>
            </div><!-- az-dashboard-one-title -->
            <hr>

            <!-- MAIN -->
            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Create New Activities</h6>
                                <p class="card-text">Activities are know as what you do, let people know more about your services.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- SERVER CODE -->
                            <?php
                            if (isset($_POST['create'])) {
                                $title = $_POST['title'];
                                $content = $_POST['content'];
                                $description = $_POST['description'];
                                $slug = preg_replace('#[ -]+#', '-', trim($title));

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
                                    $send = mysqli_query($con, "INSERT INTO `activities`(`a_title`, `a_slug`, `a_content`, `a_thumbnail`, `a_description`) VALUES ('$title','$slug','$content','$newFileName','$description')");
                                    if ($send) {
                                        $_SESSION['title'] = "Created Successfully";
                                        $_SESSION['message'] = "An activities was successfully uploaded";
                                        $_SESSION['icon'] = "success";
                                        $_SESSION['location'] = "activities.php";
                                    } else {
                                        $_SESSION['title'] = "Not Save";
                                        $_SESSION['message'] = "something went wrong, check your input and try again";
                                        $_SESSION['icon'] = "error";
                                        $_SESSION['location'] = "activities.php";
                                    }
                                }
                            }
                            ?>
                            <!-- SERVER CODE END -->
                            <form method="post" class="form-group" enctype="multipart/form-data">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                                <label for="Short">Short description</label>
                                <textarea name="content" class="form-control" required></textarea>
                                <label for="title">Description</label>
                                <textarea name="description" class="form-control" required id="editor"></textarea>
                                <label for="thumbnail">Activities Image</label>
                                <input type="file" name="act_img" class="form-control" required>
                                <br>
                                <button type="submit" name="create" class="btn btn-check btn-primary"><i class="fa fa-plus"></i> Create</button>
                            </form>


                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">All Activities</h6>
                                <p class="card-text">Manage All Activites, Update and delete.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        $fetch = mysqli_query($con, "SELECT * FROM activities");
                                        while ($act = mysqli_fetch_array($fetch)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $counter++ . '.'; ?></td>
                                                <td><?php echo $act['a_title']; ?></td>
                                                <td>
                                                    <a href="update-activities.php?activities=<?php echo $act['a_id']; ?>" class="text-primary" title="Update Me"> <i class="fa fa-edit"> </i> </a> |
                                                    <a href="delete-activities.php?activities=<?php echo $act['a_id']; ?>" class="text-danger" title="delete Me"> <i class="fa fa-trash"> </i> </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div><!--col -->
            </div><!-- row -->


        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
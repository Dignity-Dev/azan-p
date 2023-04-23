<?php
include "header.php";
include "nav.php";
?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Resource Articles!</h2>
                    <p class="az-dashboard-text">Create, Update and manage all Articles</p>
                </div>
                <div class="az-content-header-right">
                    
                    <a href="article.php" class="btn btn-purple"><i class="fa fa-plus"></i> Create New Article</a>
                </div>
            </div><!-- az-dashboard-one-title -->

            <!-- MAIN -->
            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Create New Article</h6>
                                <p class="card-text">Article are know as your publivcations, let people know more about what the program entails.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- SERVER CODE -->
                            <?php
                            if (isset($_POST['create'])) {
                                $title = $_POST['title'];
                                $description = $_POST['description'];
                                $slug = preg_replace('#[ -]+#', '-', trim($title));
                                $date = date("Y-m-d");

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
                                    $send = mysqli_query($con, "INSERT INTO `article`(`article_title`, `article_date`, `article_slug`, `article_image`, `article_content`) VALUES ('$title','$date','$slug','$newFileName','$description')");
                                    if ($send) {
                                        $_SESSION['title'] = "Created Successfully";
                                        $_SESSION['message'] = "An article was successfully uploaded";
                                        $_SESSION['icon'] = "success";
                                        $_SESSION['location'] = "article.php";
                                    } else {
                                        $_SESSION['title'] = "Not Save";
                                        $_SESSION['message'] = "something went wrong, check your input and try again";
                                        $_SESSION['icon'] = "error";
                                        $_SESSION['location'] = "article.php";
                                    }
                                }
                            }
                            ?>
                            <!-- SERVER CODE END -->
                            <form method="post" class="form-group" enctype="multipart/form-data">
                                <label for="title">Title</label>
                                <textarea name="title" class="form-control" required></textarea>
                                <label for="title">Contents</label>
                                <textarea name="description" class="form-control" required id="editor"></textarea>
                                <label for="thumbnail">Article Image</label>
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
                                <h6 class="card-title">All Articles</h6>
                                <p class="card-text">Manage All Articles, Update and delete.</p>
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
                                        $fetch = mysqli_query($con, "SELECT * FROM article");
                                        while ($act = mysqli_fetch_array($fetch)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $counter++ . '.'; ?></td>
                                                <td><?php echo $act['article_title']; ?></td>
                                                <td>
                                                    <a href="update-article.php?article=<?php echo $act['article_id']; ?>" class="text-primary" title="Update Me"> <i class="fa fa-edit"> </i> </a> |
                                                    <a href="delete-article.php?article=<?php echo $act['article_id']; ?>" class="text-danger" title="delete Me"> <i class="fa fa-trash"> </i> </a>
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
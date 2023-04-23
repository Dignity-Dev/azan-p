<?php
include "header.php";
include "nav.php";
?>
<?php
$get_id = $_GET['qa'];
$fetch = mysqli_query($con, "SELECT * FROM qa WHERE qa_id = '$get_id'");
$res = mysqli_fetch_array($fetch);
?>
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Update Q&A </h2>
                    <p class="az-dashboard-text">change info of: <?php echo $res['qa_title']; ?></p>
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
                                <h6 class="card-title">Update Q&A</h6>
                                <p class="card-text">Modify the information of this Q&A, input the correct information.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- SERVER CODE -->
                            <?php
                            if (isset($_POST['update'])) {
                                $title = $_POST['title'];
                                $description = $_POST['description'];
                                $slug = preg_replace('#[ -]+#', '-', trim($title));

                                $send = mysqli_query($con, "UPDATE `qa` SET `qa_title`='$title',`qa_slug`='$slug',`qa_contect`='$description' WHERE qa_id='$get_id'");
                                if ($send) {
                                    $_SESSION['title'] = "Updated Successfully";
                                    $_SESSION['message'] = "Q&A successfully updated";
                                    $_SESSION['icon'] = "success";
                                    $_SESSION['location'] = "dashboard.php";
                                } else {
                                    $_SESSION['title'] = "Not updated Successfully";
                                    $_SESSION['message'] = "something went wrong, check your input and try again";
                                    $_SESSION['icon'] = "error";
                                    $_SESSION['location'] = "dashboard.php";
                                }
                            }
                            
                            ?>
                            <!-- SERVER CODE END -->
                            <form method="post" class="form-group">

                                <label for="Short">Question</label>
                                <textarea name="title" class="form-control" required><?php echo $res['qa_title']; ?></textarea>
                                <label for="title">Answer</label>
                                <textarea name="description" class="form-control" required id="editor"><?php echo $res['qa_contect']; ?></textarea>

                                <br>
                                <button type="submit" name="update" class="btn btn-check btn-primary"><i class="fa fa-sync"></i> Update</button>
                            </form>
                            
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->

            </div><!-- row -->


        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->

<?php include "footer.php"; ?>
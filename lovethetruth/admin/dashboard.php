<?php
include "header.php";
include "nav.php";
?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Hi, welcome back!</h2>
                    <p class="az-dashboard-text">Your web dashboard hit up.</p>
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
                                <h6 class="card-title">Create New Questions and Answer</h6>
                                <p class="card-text">Question and Answer design to make all easy and self understanding.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">

                            <!-- SERVER CODE -->
                            <?php
                            if (isset($_POST['create'])) {
                                $title = $_POST['title'];
                                $description = $_POST['description'];
                                $slug = preg_replace('#[ -]+#', '-', trim($title));


                                $send = mysqli_query($con, "INSERT INTO `qa`(`qa_title`, `qa_contect`, `qa_slug`) VALUES ('$title','$description','$slug')");
                                if ($send) {
                                    $_SESSION['title'] = "Created Successfully";
                                    $_SESSION['message'] = "Q&A successfully Created";
                                    $_SESSION['icon'] = "success";
                                    $_SESSION['location'] = "dashboard.php";
                                } else {
                                    $_SESSION['title'] = "Not Save";
                                    $_SESSION['message'] = "something went wrong, check your input and try again";
                                    $_SESSION['icon'] = "error";
                                    $_SESSION['location'] = "dashboard.php";
                                }
                            }

                            ?>
                            <!-- SERVER CODE END -->
                            <form method="post" class="form-group" enctype="multipart/form-data">
                                <label for="title">Question</label>
                                <textarea name="title" class="form-control" required></textarea>
                                <label for="title">Answer</label>
                                <textarea name="description" class="form-control" required id="editor"></textarea>
                              
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
                                <h6 class="card-title">All Q&A</h6>
                                <p class="card-text">Manage All Q&A, Update and delete.</p>
                            </div>

                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Question</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        $fetch = mysqli_query($con, "SELECT * FROM qa");
                                        while ($act = mysqli_fetch_array($fetch)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $counter++ . '.'; ?></td>
                                                <td><?php echo $act['qa_title']; ?></td>
                                                <td>
                                                    <a href="update-qa.php?qa=<?php echo $act['qa_id']; ?>" class="text-primary" title="Update Me"> <i class="fa fa-edit"> </i> </a> |
                                                    <a href="delete-qa.php?qa=<?php echo $act['qa_id']; ?>" class="text-danger" title="delete Me"> <i class="fa fa-trash"> </i> </a>
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
<?php include "header.php";

$get_id = $_GET['article'];
$send = mysqli_query($con, "DELETE FROM article WHERE article_id = '$get_id'");
if ($send) {
    $_SESSION['title'] = "Delete Successfully";
    $_SESSION['message'] = "An article was deleted successfully";
    $_SESSION['icon'] = "success";
    $_SESSION['location'] = "article.php";
} else {
    $_SESSION['title'] = "Not deleting Successfully";
    $_SESSION['message'] = "something went wrong, try again later";
    $_SESSION['icon'] = "error";
    $_SESSION['location'] = "article.php";
}

?>

<?php include "swal.php"; ?>
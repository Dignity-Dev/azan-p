<?php include "header.php";

$get_id = $_GET['qa'];
$send = mysqli_query($con, "DELETE FROM qa WHERE qa_id = '$get_id'");
if ($send) {
    $_SESSION['title'] = "Delete Successfully";
    $_SESSION['message'] = "Q&A deleted successfully";
    $_SESSION['icon'] = "success";
    $_SESSION['location'] = "dashboard.php";
} else {
    $_SESSION['title'] = "Not deleting Successfully";
    $_SESSION['message'] = "something went wrong, try again later";
    $_SESSION['icon'] = "error";
    $_SESSION['location'] = "dashboard.php";
}

?>

<?php include "swal.php"; ?>
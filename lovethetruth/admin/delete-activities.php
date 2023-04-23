<?php include "header.php";

$get_id = $_GET['activities'];
$send = mysqli_query($con, "DELETE FROM activities WHERE a_id = '$get_id'");
if ($send) {
    $_SESSION['title'] = "Delete Successfully";
    $_SESSION['message'] = "An activities was deleted successfully";
    $_SESSION['icon'] = "success";
    $_SESSION['location'] = "activities.php";
} else {
    $_SESSION['title'] = "Not deleting Successfully";
    $_SESSION['message'] = "something went wrong, try again later";
    $_SESSION['icon'] = "error";
    $_SESSION['location'] = "activities.php";
}

?>

<?php include "swal.php"; ?>
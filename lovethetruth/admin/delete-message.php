<?php include "header.php";

$get_id = $_GET['message'];
$send = mysqli_query($con, "DELETE FROM message WHERE message_id = '$get_id'");
if ($send) {
    $_SESSION['title'] = "Delete Successfully";
    $_SESSION['message'] = "An message was deleted successfully";
    $_SESSION['icon'] = "success";
    $_SESSION['location'] = "message.php";
} else {
    $_SESSION['title'] = "Not deleting Successfully";
    $_SESSION['message'] = "something went wrong, try again later";
    $_SESSION['icon'] = "error";
    $_SESSION['location'] = "message.php";
}

?>

<?php include "swal.php"; ?>
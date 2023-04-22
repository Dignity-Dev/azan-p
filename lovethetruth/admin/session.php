<?php
include "../../include/config.php";
session_start();
if (!isset($_SESSION['username']) && empty($_SESSION['id'])) {
    echo "<script>window.location='sign-in.php';</script>";
}

$newid = $_SESSION['id'];
$sql = mysqli_query($con, "SELECT * FROM user WHERE user_id='$newid' ");
$row = mysqli_fetch_array($sql);
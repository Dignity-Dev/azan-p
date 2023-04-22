<?php
session_start();
include "../../include/config.php";
?>
<?php

if (!isset($_SESSION['username']) && empty($_SESSION['id'])) {
    echo "<script>window.location='sign-in.php';</script>";
} else {
    echo "<script>window.location='dashboard.php';</script>";
}

?>
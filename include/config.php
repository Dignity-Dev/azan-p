<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "azan";

$con = mysqli_connect($host, $user, $pass, $db);

$web_ = mysqli_query($con, "SELECT * FROM website_setting WHERE web_id = 11");
$web_row = mysqli_fetch_array($web_);





?>
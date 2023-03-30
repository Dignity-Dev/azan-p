<?php include("config.php"); ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo "images/" . $web_row['web_icon']; ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo "images/" . $web_row['web_icon']; ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo "images/" . $web_row['web_icon']; ?>" type="image/x-icon">

    <!-- Google font (font-family: 'Hind', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">
    <style>
        .bg-image--1 {
            background-image: url(<?php echo 'images/bg/'.$web_row['hero_banner']; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
    </style>

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
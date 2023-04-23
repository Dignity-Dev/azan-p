<?php 
$web_id = $web_row['web_id'];

if (isset($_POST['web'])) {
    $webname = $_POST['webname'];
    $web_slug = $_POST['web_slug'];
    $side_head = $_POST['side_head'];
    $hero_head = $_POST['hero_head'];
    $hero_text = $_POST['hero_text'];
    $side_text = $_POST['side_text'];

    $sub = mysqli_query($con, "UPDATE website_setting SET `webname`='$webname', `web_slug`='$web_slug', `hero_head`='$hero_head', `hero_text`='$hero_text', `side_head`='$side_head', `side_text`='$side_text' WHERE web_id='$web_id' ");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}

// about
if (isset($_POST['about'])) {
    $mission = $_POST['mission'];
    $vision = $_POST['vision'];
    $history = $_POST['history'];
    $footer_content = $_POST['footer_content'];

    $sub = mysqli_query($con, "UPDATE website_setting SET `footer_content`='$footer_content', `mission`='$mission', `vision`='$vision', `history`='$history' WHERE web_id='$web_id' ");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}

if (isset($_POST['hb'])) {
    $fileInfo = PATHINFO($_FILES["hero_banner"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["hero_banner"]["name"];
        $tempname = $_FILES["hero_banner"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../../images/bg/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "UPDATE website_setting SET hero_banner = '$newFileName' WHERE web_id='$web_id'");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}
}

if (isset($_POST['wi'])) {
    $fileInfo = PATHINFO($_FILES["web_icon"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["web_icon"]["name"];
        $tempname = $_FILES["web_icon"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../../images/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "UPDATE website_setting SET web_icon = '$newFileName' WHERE web_id='$web_id'");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}
}

if (isset($_POST['wlw'])) {
    $fileInfo = PATHINFO($_FILES["web_logo_white"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["web_logo_white"]["name"];
        $tempname = $_FILES["web_logo_white"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../../images/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "UPDATE website_setting SET web_logo_white = '$newFileName' WHERE web_id='$web_id'");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}
}

if (isset($_POST['wlc'])) {
    $fileInfo = PATHINFO($_FILES["web_logo_color"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["web_logo_color"]["name"];
        $tempname = $_FILES["web_logo_color"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../../images/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "UPDATE website_setting SET web_logo_color = '$newFileName' WHERE web_id='$web_id'");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}
}

if (isset($_POST['ap'])) {
    $fileInfo = PATHINFO($_FILES["about_picture"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["about_picture"]["name"];
        $tempname = $_FILES["about_picture"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../../images/about/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "UPDATE website_setting SET about_picture = '$newFileName' WHERE web_id='$web_id'");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}
    
}


if (isset($_POST['contact'])) {
    $web_email = $_POST['web_email'];
    $web_phone_1 = $_POST['web_phone_1'];
    $web_phone_2 = $_POST['web_phone_2'];
    $office_address = $_POST['office_address'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $whatsapp = $_POST['whatsapp'];

    $sub = mysqli_query($con, "UPDATE website_setting SET `web_email`='$web_email', `web_phone_1`='$web_phone_1', `web_phone_2`='$web_phone_2', `office_address`='$office_address', `facebook`='$facebook', `instagram`='$instagram', `twitter`='$twitter', `whatsapp`='$whatsapp' WHERE web_id='$web_id'");

    if ($sub) {
        $_SESSION['title'] = "Successfully Updated";
        $_SESSION['message'] = "Information have been updated successfully";
        $_SESSION['icon'] = "success";
        $_SESSION['location'] = "web-setting.php";
    } else {
        $_SESSION['title'] = "Not Save";
        $_SESSION['message'] = "Information not updated, keep your input and try again";
        $_SESSION['icon'] = "error";
        $_SESSION['location'] = "web-setting.php";
    }
}
?>
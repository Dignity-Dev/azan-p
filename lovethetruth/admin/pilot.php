<?php 
if (isset($_POST['web'])) {
    $webname = $_POST['webname'];
    $web_slug = $_POST['web_slug'];
    $side_head = $_POST['side_head'];
    $hero_head = $_POST['hero_head'];
    $hero_text = $_POST['hero_text'];
    $side_text = $_POST['side_text'];

    $sub = mysqli_query($con, "");

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

    $sub = mysqli_query($con, "");

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
    $fileInfo = PATHINFO($_FILES["depimage"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["depimage"]["name"];
        $tempname = $_FILES["depimage"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../assets/images/courses/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "");

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
    $fileInfo = PATHINFO($_FILES["depimage"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["depimage"]["name"];
        $tempname = $_FILES["depimage"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../assets/images/courses/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "");

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
    $fileInfo = PATHINFO($_FILES["depimage"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["depimage"]["name"];
        $tempname = $_FILES["depimage"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../assets/images/courses/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "");

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
    $fileInfo = PATHINFO($_FILES["depimage"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["depimage"]["name"];
        $tempname = $_FILES["depimage"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../assets/images/courses/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "");

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
    $fileInfo = PATHINFO($_FILES["depimage"]["name"]);

    if ($fileInfo['extension'] == "png" or $fileInfo['extension'] == "jpg" or $fileInfo['extension'] == "jpeg") {

        $filename = $_FILES["depimage"]["name"];
        $tempname = $_FILES["depimage"]["tmp_name"];

        $newFileName = $fileInfo['filename'] . "-" . time() . "." . $fileInfo['extension'];
        $folder = "../assets/images/courses/" . $newFileName;
        // Now let's move the uploaded file into the folder: ebook
        move_uploaded_file($tempname, $folder);

    $sub = mysqli_query($con, "");

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

    $sub = mysqli_query($con, "");

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
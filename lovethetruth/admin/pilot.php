<?php 
if (isset($_POST['web'])) {
    $webname = $_POST['webname'];
    $web_slug = $_POST['web_slug'];
    $side_head = $_POST['side_head'];
    $hero_head = $_POST['hero_head'];
    $hero_text = $_POST['hero_text'];
    $side_text = $_POST['side_text'];
}

// about
if (isset($_POST['about'])) {
    $mission = $_POST['mission'];
    $vision = $_POST['vision'];
    $history = $_POST['history'];
    $footer_content = $_POST['footer_content'];
}

if (isset($_POST['hb'])) {}

if (isset($_POST['wi'])) {}

if (isset($_POST['wlw'])) {}

if (isset($_POST['wlc'])) {}

if (isset($_POST['ap'])) {}

if (isset($_POST['contact'])) {
    $web_email = $_POST['web_email'];
    $web_phone_1 = $_POST['web_phone_1'];
    $web_phone_2 = $_POST['web_phone_2'];
    $office_address = $_POST['office_address'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $whatsapp = $_POST['whatsapp'];
}
?>
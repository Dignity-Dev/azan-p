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
?>
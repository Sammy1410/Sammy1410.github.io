<?php
    define('WP_USE_THEMES', false);
    $location = $_SERVER['DOCUMENT_ROOT'] . "/wp-load.php";
    require_once($location);

?>

<head>
    <link rel="icon" href="/custom/favicon.png" sizes="32x32">
    <meta charset="UTF-8">
    <title>Industry 4.0</title>
    <?php 
        get_header();
        
    ?>
</head>


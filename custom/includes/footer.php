<?php
    define('WP_USE_THEMES', false);
    $location = $_SERVER['DOCUMENT_ROOT'] . "/wp-load.php";
    require_once($location);
?>


<?php 
    get_footer();
    //wp_footer();
?>



<?php
    require_once('database/connection.inc.php');
    require_once('includes/functions.inc.php');
        
    unset ($_SESSION['USER_LOGIN']);
    unset ($_SESSION['USER_ID']);
    unset ($_SESSION['USER_EMAIL']);
    unset ($_SESSION['USER_NAME']);

    header('location:'.SITE_PATH.'');
    die();
?>
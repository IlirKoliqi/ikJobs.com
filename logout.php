<?php

use Admin\Libs\Session;
ob_start();
require_once ('admin/autoloader.php');

    $logout = new Admin\Libs\Session();
    $logout -> logout();
    if($logout){
        header("Location: index.php");

    }

?>
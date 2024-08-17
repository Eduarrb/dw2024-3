<?php
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("VIEW_FRONT") ? null : define("VIEW_FRONT", __DIR__ . DS . "views" . DS . "front");
    defined("VIEW_BACK") ? null : define("VIEW_BACK", __DIR__ . DS . "views" . DS . "back");

    defined('BD_HOST') ? null : define('DB_HOST', 'localhost');
    defined('BD_USER') ? null : define('DB_USER', 'root');
    defined('BD_PASS') ? null : define('DB_PASS', 'web12345678');
    defined('BD_NAME') ? null : define('DB_NAME', 'jobaria');

    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    require_once('caller.php');
    
?>
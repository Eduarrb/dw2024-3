<?php
    // CREAR RUTAS RELATIVAS A LAS VISTAS

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    // echo __DIR__;
    defined("VIEW_FRONT") ? null : define("VIEW_FRONT", __DIR__ . DS . "views" . DS . "front");

    defined("VIEW_BACK") ? null : define("VIEW_BACK", __DIR__ . DS . "views" . DS . "back");
    
?>
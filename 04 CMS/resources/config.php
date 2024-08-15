<?php
    // CREAR RUTAS RELATIVAS A LAS VISTAS

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    // echo __DIR__;
    defined("VIEW_FRONT") ? null : define("VIEW_FRONT", __DIR__ . DS . "views" . DS . "front");
    
    // C:\xampp\htdocs\dw2024-3\04 CMS\resources\views\front
    echo VIEW_FRONT;


    
?>
<?php
    require_once("../resources/config.php");

    if(!isset($_GET['email']) || !isset($_GET['token'])){
        set_mensaje(display_msj("Datos de validación faltantes, intente otra vez", "danger"));
        redirect("401.php");
    } else {
        activar_usuario();
    }

?>
<?php
    require_once("../resources/config.php");
    unset($_SESSION['user_id']);
    unset($_SESSION['user_nombres']);
    unset($_SESSION['user_apellidos']);
    unset($_SESSION['user_rol']);
    redirect("login.php");
?>
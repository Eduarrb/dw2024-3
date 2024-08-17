<?php
    function limpiar_string($str) {
        global $conexion;
        return mysqli_real_escape_string($conexion, trim($str));
    }
?>
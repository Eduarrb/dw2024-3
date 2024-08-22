<?php
    function limpiar_string($str) {
        global $conexion;
        return mysqli_real_escape_string($conexion, trim($str));
    }

    function display_msj($msj, $tipo) {
        $msj = <<<DELIMITER
            <div class="alert alert-$tipo alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> $msj.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
DELIMITER;
        return $msj;
    }

    function query($consulta) {
        global $conexion;
        return mysqli_query($conexion, $consulta);
    }

    function contar_filas($query) {
        return mysqli_num_rows($query);
    }

    function email_existe($email) {
        $query = query("SELECT * FROM usuarios WHERE user_email = '{$email}'");
        if(contar_filas($query) >= 1) {
            return true;
        }
        return false;
    }

    function redirect($location) {
        header("Location: $location");
    }
?>
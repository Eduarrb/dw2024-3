<?php
    function validar_user_reg(){
        global $conexion;
        $min = 3;
        $max = 10;
        $errores = [];

        if(isset($_POST['registrar'])){
            $user_nombres = limpiar_string($_POST['user_nombres']);

            echo $user_nombres;
        }
    }
?>
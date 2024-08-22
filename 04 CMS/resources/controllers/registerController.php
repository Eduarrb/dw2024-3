<?php
    function validar_user_reg(){
        global $conexion;
        $min = 3;
        $max = 10;
        $errores = [];

        if(isset($_POST['registrar'])){
            $user_nombres = limpiar_string($_POST['user_nombres']);
            $user_apellidos = limpiar_string($_POST['user_apellidos']);
            $user_email = limpiar_string($_POST['user_email']);
            $user_pass = limpiar_string($_POST['user_pass']);
            $user_passConfirm = limpiar_string($_POST['user_passConfirm']);

            if(strlen($user_nombres) < $min) {
                $errores[] = "El nombre no debe tener menos de $min caracteres";
            }
            if(strlen($user_nombres) > $max) {
                $errores[] = "El nombre no debe tener mas de $max caracteres";
            }
            if(strlen($user_apellidos) < $min) {
                $errores[] = "El apellido no debe tener menos de $min caracteres";
            }
            if(strlen($user_apellidos) > $max) {
                $errores[] = "El apellido no debe tener mas de $max caracteres";
            }
            // eduardo@gmail.com
            if(email_existe($user_email)) {
                $errores[] = "El correo ingresado ya existe, intente de nuevo";
            }
            if($user_pass != $user_passConfirm) {
                $errores[] = "Las contraseñas deben ser iguales";
            }

            if(!empty($errores)){
                foreach($errores as $error) {
                    echo display_msj($error, "danger");
                }
            } else {
                registro_usuario($user_nombres, $user_apellidos, $user_email, $user_pass);
                set_mensaje(display_msj("Registro satisfactorio. Por favor revisa tu bandeja o spam para activar tu cuenta. Esto puede tardar unos minutos", "success"));
                redirect("register.php");
            }
        }
    }

    function registro_usuario($nombres, $apellidos, $correo, $pass) {
        $user_pass = password_hash($pass, PASSWORD_BCRYPT, array('cost' => 12));
        query("INSERT INTO usuarios (user_nombres, user_apellidos, user_email, user_pass) VALUES ('{$nombres}', '{$apellidos}', '{$correo}', '{$user_pass}')");
        // send_email()
    }
?>
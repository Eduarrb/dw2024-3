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
        $user_token = md5($correo);
        $user_pass = password_hash($pass, PASSWORD_BCRYPT, array('cost' => 12));
        query("INSERT INTO usuarios (user_nombres, user_apellidos, user_email, user_pass, user_token) VALUES ('{$nombres}', '{$apellidos}', '{$correo}', '{$user_pass}', '{$user_token}')");
        $mensaje = "Por favor activa tu cuenta mediante este <a href='http://localhost/dw2024-3/04%20CMS/public/activate.php?email={$correo}&token={$user_token}'>LINK</a>";
        send_email($correo, 'Activar cuenta', $mensaje);
    }

    function activar_usuario() {
        if(isset($_GET['email']) && isset($_GET['token'])){
            $user_email = limpiar_string($_GET['email']);
            $user_token = limpiar_string($_GET['token']);

            $query = query("SELECT user_id FROM usuarios WHERE user_email = '{$user_email}' AND user_token = '{$user_token}'");
            $fila = fetch_assoc($query);
            $user_id = $fila['user_id'];

            if(contar_filas($query) == 1){
                query("UPDATE usuarios SET user_status = 1, user_token = '' WHERE user_id = {$user_id}");
                set_mensaje(display_msj("su cuenta ha sido activada. Por favor inicie sesión", "success"));
                redirect("register.php");
            } else {
                set_mensaje(display_msj("Los datos no son válidos. Por favor Intente otra vez", "danger"));
                redirect("401.php");
            }
        }
    }
?>
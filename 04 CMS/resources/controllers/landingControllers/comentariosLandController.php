<?php
    function post_enviarComentario($prod_id) {
        if(isset($_POST['comEnviar'])) {
            if(!isset($_SESSION['user_rol'])) {
                set_mensaje(display_msj("Debes iniciar sesión para dejar un comentario", "danger"));
                redirect("login.php");
            } else {
                $query = query("SELECT * FROM comentarios WHERE com_prod_id = {$prod_id} AND com_user_id = {$_SESSION['user_id']}");
                if(contar_filas($query) >= 1) {
                    set_mensaje(display_msjLand("Lo sentimos, solo puede dejar un comentario por producto", "danger"));
                    redirect("producto.php?id={$prod_id}");
                } else {
                    $com_mensaje = limpiar_string($_POST['com_mensaje']);
                    $com_puntaje = limpiar_string($_POST['com_puntaje']);
                    query("INSERT INTO comentarios (com_user_id, com_prod_id, com_mensaje, com_puntaje, com_fecha) VALUES ({$_SESSION['user_id']}, {$prod_id}, '{$com_mensaje}', {$com_puntaje}, NOW())");
                    set_mensaje(display_msjLand("Comentario realizado, espere a que el admin lo valide", "success"));
                    redirect("producto.php?id={$prod_id}");
                }
            }
        }
    }

?>
<?php
    require_once('../../resources/config.php');

    try {
        $prod_id = limpiar_string($_GET['id']);
        $query = query("SELECT CONCAT(b.user_nombres, ' ', b.user_apellidos) AS usuario, a.com_mensaje, a.com_puntaje, a.com_fecha, b.user_img FROM comentarios a INNER JOIN usuarios b ON a.com_user_id = b.user_id WHERE a.com_status = 1 AND a.com_prod_id = {$prod_id}");
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        echo json_encode($res);
    } catch (Exception $err) {
        error_log($err->getMessage());
        echo json_encode($err->getMessage());
    }
?>
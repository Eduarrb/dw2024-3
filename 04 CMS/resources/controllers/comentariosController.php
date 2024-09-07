<?php
    function get_comentarios() {
        $query = query("SELECT a.com_id, CONCAT(b.user_nombres, ' ', b.user_apellidos) AS usuario, c.prod_id, c.prod_nombre, a.com_mensaje, a.com_puntaje, a.com_fecha FROM comentarios a INNER JOIN usuarios b ON a.com_user_id = b.user_id INNER JOIN productos c ON a.com_prod_id = c.prod_id WHERE a.com_status = 0");
        if(contar_filas($query) != 0) {
            while($row = fetch_assoc($query)) {
                $comentario = <<<DELIMITADOR
                    <tr>
                        <td>{$row['usuario']}</td>
                        <td>
                            <a href="../producto.php?id={$row['prod_id']}" target="_blank">
                                {$row['prod_nombre']}
                            </a>
                        </td>
                        <td>{$row['com_mensaje']}</td>
                        <td>{$row['com_puntaje']}</td>
                        <td>{$row['com_fecha']}</td>
                        <td>
                            <a href="index.php?comentarios&aprobar={$row['com_id']}" class="btn btn-success">aprobar</a>
                            <a href="" class="btn btn-danger ms-1">desaprobar</a>
                        </td>
                    </tr>
DELIMITADOR;
                echo $comentario;
            }
        } else {
            $vacio = <<<DELIMITADOR
                <tr>
                    <td colspan="5" class="text-success text-center">Ningun comentario enviado hasta la fecha</td>
                </tr>
DELIMITADOR;
            echo $vacio;
        }
    }

    function post_aprobarComentario() {
        if(isset($_GET['aprobar'])) {
            $com_id = limpiar_string($_GET['aprobar']);
            query("UPDATE comentarios SET com_status = 1 WHERE com_id = {$com_id}");
            set_mensaje(display_msj("Comentario aprobado correctamente", "success"));
            redirect("index.php?comentarios");
        }
    }

?>
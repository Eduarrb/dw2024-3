<?php
    function post_productoAgregar() {
        $errores = [];
        $min = 5;
        if(isset($_POST['guardar'])) {
            $prod_nombre = limpiar_string($_POST['prod_nombre']);
            $prod_descri = limpiar_string($_POST['prod_descri']);
            $prod_precio = limpiar_string($_POST['prod_precio']);
            $prod_canti = limpiar_string($_POST['prod_canti']);
            $prod_img = $_FILES['prod_img']['name'];  
            $prod_img_tmp = $_FILES['prod_img']['tmp_name'];
            if(strlen($prod_nombre) < $min) {
                $errores['nombre'] = "El campo nombre debe tener más de $min caracteres";
            }
            if(strlen($prod_descri) < $min) {
                $errores['descri'] = "El campo descripción debe tener mas de $min caracteres";
            }
            if($prod_precio <= 0) {
                $errores['precio'] = "El precio debe ser mayor a 0";
            }
            if($prod_canti <= 0) {
                $errores['canti'] = "La cantidad debe ser mayor a 0";
            }
            if(strlen($prod_img) <= 0) {
                $errores['img'] = "El campo imagen no debe estar vacio";
            }
            if(!empty($errores)) {
                return $errores;
            }
            $prod_img = md5(uniqid()) . "." . explode(".", $prod_img)[1];
            move_uploaded_file($prod_img_tmp, "../img/{$prod_img}");
            query("INSERT INTO productos (prod_nombre, prod_descri, prod_precio, prod_canti, prod_img) VALUES ('{$prod_nombre}', '{$prod_descri}', {$prod_precio}, {$prod_canti}, '{$prod_img}')");
            set_mensaje(display_msj("Producto agregado correctamente", "success"));
            redirect("index.php?productos");
        }
    }

    function get_productos() {
        $query = query("SELECT * FROM productos");
        while($row = fetch_assoc($query)){
            $descri = substr($row['prod_descri'], 5, 30);
            $producto = <<<DELIMITADOR
                <tr>
                    <td>{$row['prod_nombre']}</td>
                    <td>
                        <img src="../img/{$row['prod_img']}" alt="{$row['prod_nombre']}" width="70">
                    </td>
                    <td>{$descri}...</td>
                    <td>S/ {$row['prod_precio']}</td>
                    <td>{$row['prod_canti']}</td>
                    <td>
                        <a href="#" class="btn-outline-success btn btn-sm me-1">edit</a>
                        <a href="#" class="btn-outline-danger btn btn-sm">delete</a>
                    </td>
                </tr>
DELIMITADOR;
            echo $producto;
        }
    }
?>
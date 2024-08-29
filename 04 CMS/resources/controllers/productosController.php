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

            print_r($_FILES['prod_img']);

            echo $prod_img;

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
        }
    }

?>
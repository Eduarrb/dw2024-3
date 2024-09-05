<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="cart">
        <div class="cart__container contenedor">
            <?php mostrar_msj(); ?>
            <table class="cart__container__table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Sub Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="img/07ca463b933f044e5a06b2f105dc2121.jpg" alt="{$fila['prod_nombre']}">
                        </td>
                        <td>Lampara</td>
                        <td>S/ 99.99</td>
                        <td>1</td>
                        <td>S/ 99.99</td>
                        <td>
                            <a href="#" class="btn btn-warning"><i class="fa-solid fa-minus"></i></a>
                            <a href="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
    </section>


    <?php include(VIEW_FRONT . DS . "footer.php"); ?>

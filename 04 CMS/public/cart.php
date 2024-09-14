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
                    <?php $data = get_mostrarItemsCarrito() ?>
                </tbody>
            </table>

            <div class="mt-3">
                <a href="<?php echo $data[1]; ?>" class="btn btn-success">REALIZAR PAGO</a>
            </div>
            
            <?php
                carritoAumentar();
                carritoRestar();
                carritoBorrar();
            ?>

        </div>
    </section>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>

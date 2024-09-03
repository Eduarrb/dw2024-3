<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="producto">
        <div class="producto__container contenedor">
            <div class="producto__container__imgBox">
                <img src="img/21a916a061a8d1fef5353cddf5b1a72c.jpg" alt="">
            </div>
            <div class="producto__container__data">
                <h3 class="producto__container__data__titulo">
                    Lampara
                </h3>
                <div class="producto__container__data_stars mt-2">
                    
                    <i class="fa-regular fa-star star-yellow"></i>
                    <i class="fa-regular fa-star star-yellow"></i>
                    <i class="fa-regular fa-star star-yellow"></i>
                    <i class="fa-regular fa-star star-yellow"></i>
                    <i class="fa-regular fa-star star-yellow"></i>
                </div>
                <div class="producto__container__data__precio mt-4">
                    S/ 1000           
                </div>
                <div class="producto__container__data__descri mt-4">
                   decri
                </div>
                
                <form class="producto__container__data__form mt-5" method="post">
                    <input type="hidden" name="prod_id" value="<?php echo $item['prod_id']; ?>">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="prod_canti" value="1" min="1" max="<?php echo $item['prod_canti']; ?>">
                    <input type="submit" value="Agregar a carrito" name="carritoAdd">
                </form>
            </div>
        </div>
    </section>
    <section class="comentarios">
        <div class="comentarios__container contenedor">
            <h2 class="comentarios__container__titulo">
                Comentarios
            </h2>
            <?php
                mostrar_msj();
                post_carritoAdd();
                post_enviarComentario($item['prod_id']);
            ?>
            <form class="comentarios__container__form mt-2" method="post">
                <div class="comentarios__container__form__group">
                    <textarea name="com_mensaje" cols="30" rows="3" placeholder="Deja tu comentario"></textarea>
                </div>
                <div class="comentarios__container__form__group">
                    <label for="puntaje">Puntaje</label>
                    <input type="number" name="com_puntaje" id="puntaje" min="0" max="5" value="1">
                </div>
                <div class="comentarios__container__form__group text-right">
                    <input type="submit" value="Enviar" name="comEnviar">
                </div>
            </form>
            <div class="comentarios__container__box">
                
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="module" src="js/comentarios.js"></script>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>

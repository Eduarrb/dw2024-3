<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="producto">
        <div class="producto__container contenedor">
            <?php $row = get_productoLand(); ?>
            <div class="producto__container__imgBox">
                <img src="img/<?php echo $row['prod_img']; ?>" alt="<?php echo $row['prod_nombre']; ?>">
            </div>
            <div class="producto__container__data">
                <h3 class="producto__container__data__titulo">
                    <?php echo $row['prod_nombre']; ?>
                </h3>
                <div class="producto__container__data_stars mt-2">
                    <?php
                        if($row['total_com'] != 0) {
                            $puntaje = round($row['suma'] / $row['total_com']);
                            for($i = 0; $i < $puntaje; $i++) {
                                echo '<i class="fa-solid fa-star star-yellow"></i>';
                            }
                            if($puntaje != 5) {
                                for($j = 0; $j < 5 - $puntaje; $j++) {
                                    echo '<i class="fa-regular fa-star star-yellow"></i>';
                                }
                            }
                        } else {
                            ?>
                                <i class="fa-regular fa-star star-yellow"></i>
                                <i class="fa-regular fa-star star-yellow"></i>
                                <i class="fa-regular fa-star star-yellow"></i>
                                <i class="fa-regular fa-star star-yellow"></i>
                                <i class="fa-regular fa-star star-yellow"></i>
                        <?php }
                    ?>
                </div>
                <div class="producto__container__data__precio mt-4">
                    S/ <?php echo $row['prod_precio']; ?>          
                </div>
                <div class="producto__container__data__descri mt-4">
                    <?php echo $row['prod_descri']; ?>
                </div>
                
                <form class="producto__container__data__form mt-5" method="post">
                    <input type="hidden" name="prod_id" value="<?php echo $row['prod_id']; ?>">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="prod_canti" value="1" min="1" max="<?php echo $row['prod_canti']; ?>">
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
                post_enviarComentario($row['prod_id']);
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
                <div class="comentarios__container__box__item">
                    <div class="comentarios__container__box__item__imgBox">
                        <img src="img/user.png" alt="">
                    </div>
                    <div class="comentarios__container__box__item__data">
                        <div class="comentarios__container__box__item__data__top">
                            <span>Eduardo Arroyo</span>
                            <span>6 jul 2024</span>
                        </div>
                        <p class="comentarios__container__box__item__data__descri mt-1">
                            Buen producto
                        </p>
                        <div class="comentarios__container__box__item__data__stars mt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/comentarios.js"></script>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>

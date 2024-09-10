<?php
    function get_productosLand() {
        $query = query("SELECT * FROM productos");
        if(contar_filas($query) != 0) {
            while($row = fetch_assoc($query)) {
                $producto = <<<DELIMITADOR
                    <article class="productos__contenedor__box__item">
                        <div class="productos__contenedor__box__item__etiquetas">
                            <span>New</span>
                        </div>
                        <img src="img/{$row['prod_img']}" alt="{$row['prod_nombre']}" class="productos__contenedor__box__item--img">
                        <h2 class="productos__contenedor__box__item--name">
                            {$row['prod_nombre']}
                        </h2>
                        <div class="productos__contenedor__box__item__stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="productos__contenedor__box__item__precio">
                            <span class="productos__contenedor__box__item__precio--oferta">
                                S/ {$row['prod_precio']}
                            </span>
                        </div>
                        <a href="producto.php?id={$row['prod_id']}" class="productos__contenedor__box__item--btn">
                            VER MÁS
                        </a>
                    </article>
DELIMITADOR;
                echo $producto;
            }
        } else {

        }
    }


    function get_productoLand() {
        if(!isset($_GET['id']) || empty($_GET['id'])) {
            redirect("./");
        } else {
            $id = limpiar_string($_GET['id']);
            $query = query("SELECT *, COUNT(b.com_prod_id) AS total_com, SUM(b.com_puntaje) AS suma FROM productos a LEFT JOIN comentarios b ON a.prod_id = b.com_prod_id WHERE prod_id = {$id}");
            if(contar_filas($query) == 0) {
                redirect("./");
            } else {
                return fetch_assoc($query);
            }
        }
    }
?>
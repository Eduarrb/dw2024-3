<?php
    function post_carritoAdd() {
        if(isset($_POST['carritoAdd'])) {
            validarLogIn();
            $prod_id = limpiar_string($_POST['prod_id']);
            $prod_canti = limpiar_string($_POST['prod_canti']);
            $query = query("SELECT prod_canti FROM productos WHERE prod_id = {$prod_id}");
            if(contar_filas($query) == 1) {
                $query = query("SELECT * FROM carrito WHERE cart_user_id = {$_SESSION['user_id']} AND cart_prod_id = {$prod_id}");
                if(contar_filas($query) == 1) {
                    set_mensaje(display_msjLand("El producto ya esta agregado en tu carrito", "danger"));
                    redirect("producto.php?id={$prod_id}");
                } else {
                    query("INSERT INTO carrito (cart_user_id, cart_prod_id, cart_canti) VALUES ({$_SESSION['user_id']}, {$prod_id}, {$prod_canti})");
                    set_mensaje(display_msjLand("Producto agregado correctamente al carrito", "success"));
                    redirect("producto.php?id={$prod_id}");
                }
            } else {
                set_mensaje(display_msj("Datos erroneos", "danger"));
                redirect("404.php");
            }
        }
    }

    function validarCarrito() {
        if(isset($_SESSION['user_id'])) {
            $query = query("SELECT COUNT(a.cart_user_id) AS canti, SUM(b.prod_precio * a.cart_canti) AS total FROM carrito a RIGHT JOIN productos b ON a.cart_prod_id = b.prod_id WHERE a.cart_user_id = {$_SESSION['user_id']}");
            if(contar_filas($query) >= 1) {
                return fetch_assoc($query);
            }
        } else {
            return ["canti" => 0, "total" => "0.00"];
        }
    }


    require_once 'vendor/autoload.php';
    use MercadoPago\MercadoPagoConfig;
    use MercadoPago\Client\Preference\PreferenceClient;
    MercadoPagoConfig::setAccessToken("TEST-3354446792136437-091321-d2f03b6cdcc2b576609eb0054e905d6c-160252421");

    $client = new PreferenceClient();

    function get_mostrarItemsCarrito() {
        validarLogIn();
        $query = query("SELECT * FROM carrito a INNER JOIN productos b ON a.cart_prod_id = b.prod_id WHERE a.cart_user_id = {$_SESSION['user_id']}");
        if(contar_filas($query) >= 1) {
            $total = 0;
            while($row = fetch_assoc($query)) {
                $sub_total = $row['prod_precio'] * $row['cart_canti'];
                $total += $sub_total;
                $item = <<<DELIMITADOR
                    <tr>
                        <td>
                            <img src="img/{$row['prod_img']}" alt="{$row['prod_nombre']}">
                        </td>
                        <td>{$row['prod_nombre']}</td>
                        <td>S/ {$row['prod_precio']}</td>
                        <td>{$row['cart_canti']}</td>
                        <td>S/ {$sub_total}</td>
                        <td>
                            <a href="cart.php?restar={$row['cart_id']}" class="btn btn-warning"><i class="fa-solid fa-minus"></i></a>
                            <a href="cart.php?aumentar={$row['cart_id']}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                            <a href="cart.php?borrar={$row['cart_id']}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
DELIMITADOR;
                echo $item;
            }
            $trTotal = <<<DELIMITADOR
                <tr>
                    <td colspan="3"></td>
                    <td style="padding: 10px 0"><strong>Total:</strong></td>
                    <td>S/ {$total}</td>
                    <td></td>
                </tr>
DELIMITADOR;
            echo $trTotal;

            global $client;

            $preference = $client->create([
                "items"=> array(
                    array(
                        "title" => "Total a pagar",
                        "quantity" => 1,
                        "unit_price" => $total,
                        "currency_id" => "PE"
                    )
                  ),
                  "back_urls" => array(
                      "success" => "http://localhost/dw2024-3/04%20CMS/public/success.php",
                      "failure" => "http://localhost/dw2024-3/04%20CMS/public/failure.php",
                      "pending" => "http://localhost/dw2024-3/04%20CMS/public/pending.php",
                  ),
                  "auto_return" => "approved"

              ]);
            // print_r($preference);
            return [$preference->id, $preference->sandbox_init_point];
        }
    }

    function carritoBorrar() {
        if(isset($_GET['borrar'])) {
            validarLogin();
            $cart_id = limpiar_string($_GET['borrar']);
            query("DELETE FROM carrito WHERE cart_id = {$cart_id}");
            set_mensaje(display_msjLand("El item fue retirado del carrito correctamente", "success"));
            redirect("cart.php");
        }
    }

    function carritoRestar() {
        if(isset($_GET['restar'])){
            validarLogIn();
            $cart_id = limpiar_string($_GET['restar']);
            $query = query("SELECT cart_canti FROM carrito WHERE cart_id = {$cart_id}");
            $row = fetch_assoc($query);
            $cart_canti = $row['cart_canti'];
            if($cart_canti > 1) {
                query("UPDATE carrito SET cart_canti = cart_canti - 1 WHERE cart_id = {$cart_id}");
            } else {
                set_mensaje(display_msjLand("El item no puede ser menor a 1, en tal caso elimínelo con el boton eliminar", "danger"));
            }
            redirect("cart.php");
        }
    }

    function carritoAumentar() {
        if(isset($_GET['aumentar'])) {
            validarLogIn();
            $cart_id = limpiar_string($_GET['aumentar']);
            $query = query("SELECT a.cart_canti, b.prod_canti FROM carrito a INNER JOIN productos b ON a.cart_prod_id = b.prod_id WHERE a.cart_id = {$cart_id}");
            $row = fetch_assoc($query);
            $prod_canti = $row['prod_canti'];
            $cart_canti = $row['cart_canti'];
            if($cart_canti < $prod_canti) {
                query("UPDATE carrito SET cart_canti = cart_canti + 1 WHERE cart_id = {$cart_id}");
            } else {
                set_mensaje(display_msjLand("No puedes agregar mas de {$prod_canti} items del producto al carrito", "danger"));
            }
            redirect("cart.php");
        }
    }
 ?>
<?php 
    require_once("db.php"); 
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1 class="text-center pt-5 pb-5 bg-primary text-white">Bienvenido a Stream</h1>
    <section class="container">
        <div class="row p-4">
            <a href="./" class="btn btn-success mr-2">HOME</a>
        </div>
        <div class="row justify-content-center">
            <h4 class="text-center col-md-12 mb-4">
                Cambie los datos de la pelicula a editar
            </h4>
            <?php
                $peli_id = $_GET['id'];
                // echo $peli_id;
                $queryPeli = "SELECT * FROM peliculas WHERE peli_id = {$peli_id}";
                $queryPeliRes = mysqli_query($conexion, $queryPeli);
                $peliFila = mysqli_fetch_assoc($queryPeliRes);
                // echo "<pre>";
                // print_r($peliFila);
                // echo "</pre>";
            
            ?>
            <form class="col-md-6" method="post">
                <div class="form-group">
                    <label for="pelicula">Nombre de la Pelicula</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="pelicula" 
                        name="peli_nombre"
                        value="<?php echo $peliFila['peli_nombre']; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="genero">Género</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="genero" 
                        name="peli_genero"
                        value="<?php echo $peliFila['peli_genero']; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha de estreno</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        id="fecha" 
                        name="peli_fechaEstreno"
                        value="<?php echo $peliFila['peli_fechaEstreno']; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="restricciones">Restricciones</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="restricciones" 
                        name="peli_restricciones"
                        value="<?php echo $peliFila['peli_restricciones']; ?>"
                    >
                </div>
                <div class="form-group">
                    <label for="imagen">URL imagen</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="imagen" 
                        name="peli_img"
                        value="<?php echo $peliFila['peli_img']; ?>"
                    >
                </div>
                <div class="form-group">
                    <?php
                        $query = "SELECT dire_id, CONCAT(dire_nombres, ' ', dire_apellidos) AS director FROM directores";
                        $res = mysqli_query($conexion, $query);
                        // echo "<pre>";
                        // print_r($res);
                        // echo "</pre>";
                    ?>
                    <label for="director">Director</label>
                    <select name="peli_dire_id" id="director" class="form-control">
                        <option value="" disabled selected>- Selecciona un director -</option>
                        <?php
                            while($fila = mysqli_fetch_assoc($res)){
                                // 2
                                $dire_id = $fila['dire_id'];
                                // 6
                                $peli_dire_id = $peliFila['peli_dire_id'];

                                if($dire_id == $peli_dire_id){
                                    ?>
                                        <option selected value="<?php echo $fila['dire_id']; ?>">
                                            <?php echo $fila['director']; ?>
                                        </option>
                                <?php }
                                else {
                                    ?>
                                        <option value="<?php echo $fila['dire_id']; ?>">
                                            <?php echo $fila['director']; ?>
                                        </option>
                                <?php }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="editar" value="Editar">
                </div>
            </form>
            <?php
                if(isset($_POST['editar'])){
                    $peli_nombre = $_POST['peli_nombre'];
                    $peli_genero = $_POST['peli_genero'];
                    $peli_fechaEstreno = $_POST['peli_fechaEstreno'];
                    $peli_restricciones = $_POST['peli_restricciones'];
                    $peli_img = $_POST['peli_img'];
                    $peli_dire_id = $_POST['peli_dire_id'];

                    $queryUpdate = "UPDATE peliculas SET peli_nombre = '{$peli_nombre}', peli_genero = '{$peli_genero}', peli_fechaEstreno = '{$peli_fechaEstreno}', peli_restricciones = '{$peli_restricciones}', peli_img = '{$peli_img}', peli_dire_id = {$peli_dire_id} WHERE peli_id = {$peli_id}";          
                    mysqli_query($conexion, $queryUpdate);

                    header("Location: ./");
                }
            ?>
        </div>
    </section>
</body> 
</html>
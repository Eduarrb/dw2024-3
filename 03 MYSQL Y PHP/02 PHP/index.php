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
            <a href="#" class="btn btn-success mr-2">Subir Pelicula</a>
            <a href="#" class="btn btn-info">Directores</a>
        </div>
        <div class="row">
            <!-- 
                CRUD
                C -> CREATE
                R -> READ
                U -> UPDATE
                D -> DELETE 💥💥 OJO
            -->

            <?php
                $nombre = "Pepito";
                $num = 1;
                // echo $nombre;
                // echo "<br>";
                $array = ['joshi', false, 0];
                // echo $array
                // echo "<pre>";
                // print_r($array);
                // echo "</pre>";

                function saludar($nombre) {
                    echo "hola $nombre";
                }

                // saludar($nombre);

                $conexion = mysqli_connect('localhost', 'root', 'web12345678', 'stream');
                // echo "<pre>";
                // print_r($conexion);
                // echo "</pre>";
                // if(!$conexion) {
                //     echo "Fallo en la conexion";
                // }

                $consulta = "SELECT * FROM peliculas";
                $query_res = mysqli_query($conexion, $consulta);
                /*
                echo "<pre>";
                print_r($query_res);
                echo "</pre>";
                */
                // $fila = mysqli_fetch_array($query_res);
                $fila = mysqli_fetch_assoc($query_res);
                echo "<pre>";
                print_r($fila);
                echo "</pre>";
            ?>

            <div class="col-md-3 mb-3">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4a/Oppenheimer_%28film%29.jpg/220px-Oppenheimer_%28film%29.jpg" alt="" style="width: 100%">
                <h4>Oppenheimer</h4>
                <div>
                    <strong>Director: </strong>Christopher Nolan
                </div>
                <div>
                    <strong>Rating: </strong>PG-16
                </div>
                <div>
                    <a href="#" class="btn btn-success">editar</a>
                    <a href="#" class="btn btn-danger">borrar</a>
                </div>
            </div>
            
        </div>
    </section>
</body>
</html>
<?php
    require_once("db.php");
    ob_start();

    $peli_id = $_GET['id'];
    // echo $peli_id;

    // 💥💥💥💥 CON MUCHO CUIDADO O BAJO SU RESPONSABILIDAD
    $query = "DELETE FROM peliculas WHERE peli_id = {$peli_id}";
    mysqli_query($conexion, $query);

    header("Location: ./");

?>
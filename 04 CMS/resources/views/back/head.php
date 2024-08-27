<?php
    if(!isset($_COOKIE['email'])){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_nombres']);
        unset($_SESSION['user_apellidos']);
        unset($_SESSION['user_rol']);
        redirect("../login.php");
    }
    if(!isset($_SESSION['user_rol'])){
        redirect("../");
    }
    if($_SESSION['user_rol'] != 'admin') {
        redirect("../");
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
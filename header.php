<?php
    if (getenv('HOSTNAME')) {
        $containerID = getenv('HOSTNAME');
        $containerName = gethostname();
        echo "<script>console.log('Este script se está ejecutando en el contenedor: ID:$containerID Name:$containerName');</script>";
    } else {
        echo "<script>console.log('No se puede determinar el ID o el nombre del contenedor.')</script>";
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>GP - Group 06</title>
</head>

<body>
    <nav class="navbar  bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">IA - Global Project - ASIX2 - GRUP 06</a>
        </div>
    </nav>
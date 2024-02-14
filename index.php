<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="content">
        <?php
        if (getenv('HOSTNAME')) {
            $containerName = getenv('HOSTNAME');
            echo "<script>console.log('Este script se está ejecutando en el contenedor: $containerName');</script>";
        } else {
            echo "<script>console.log('No se puede determinar el nombre del contenedor.')</script>";
        }
        ?>
    </div>
    <div class="content">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-black">IA - Global Project - ASIX2 - GRUP 06</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link activ text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=" welcome position-absolute top-50 start-50 translate-middle">
            <span>Projecte GP1 - ASIX2 - 2024 - 14/02/2024</span><br>
            <button class="position-absolute top-50 start-50 translate-middle button" onclick="window.location.href='page_installation.php'">Accedeix!</button><br>
            <span class="text-gray ">Grup 06</span>
        </div>
    </div>
</body>

</html>

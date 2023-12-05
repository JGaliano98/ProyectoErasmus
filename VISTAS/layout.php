<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoescuela Fuentezuelas</title>
    <link rel="stylesheet" href="Styles/estilos.css">
</head>

<body id = "fondo">

    <div class="fondoInicio">
        
        <div id="divHeader">
            <?php
                require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/VISTAS/header.php';
            ?>
        </div>

        <div id="cuerpo">
            <?php
                require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/VISTAS/enrutador.php';
            ?>
        </div>

        <div id="divFooter">
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/VISTAS/footer.php';
            ?>
        </div>

    </div>
</body>

</html>

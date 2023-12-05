<?php
if (isset($_GET['menu'])) {
    $rutaBase = $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/';

    if ($_GET['menu'] == "login") {
        require_once $rutaBase . '/Forms/login_form.php';
    }
    if ($_GET['menu'] == "registro") {
        require_once $rutaBase . '/Forms/registro_form.php';
    }
    if ($_GET['menu'] == "crearConv") {
        require_once $rutaBase . '/Forms/crearConvocatoria.php';
    }
}
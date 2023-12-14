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
    if ($_GET['menu'] == "administrador") {
        require_once $rutaBase . '/Forms/administrador.php';
    }
    if ($_GET['menu'] == "verConv") {
        require_once $rutaBase . '/Forms/verConvocatorias.php';
    }
    if ($_GET['menu'] == "actualizarConv") {
        require_once $rutaBase . '/Forms/actualizarConvocatoria.php';
    }
    if ($_GET['menu'] == "actualizarConvocatoriaForm") {
        require_once $rutaBase . '/Forms/actualizarConvocatoria_form.php';
    }
    if ($_GET['menu'] == "alumno") {
        require_once $rutaBase . '/Forms/alumno.php'; 
    }
    if ($_GET['menu'] == "verSolicitudesDisp") {
        require_once $rutaBase . '/Forms/verSolicitudesDisponibles.php'; 
    }
    if ($_GET['menu'] == "verEstadoSolicitudes") {
        require_once $rutaBase . '/Forms/estadoSolicitudes.php'; 
    }
    if ($_GET['menu'] == "baremarConvocatorias") {
        require_once $rutaBase . '/Forms/baremacion.php';
    }


}
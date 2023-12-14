<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$verSolicitudes = isset($_POST['btnVerSolicitudes']);
$verEstado = isset($_POST['btnVerEstado']);

$cerrarSesion = isset($_POST['btnCerrarSesion']);

if($verSolicitudes){
    
    header('Location:/ProyectoErasmus/index.php?menu=verSolicitudesDisp');
}

if($verEstado){
    
    header('Location:/ProyectoErasmus/index.php?menu=verEstadoSolicitudes');
}


if($cerrarSesion){

    session::cerrarSesion();

    header('Location:/ProyectoErasmus/index.php?menu=login');
    
}



?>

<div class="contenidoAlumno">
        <form method="post">

            <div id="divTituloAlumno">
                <label id="tituloAlumno">BIENVENIDO ALUMNO </label>
            </div>

            <div id="divBotonesAlumno">
                <div id="divbtnVerSolicitudes">
                    <input type="submit" value="Ver Solicitudes Disponibles" name="btnVerSolicitudes" id="btnVerSolicitudes">
                </div>
                <div id="divbtnbtnVerEstado">
                    <input type="submit" value="Ver Estado de las Solicitudes" name="btnVerEstado" id="btnVerEstado">
                </div>
                
                <div id="divbtnCerrarSesion">
                    <input type="submit" value="Cerrar Sesión" name="btnCerrarSesion" id="btnCerrarSesion">
                </div>

            </div>

        </form>
    </div>
<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$registrarse = isset($_POST['btnRegistro']);
$acceder = isset($_POST['btnAcceder']);

if ($registrarse) {

    header('Location: /ProyectoErasmus/index.php?menu=registro');

}

if ($acceder) {

    

}

?>
<div class="contenidoLogin">
    <form method="post">
        <div id="infologin">
            <div id="divTitulo">
                <label id="tituloLogin">LOGIN</label>
            </div>
            <div id="divUsuario">
                <div id="lblNombreUsuario">
                    <label>Nombre de Usuario:</label>
                </div>
                <div id="divtxtNombreUsuario">
                    <input type="text" name="txtNombreUsuario" id="txtNombreUsuario">
                </div>
            </div>
            <div id="divContraseña">
                <div id="lblContraseña">
                    <label>Contraseña:</label>
                </div>
                <div id="divtxtContraseña">
                    <input type="text" name="txtContraseña" id="txtContraseña">
                </div>
            </div>
            <div id="divBotones">
          
                    <input type="submit" value="Acceder" name="btnAcceder" id="btnAcceder">
               
               
                    <input type="submit" value="Registrarse" name="btnRegistro" id="btnRegistro">
            
            </div>
        </div>
    </form>
</div>

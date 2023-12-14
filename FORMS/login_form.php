<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$registrarse = isset($_POST['btnRegistro']);
$acceder = isset($_POST['btnAcceder']);


if ($registrarse) {

    header('Location: /ProyectoErasmus/index.php?menu=registro');

}

if ($acceder) {

    $usuario = $_POST['txtNombreUsuario'];
    $contraseña = $_POST['txtContraseña'];


    $existe = funcionesLogin::existeUsuario($usuario, $contraseña);

    if ($existe == true) {

        funcionesLogin::logIn($usuario);


        $user=RP_Candidato::BuscarPorDNI($usuario);

        if($user->getRol() == 'Administrador'){
            
            header('Location: /ProyectoErasmus/index.php?menu=administrador');

        } 

        if($user->getRol() == 'Alumno'){
 
            header('Location: /ProyectoErasmus/index.php?menu=alumno');
        }

    }else{
        echo "No existe el usuario";
    }
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
                    <label>DNI:</label>
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

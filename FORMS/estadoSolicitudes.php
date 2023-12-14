<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$volver = isset($_POST['btnVolverVerEst']);

if($volver){

    header('Location:/ProyectoErasmus/index.php?menu=alumno');

}

// $mostrar = RP_Convocatoria::MostrarTodoArray();
// $i = 0;

//Aqui iria el mostrar las solicitudes de un alumno concreto

?>

<div class="VerSolicitudes">
        <form method="post">

            <div id="divTituloverSolicitudes">
                <label id="tituloVerSolicitudes">VER ESTADO DE TUS SOLICITUDES</label>
            </div>

            <div id="contenidoVerSolicitudes">
                <table class="tablaMostrarSol" id="tablaMostrarSol">
                    <tr>
                        <th>NOMBRE CONVOCATORIA</th>
                        <th>FECHA SOLICITUD</th>
                        <th>DESTINO</th>
                        <th>ESTADO</th>
                    </tr>
                    <?php
                    // foreach ($mostrar as $key):
                    ?>
                    <tr>
                        <td name="Nombre_Convocatoria">Convocatoria 1</td>
                        <td name="FechaSolicitud">2023-12-05 18:00:00</td>  
                        <td name="Destino">Londres</td>
                        <td style="background-color: orange" name="Estado1" id="Estado1"> Baremando</td>
                    </tr>
                    <tr>
                        <td name="Nombre_Convocatoria">Convocatoria 2</td>
                        <td name="FechaSolicitud">2023-12-05 18:00:00</td>  
                        <td name="Destino">Lisboa</td>
                        <td style="background-color: red" name="Estado2" class="Estado2"> Rechazada</td>
                    </tr>
                    <?php
                    //$i++;
                    //endforeach;
                    ?>
                </table>
            </div>

            <div id="divbtnVolver">
                <input type="submit" value="Volver" name="btnVolverVerEst" id="btnVolverVerEst">
            </div>

        </form>
    </div>

    <?php
    
    // for ($j = 0; $j < $i; $j++) {
    //     if (isset($_POST['btnSolicitarSol' . $j])) {
    
            
            
    //     }
    // }
  
?>
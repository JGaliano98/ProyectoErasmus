<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$volver = isset($_POST['btnVolverVerSol']);

if($volver){

    header('Location:/ProyectoErasmus/index.php?menu=alumno');

}

$mostrar = RP_Convocatoria::MostrarTodoArray();
$i = 0;


?>

<div class="VerSolicitudes">
        <form method="post">

            <div id="divTituloverSolicitudes">
                <label id="tituloVerSolicitudes">VER SOLICITUDES DISPONIBLES</label>
            </div>

            <div id="contenidoVerSolicitudes">
                <table class="tablaMostrarSol" id="tablaMostrarSol">
                    <tr>
                        <th>NOMBRE CONVOCATORIA</th>
                        <th>PLAZAS</th>
                        <th>DIAS</th>
                        <th>DESTINO</th>
                        <th>FOTOGRAFIA</th>
                        <th>ARCHIVOS</th>
                        <th>SOLICITAR</th>
                        
                    </tr>
                    <?php
                    foreach ($mostrar as $key):
                    ?>
                    <tr>
                        <td name="Nombre_Convocatoria<?php echo $i ?>"><?php echo $key->getNombre(); ?></td>
                        <td name="Plazas<?php echo $i ?>"><?php echo $key->getMovilidades(); ?></td>  
                        <td name="Dias<?php echo $i ?>"><?php echo $key->getDias(); ?></td>
                        <td name="Destino<?php echo $i ?>"><?php echo $key->getDestino(); ?></td>
                        <form method="post">
                        
                        <td>
                            
                                <input type="submit" id="btnFoto" name="btnFoto<?php echo $i ?>" value="Fotografia">
                           
                        </td>
                        <td>
                            
                            <input type="submit" id="btnPDF" name="btnPDF<?php echo $i ?>" value="Adjuntar Documentos">
                       
                        </td>
                        <td>
                          
                                <input type="submit" id="btnSolicitarSol" name="btnSolicitarSol<?php echo $i ?>" id="btnSolicitarSol" value="Solicitar">
                            
                        </td>
                        </form>
                        
                    </tr>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                </table>
            </div>

            <div id="divbtnVolver">
                <input type="submit" value="Volver" name="btnVolverVerSol" id="btnVolverVerSol">
            </div>

        </form>
    </div>

    <?php
    
    for ($j = 0; $j < $i; $j++) {
        if (isset($_POST['btnSolicitarSol' . $j])) {
    
            echo('Solicitada');
            
        }

        if (isset($_POST['btnFoto' . $j])) {
    
            ?><script>
            // Redireccionar a /ProyectoErasmus/index.php?menu=pdf
            window.location.href = '/ProyectoErasmus/index.php?menu=webcam';
        </script>
        <?php
            
        }

        
       
    }

    for ($j = 0; $j < $i; $j++) {
        if (isset($_POST['btnPDF' . $j])) {
    
            ?><script>
                // Redireccionar a /ProyectoErasmus/index.php?menu=pdf
                window.location.href = '/ProyectoErasmus/index.php?menu=pdf';
            </script>
            <?php
            
        }

       
    }

   
  
?>
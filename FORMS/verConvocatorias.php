<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$volver = isset($_POST['btnVolverVerConv']);

if($volver){

    header('Location:/ProyectoErasmus/index.php?menu=administrador');

}

$mostrar = RP_Convocatoria::MostrarTodoArray();
$i = 0;


?>

<div class="VerConvocatorias">
        <form method="post">

            <div id="divTituloVerConvocatoria">
                <label id="tituloVerConvocatoria">VER Y BORRAR CONVOCATORIAS</label>
            </div>

            <div id="contenidoVerConvocatorias">
                <table class="tablaMostrar" id="tablaMostrar">
                    <tr>
                        <th>ID CONVOCATORIA</th>
                        <th>NOMBRE</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA RES. DEFINITIVA</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php
                    foreach ($mostrar as $key):
                    ?>
                    <tr>
                        <td name="ID_Convocatoria<?php echo $i ?>"><?php echo $key->getID_Convocatoria(); ?></td>
                        <td name="nombre<?php echo $i ?>"><?php echo $key->getNombre(); ?></td>
                        <td name="fechaInicio<?php echo $i ?>"><?php echo $key->getFechaInicioSolicitudes(); ?></td>
                        <td name="fechaDef<?php echo $i ?>"><?php echo $key->getFechaListaDefinitiva(); ?></td>
                        <td>
                            <form method="post">
                                <input type="submit" id="btnBorrar" name="btnBorrar<?php echo $i ?>" id="botonBorrar" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                </table>
            </div>

            <div id="divbtnVolver">
                <input type="submit" value="Volver" name="btnVolverVerConv" id="btnVolverVerConv">
            </div>

        </form>
    </div>

    <?php
    
    for ($j = 0; $j < $i; $j++) {
        if (isset($_POST['btnBorrar' . $j])) {
            RP_Convocatoria::BorraPorID($mostrar[$j]->getID_Convocatoria());
    
            echo '<script>window.location.href="?menu=verConv";</script>';
        }
    }



   
    
    ?>
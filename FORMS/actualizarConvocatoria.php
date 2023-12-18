<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

session_start(); 

$mostrar = RP_Convocatoria::MostrarTodoArray();
$i = 0;
$fechaActual = date('Y-m-d'); // Obtener la fecha actual en el formato YYYY-MM-DD

$volver = isset($_POST['btnVolverVerConv']);




if ($volver) {

    header('Location:/ProyectoErasmus/index.php?menu=administrador');

}



?>

<div class="VerConvocatorias">
    <form method="post">

        <div id="divTituloVerConvocatoria">
            <label id="tituloVerConvocatoria">ACTUALIZAR CONVOCATORIAS</label>
        </div>

        <div id="contenidoVerConvocatorias">
            <table class="tablaMostrarActualizar" id="tablaMostrarActualizar">
                <tr>
                    <th>ID CONVOCATORIA</th>
                    <th>NOMBRE</th>
                    <th>FECHA INICIO</th>
                    <th>FECHA RES. DEFINITIVA</th>
                    <th>ACTUALIZAR</th>
                </tr>
                <?php
                foreach ($mostrar as $key):
                    $fechaInicio = $key->getFechaInicioSolicitudes();

                    // Comparar la fecha de inicio con la fecha actual para que solo muestre las que están dentro de fecha aun
                    if ($fechaInicio > $fechaActual){
                ?>
                        <tr>
                            <td name="ID_Convocatoria<?php echo $i ?>"><?php echo $key->getID_Convocatoria(); ?></td>
                            <td name="nombre<?php echo $i ?>"><?php echo $key->getNombre(); ?></td>
                            <td name="fechaInicio<?php echo $i ?>"><?php echo $fechaInicio; ?></td>
                            <td name="fechaDef<?php echo $i ?>"><?php echo $key->getFechaListaDefinitiva(); ?></td>
                            <td>
                                <form method="post">
                                    <!-- uso el hidden para obtener un campo oculto con el valor de la ID_Convocatoria -->
                                    <input type="hidden" name="ID_Convocatoria<?php echo $i ?>" value="<?php echo $key->getID_Convocatoria(); ?>">
                                    <input type="submit" id="btnActualizar" name="btnActualizar<?php echo $i ?>" id="botonActualizar" value="Actualizar">
                                </form>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
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
    if (isset($_POST['btnActualizar' . $j])) {

        $ID = $_POST['ID_Convocatoria'.$j];

        
        header('Location:/ProyectoErasmus/index.php?menu=actualizarConvocatoriaForm&&ID_Convocatoria='.$ID);

    }
}

?>
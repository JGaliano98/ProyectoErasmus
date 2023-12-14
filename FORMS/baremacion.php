<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$mostrar = RP_Convocatoria::MostrarTodoArray();
$i = 0;
$fechaActual = date('Y-m-d'); // Obtener la fecha actual en el formato YYYY-MM-DD

$volver = isset($_POST['btnVolverVerConv']);

if ($volver) {

    header('Location:/ProyectoErasmus/index.php?menu=administrador');

}

?>


<script src="../JS/pdf.js"></script>
<div class="VerConvocatorias">
    <form method="post">

        <div id="divTituloVerConvocatoria">
            <label id="tituloVerConvocatoria">VER BAREMOS</label>
        </div>

        <div id="contenidoVerConvocatorias">
            <table class="tablaBaremo" id="tablaBaremo">
                <tr>
                    <th>ID CONVOCATORIA</th>
                    <th>DNI CANDIDATO</th>
                    <th>NOTA MEDIA</th>
                    <th>IDIOMA</th>
                    <th>IDONEIDAD</th>
                    <th>ENTREVISTA</th>
                    <th>FALLO</th>
                </tr>
                
                        <tr>
                            <td name="ID_Convocatoria<?php echo $i ?>">4</td>
                            <td name="DNI<?php echo $i ?>">77274785H</td>
                            <td name="nota<?php echo $i ?>">
                                <form method="post">
                                    <input type="submit" id="btnNota" name="nota<?php echo $i ?>" id="btnNota" value="Mostrar PDF">
                                </form>
                            </td>
                            <td name="idioma<?php echo $i ?>">
                                <form method="post">
                                    <input type="submit" id="btnidioma" name="idioma<?php echo $i ?>" id="btnidioma" value="Mostrar PDF">
                                </form>
                            </td>
                            <td name="idoneidad<?php echo $i ?>">
                                <form method="post">
                                    <input type="submit" id="btnidoneidad" name="idoneidad<?php echo $i ?>" id="btnidoneidad" value="Mostrar PDF">
                                </form>
                            </td>
                            <td name="entrevista<?php echo $i ?>">REALIZADA</td>
                            <td>
                                <form method="post">
                                    <input type="submit" id="btnAceptarBeca" name="btnAceptarBeca<?php echo $i ?>" id="btnAceptarBeca" value="Aceptar">
                                    <input type="submit" id="btnRechazarBeca" name="btnRechazarBeca<?php echo $i ?>" id="btnRechazarBeca" value="Denegar">
                                </form>
                            </td>
                        </tr>
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
        
        header('Location:/ProyectoErasmus/index.php?menu=actualizarConvocatoriaForm');

    }
}
?>
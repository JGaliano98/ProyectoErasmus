<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

//variables para la recolección de datos:

$solicitar = isset($_POST['btnSolicitar']);

$volver = isset($_POST['btnVolver']);

if($volver){

    header('Location:/ProyectoErasmus/index.php?menu=administrador');
}



if($solicitar){

 
    $nombreConvocatoria =$_POST['txtNombre'];
    $proyecto= $_POST['proyecto'];
    $destinatarios = $_POST['destinatarios'];
    $numMovilidades =  $_POST['txtNumeroMovilidades'];
    $diasMovilidad = $_POST['txtDias'];
    $destino = $_POST['txtDestino'];

    if($diasMovilidad<90){
        $tipo='Corta Duración';
    }else if($diasMovilidad >=90){
        $tipo= 'Larga duración';  
    }

    $fechaInicioSolicitudes =  $_POST['txtFechaInicioSolicitudes'];
    $fechaFinSolicitudes = $_POST['txtFechaFinSolicitudes'];

    $fechaInicioPruebas = $_POST['txtFechaInicioPruebas'];
    $fechaFinPruebas = $_POST['txtFechaFinPruebas'];

    $fechaProvisional = $_POST['txtFechaProvisional'];
    $fechaDefinitivo = $_POST['txtFechaDefinitivo'];

    $notaMaxima = $_POST['notaMax'];
    $notaMin = $_POST['notaMin'];
    $requisito = $_POST['requisitos'];
    $aportaAlumno = $_POST['aportaAlumno'];


    $notaMaximaIdioma = $_POST['notaMaxIdioma'];



    //Creo el objeto convocatoria


    $convocatoria = new Convocatoria(1, $numMovilidades, $diasMovilidad, $tipo, $destino, $fechaInicioSolicitudes,$fechaFinSolicitudes,$fechaInicioPruebas,$fechaFinPruebas,$fechaProvisional,$fechaDefinitivo,$proyecto, $nombreConvocatoria);

    $result=RP_Convocatoria::InsertaObjeto($convocatoria);

    if($result==true){
        echo 'Convocatoria creada correctamente';
    }else{
        echo 'Error al crear la convocatoria';
    }


    $convocatoriaObtenida = RP_Convocatoria::BuscarPorNombre($nombreConvocatoria);


    //Obtiene el valor de la convocatoria introducida
    $idConvocatoria = $convocatoriaObtenida->getID_Convocatoria();

    //Para obtener los destinatarios

    foreach ($destinatarios as $destinatario) 
    {
        // Crea las tablas
        $destinatarioInsertado = new Destinatario_Convocatoria("", $idConvocatoria, $destinatario);
        RP_DestinatarioConvocatoria::InsertaObjeto($destinatarioInsertado);

    }

    //Para la tabla de los Items

    // Asumiendo que todos los arrays tienen la misma longitud
    $longitud = count($notaMaxima);

    for ($i = 0; $i < $longitud; $i++) {

        $convocatoriaBaremo = new Convocatoria_Baremo("",$idConvocatoria, $i+1, $notaMaxima[$i], $notaMin[$i], $requisito[$i], $aportaAlumno[$i] );

        RP_ConvocatoriaBaremo::InsertaObjeto($convocatoriaBaremo);

    }

    //Para la tabla de idiomas

    $longitudIdioma = count($notaMaximaIdioma);

    $convocatoriaBaremoidioma=null;

    for ($i = 0; $i < $longitudIdioma; $i++) {

        $convocatoriaBaremoidioma = new Convocatoria_Baremo_Idioma("",$idConvocatoria, $i+1, $notaMaximaIdioma[$i]);


        RP_ConvocatoriaBaremoIdioma::InsertaObjeto($convocatoriaBaremoidioma);

    }

}





?>
    <div class="contenidoConvocatoria">
        <form method="post">

            <div id="divTituloConvocatoria">
                <label id="tituloConvocatoria">ACTUALIZAR CONVOCATORIA EXISTENTE</label>
            </div>

            <div id="todaConvocatoria">
                <div id="infoConvocatoria">
                    

                    <div id="divNombre">
                        <div id="lblNombre">
                            <label>Nombre:</label>
                        </div>
                        <div id="divTxtNombre">
                            <input type="text" name="txtNombre" id="txtNombre">
                        </div>
                    </div>

                    <div id="divProyecto">
                        <div id="lblNombre">
                            <label>Proyecto al que pertenece:</label>
                        </div>
                        <div id="CBProyecto">
                            <select name="proyecto" class="proyectos" id="txtPoyectos">
                                <?php
                                // Obtiene todos los proyectos
                                $proyectos = RP_Proyecto::MostrarTodo();

                                // Genera las opciones del select utilizando un bucle
                                foreach ($proyectos as $proyecto) {
                                    ?>
                                <option value = "<?php echo $proyecto->getID_Proyecto()?>"><?php echo $proyecto->getNombre() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    
                    <div id="divMovilidades">
                        <div id="lblMovilidades">
                            <label>Número de movilidades:</label>
                        </div>
                        <div id="divTxtMovilidades">
                            <input type="number" id="txtNumeroMovilidades" name="txtNumeroMovilidades" min="1" max="6" value="1">
                        </div>
                    </div>

                    <div id="divDestino">
                        <div id="lblDestino">
                            <label>Destino:</label>
                        </div>
                        <div id="divTxtDestino">
                            <input type="input" name="txtDestino" id="txtDestino">
                        </div>
                    </div>


                    <div id="divDias">
                        <div id="lblDias">
                            <label>Dias de movilidad:</label>
                        </div>
                        <div id="divTxtDias">
                            <input type="text" name="txtDias" id="txtDias">
                        </div>
                    </div>

                    <div id="divDestinatario">
                        <div id="lblDestinatario">
                            <label id="lblDestinatario">Destinatarios:</label>
                        </div>
                        <?php
                        // Obtiene todos los destinatarios:
                        $destinatarios = RP_Destinatario::MostrarTodo();
                        
                        foreach ($destinatarios as $destinatario) {
                        ?>
                            <input type="checkbox" name="destinatarios[]" value ="<?php echo $destinatario->getCodigoGrupo()?>">
                            <label><?php echo $destinatario->getCodigoGrupo(); ?></label>
                        <?php
                        }
                        ?>
                    </div>

                </div>

                

                <div id="divFechas">

                    <div id="divFechaInicioSolicitudes">
                        <div id="lblFechaInicioSolicitudes">
                            <label>Fecha de  Inicio de la Solicitud:</label>
                        </div>
                        <div id="divTxtFechaInicioSolicitudes">
                            <input type="datetime-local" name="txtFechaInicioSolicitudes" id="txtFechaInicioSolicitudes">
                        </div>
                    </div>


                    <div id="divFechaFinSolicitudes">
                        <div id="lblFechaFinSolicitudes">
                            <label>Fecha de Fin de la Solicitud:</label>
                        </div>
                        <div id="divTxtFechaFinSolicitudes">
                            <input type="datetime-local" name="txtFechaFinSolicitudes" id="txtFechaFinSolicitudes">
                        </div>
                    </div>


                    <div id="divFechaInicioPruebas">
                        <div id="lblFechaInicioPruebas">
                            <label>Fecha de  Inicio de las Pruebas:</label>
                        </div>
                        <div id="divTxtFechaInicioPruebas">
                            <input type="datetime-local" name="txtFechaInicioPruebas" id="txtFechaInicioPruebas">
                        </div>
                    </div>
                    <div id="divFechaFinPruebas">
                        <div id="lblFechaFinPruebas">
                            <label>Fecha de Fin de las Pruebas:</label>
                        </div>
                        <div id="divTxtFechaFinPruebas">
                            <input type="datetime-local" name="txtFechaFinPruebas" id="txtFechaFinPruebas">
                        </div>
                    </div>



                    <div id="divFechaProvisional">
                        <div id="lblFechaProvisional">
                            <label>Fecha de publicación del listado provisional:</label>
                        </div>
                        <div id="divTxtFechaProvisional">
                            <input type="datetime-local" name="txtFechaProvisional" id="txtFechaProvisional">
                        </div>
                    </div>
                    <div id="divFechaDefinitivo">
                        <div id="lblFechaFinPruebas">
                            <label>Fecha de publicación del listado definitivo:</label>
                        </div>
                        <div id="divTxtFechaDefinitivo">
                            <input type="datetime-local" name="txtFechaDefinitivo" id="txtFechaDefinitivo">
                        </div>
                    </div>

                </div>



                <div id="divTablaItems">
                    <table id="tablaItems">
                        <thead>
                            <tr>
                                <th>Items</th>
                                <th>Nota Máxima</th>
                                <th>Requisito</th>
                                <th>Nota Mínima</th>
                                <th>Aporta Alumno</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                                

                                //Obtiene todos los itemBaremables
                                $itemBaremables = RP_ItemBaremable::MostrarTodo();
                    
                                // Genera las opciones del select utilizando un bucle
                                foreach ($itemBaremables as $itemBaremable) 
                                {
                            ?>
                                    <tr>
                                        <td id="nombreItems"><?php echo $itemBaremable->getNombre() ?></td>
                                        <td><input id="" type = "number" name = "notaMax[]" class = "notaMax" min = "0" max = "4" value = "2"></td>
                                        <td>
                                            <select name = "requisitos[]" class = "requisitos">
                                                <option value = "0">Sí</option>
                                                <option value = "1">No</option>
                                            </select>
                                        </td>
                                        <td><input type = "number" name = "notaMin[]" class = "notaMin" min = "0" max = "4" value = "2"></td>
                                        <td>
                                            <select name = "aportaAlumno[]" class = "aportaAlumno">
                                                <option value = "0">Sí</option>
                                                <option value = "1">No</option>
                                            </select>
                                        </td>
                                    </tr>

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div id="divTablaIdiomas">
                    <table id="tablaIdiomas">
                        <thead>
                            <tr>
                                <th>Nivel</th>
                                <th>Nota Máxima</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                                require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
                                Autoload::Autoload();

                                //Obtiene todos los itemBaremables
                                $itemBaremables = RP_NivelIdioma::MostrarTodo();

                    
                                // Genera las opciones del select utilizando un bucle
                                foreach ($itemBaremables as $itemBaremable) 
                                {
                            ?>
                                    <tr>
                                        <td id="nombreNivel"><?php echo $itemBaremable->getNombre() ?></td>
                                        <td><input type = "number" name = "notaMaxIdioma[]" class = "notaMaxIdioma" min = "0" max = "4" value = "2"></td>
                                    </tr>

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>

                </div>

                <div id="divBotonesConvocatoria">
                    <div id="btnSolicitar">
                        <input type="submit" value="Actualizar" name="btnSolicitar" id="btnSolicitar">
                    </div>
                    <div id="btnVolver">
                        <input type="submit" value="Volver" name="btnVolver" id="btnVolver">
                    </div>
                </div>


            </div>
        </form>
    </div>

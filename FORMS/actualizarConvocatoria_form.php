<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

//variables para la recolección de datos:

$solicitar = isset($_POST['btnSolicitar']);

$volver = isset($_POST['btnVolver']);

$ID_Convocatoria_Actualizar = $_GET['ID_Convocatoria'];
//var_dump($ID_Convocatoria_Actualizar);

//Para obtener el ID de la convocatoria

$datos = RP_Convocatoria::BuscarPorID($ID_Convocatoria_Actualizar);

//Para obtener los datos de los destinatarios en la convocatoria:

$datosDestinatario = RP_DestinatarioConvocatoria::BuscarPorID_Convocatoria($ID_Convocatoria_Actualizar);
//var_dump($datosDestinatario);

//Para obtener los datos de los items baremables en la convocatoria:

$datosConvocatoriaBaremo = RP_ConvocatoriaBaremo::BuscarPorID_Convocatoria($ID_Convocatoria_Actualizar);
//var_dump($datosConvocatoriaBaremo);


//Para obtener los datos de los niveles de idiomas







if($volver){

    header('Location:/ProyectoErasmus/index.php?menu=administrador');
}



if($solicitar){

 
    $nombreConvocatoria =$_POST['txtNombre'];
    $proyecto= $_POST['proyecto'];
    //$destinatarios = $_POST['destinatarios'];
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


    $result=RP_Convocatoria::ActualizaPorID($ID_Convocatoria_Actualizar,$convocatoria);








    //var_dump($convocatoria); 

    if($result==true){
        header('Location:/ProyectoErasmus/index.php?menu=actualizarConvocatoriaForm&&ID_Convocatoria='.$ID_Convocatoria_Actualizar);
    }else{
        echo 'Error al actualizar la convocatoria';
    }


    $convocatoriaObtenida = RP_Convocatoria::BuscarPorNombre($nombreConvocatoria);


    //Obtiene el valor de la convocatoria introducida

    $idConvocatoria = $convocatoriaObtenida->getID_Convocatoria();


    //Para la tabla de los Items

    // Asumiendo que todos los arrays tienen la misma longitud
     $longitud = count($notaMaxima);

    for ($i = 0; $i < $longitud; $i++) {

        $convocatoriaBaremo = new Convocatoria_Baremo("",$idConvocatoria, $i+1, $notaMaxima[$i], $notaMin[$i], $requisito[$i], $aportaAlumno[$i] );

        //RP_ConvocatoriaBaremo::InsertaObjeto($convocatoriaBaremo);
        //RP_ConvocatoriaBaremo::ActualizaPorID($ID_Convocatoria_Actualizar,$convocatoriaBaremo);

    }

    // //Para la tabla de idiomas

    // $longitudIdioma = count($notaMaximaIdioma);

    // $convocatoriaBaremoidioma=null;

    // for ($i = 0; $i < $longitudIdioma; $i++) {

    //     $convocatoriaBaremoidioma = new Convocatoria_Baremo_Idioma("",$idConvocatoria, $i+1, $notaMaximaIdioma[$i]);


    //     RP_ConvocatoriaBaremoIdioma::InsertaObjeto($convocatoriaBaremoidioma);

    // }

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
                            <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $datos->getNombre()?>">
                        </div>
                    </div>

                    <div id="divProyecto">
                        <div id="lblNombre">
                            <label>Proyecto al que pertenece:</label>
                        </div>
                        <div id="CBProyecto">
                            <select name="proyecto" class="proyectos" id="txtPoyectos" >
                                <?php

                                $convoc = RP_Convocatoria::BuscarPorID($ID_Convocatoria_Actualizar);
                                $idproy = $convoc->getID_Proyecto(); 
                                
                                $proyectoActual = RP_Proyecto::BuscarPorID($idproy);
                                // Obtiene todos los proyectos
                                $proyectos = RP_Proyecto::MostrarTodo();

                                // Genera las opciones del select utilizando un bucle
                                foreach ($proyectos as $proyecto) {
                                    ?>
                                <option value ="0"><?php echo $proyectoActual->getNombre()?> </option>
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
                            <input type="number" id="txtNumeroMovilidades" name="txtNumeroMovilidades" min="1" max="6" value="<?php echo $datos->getMovilidades()?>">
                        </div>
                    </div>

                    <div id="divDestino">
                        <div id="lblDestino">
                            <label>Destino:</label>
                        </div>
                        <div id="divTxtDestino">
                            <input type="input" name="txtDestino" id="txtDestino" value="<?php echo $datos->getDestino()?>">
                        </div>
                    </div>


                    <div id="divDias">
                        <div id="lblDias">
                            <label>Dias de movilidad:</label>
                        </div>
                        <div id="divTxtDias">
                            <input type="text" name="txtDias" id="txtDias" value="<?php echo $datos->getDias()?>">
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
                            <input type="datetime-local" name="txtFechaInicioSolicitudes" id="txtFechaInicioSolicitudes" value="<?php echo $datos->getFechaInicioSolicitudes()?>">
                        </div>
                    </div>


                    <div id="divFechaFinSolicitudes">
                        <div id="lblFechaFinSolicitudes">
                            <label>Fecha de Fin de la Solicitud:</label>
                        </div>
                        <div id="divTxtFechaFinSolicitudes">
                            <input type="datetime-local" name="txtFechaFinSolicitudes" id="txtFechaFinSolicitudes" value="<?php echo $datos->getFechaFinSolicitudes()?>">
                        </div>
                    </div>


                    <div id="divFechaInicioPruebas">
                        <div id="lblFechaInicioPruebas">
                            <label>Fecha de  Inicio de las Pruebas:</label>
                        </div>
                        <div id="divTxtFechaInicioPruebas">
                            <input type="datetime-local" name="txtFechaInicioPruebas" id="txtFechaInicioPruebas" value="<?php echo $datos->getFechaInicioPruebas()?>">
                        </div>
                    </div>
                    <div id="divFechaFinPruebas">
                        <div id="lblFechaFinPruebas">
                            <label>Fecha de Fin de las Pruebas:</label>
                        </div>
                        <div id="divTxtFechaFinPruebas">
                            <input type="datetime-local" name="txtFechaFinPruebas" id="txtFechaFinPruebas" value="<?php echo $datos->getFechaFinPruebas()?>">
                        </div>
                    </div>



                    <div id="divFechaProvisional">
                        <div id="lblFechaProvisional">
                            <label>Fecha de publicación del listado provisional:</label>
                        </div>
                        <div id="divTxtFechaProvisional">
                            <input type="datetime-local" name="txtFechaProvisional" id="txtFechaProvisional" value="<?php echo $datos->getFechaListaProvisional()?>">
                        </div>
                    </div>
                    <div id="divFechaDefinitivo">
                        <div id="lblFechaFinPruebas">
                            <label>Fecha de publicación del listado definitivo:</label>
                        </div>
                        <div id="divTxtFechaDefinitivo">
                            <input type="datetime-local" name="txtFechaDefinitivo" id="txtFechaDefinitivo" value="<?php echo $datos->getFechaListaDefinitiva()?>">
                        </div>
                    </div>

                </div>



                <div id="divTablaItems">
                    <table id="tablaItems">
                        <!-- Encabezados de la tabla -->
                        <thead>
                            <tr>
                                <th>Items</th>
                                <th>Nota Máxima</th>
                                <th>Requisito</th>
                                <th>Nota Mínima</th>
                                <th>Aporta Alumno</th>
                            </tr>
                        </thead>

                        <!-- Cuerpo de la tabla -->
                        <tbody>
                            <?php
                            
                            

                            for ($i=0; $i<4; $i++) {

                                // Obtiene todos los itemBaremables
                                $itemBaremables = RP_ItemBaremable::BuscarPorID($i+1);


                                $datosConvocatoriaBaremo = RP_ConvocatoriaBaremo::BuscarPorID_ConvocatoriaeID_Item($ID_Convocatoria_Actualizar, $i+1);
                                //var_dump($datosConvocatoriaBaremo);
                                
                                //var_dump($datosConvocatoriaBaremo);
                                // Obtiene los valores
                                $notaMaxima = $datosConvocatoriaBaremo->getNotaMax();
                                $requisito = $datosConvocatoriaBaremo->getRequisito();
                                $notaMinima = $datosConvocatoriaBaremo->getNotaMin();
                                $aportaAlumno = $datosConvocatoriaBaremo->getAportaAlumno();
                            ?>
                                <tr>
                                    <!-- Celdas de la tabla -->
                                    <td id="nombreItems"><?php echo $itemBaremables->getNombre() ?></td>
                                    <td><input id="" type="number" name="notaMax[]" class="notaMax" min="0" max="4" value="<?php echo $notaMaxima ?>"></td>
                                    <td>
                                        <select name="requisitos[]" class="requisitos">
                                            <option value="0" <?php echo $requisito == 0 ? 'selected' : ''; ?>>Sí</option>
                                            <option value="1" <?php echo $requisito == 1 ? 'selected' : ''; ?>>No</option>
                                        </select>
                                    </td>
                                    <td><input type="number" name="notaMin[]" class="notaMin" min="0" max="4" value="<?php echo $notaMinima ?>"></td>
                                    <td>
                                        <select name="aportaAlumno[]" class="aportaAlumno">
                                            <option value="0" <?php echo $requisito == 0 ? 'selected' : ''; ?>>Sí</option>
                                            <option value="1" <?php echo $requisito == 1 ? 'selected' : ''; ?>>No</option>
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

                            for ($i = 0; $i <6; $i++) {

                                // Obtiene todos los niveles de idioma
                                $nivelesIdioma = RP_NivelIdioma::BuscarPorID($i+1);

                                // Obtiene los datos de ConvocatoriaBaremoIdioma
                                $datosNivelesIdioma = RP_ConvocatoriaBaremoIdioma::BuscarPorID_ConvocatoriaeID_Idioma($ID_Convocatoria_Actualizar, $i+1);

                                ?>
                                <tr>
                                    <td id="nombreNivel"><?php echo $nivelesIdioma->getNombre() ?></td>
                                    <td><input type="number" name="notaMaxIdioma[]" class="notaMaxIdioma" min="0" max="4" value="<?php echo $datosNivelesIdioma -> getNota() ?>"></td>
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

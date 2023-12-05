<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();
?>
    <div class="contenidoConvocatoria">
        <form method="post">
            <div id="infoConvocatoria">
                <div id="divTituloConvocatoria">
                    <label id="tituloConvocatoria">CREAR UNA NUEVA CONVOCATORIA</label>
                </div>

                <div id="divNombre">
                    <div id="lblNombre">
                        <label>Nombre:</label>
                    </div>
                    <div id="divTxtNombre">
                        <input type="text" name="txtNombre">
                    </div>
                </div>

                <div id="divProyecto">
                    <div id="lblNombre">
                        <label>Proyecto al que pertenece:</label>
                    </div>
                    <div id="CBProyecto">
                        <select name="proyecto[]" class="proyectos">
                            <?php
                            // Obtiene todos los proyectos
                            $proyectos = RP_Proyecto::MostrarTodo();

                            // Genera las opciones del select utilizando un bucle
                            foreach ($proyectos as $proyecto) {
                                ?>
                                <option><?php echo $proyecto->getNombre() ?></option>
                                <?php
                            }
                            ?>
                        </select>
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
                        <input type="checkbox">
                        <label><?php echo $destinatario->getCodigoGrupo(); ?></label>
                    <?php
                    }
                    ?>
                </div>
                
                <div id="divMovilidades">
                    <div id="lblMovilidades">
                        <label>Número de movilidades:</label>
                    </div>
                    <div id="divTxtMovilidades">
                        <input type="number" name="txtNumeroMovilidades" min="1" max="6" value="1">
                    </div>
                </div>


                <div id="divDias">
                    <div id="lblDias">
                        <label>Dias de movilidad:</label>
                    </div>
                    <div id="divTxtDias">
                        <input type="text" name="txtDias">
                    </div>
                </div>


                <div id="divFechaInicioSolicitudes">
                    <div id="lblFechaInicioSolicitudes">
                        <label>Fecha de  Inicio de la Solicitud:</label>
                    </div>
                    <div id="divTxtFechaInicioSolicitudes">
                        <input type="datetime-local" name="txtFechaInicioSolicitudes">
                    </div>
                </div>


                <div id="divFechaFinSolicitudes">
                    <div id="lblFechaFinSolicitudes">
                        <label>Fecha de Fin de la Solicitud:</label>
                    </div>
                    <div id="divTxtFechaFinSolicitudes">
                        <input type="datetime-local" name="txtFechaFinSolicitudes">
                    </div>
                </div>


                <div id="divFechaInicioPruebas">
                    <div id="lblFechaInicioPruebas">
                        <label>Fecha de  Inicio de las Pruebas:</label>
                    </div>
                    <div id="divTxtFechaInicioPruebas">
                        <input type="datetime-local" name="txtFechaInicioPruebas">
                    </div>
                </div>
                <div id="divFechaFinPruebas">
                    <div id="lblFechaFinPruebas">
                        <label>Fecha de Fin de las Pruebas:</label>
                    </div>
                    <div id="divTxtFechaFinPruebas">
                        <input type="datetime-local" name="txtFechaFinPruebas">
                    </div>
                </div>



                <div id="divFechaProvisional">
                    <div id="lblFechaProvisional">
                        <label>Fecha de publicación del listado provisional:</label>
                    </div>
                    <div id="divTxtFechaProvisional">
                        <input type="datetime-local" name="txtFechaProvisional">
                    </div>
                </div>
                <div id="divFechaDefinitivo">
                    <div id="lblFechaFinPruebas">
                        <label>Fecha de publicación del listado definitivo:</label>
                    </div>
                    <div id="divTxtFechaDefinitivo">
                        <input type="datetime-local" name="txtFechaDefinitivo">
                    </div>
                </div>

                <div id="divTablaItems">
                    <table border="1px">
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
                                        <td><?php echo $itemBaremable->getNombre() ?></td>
                                        <td><input type = "number" name = "notaMax[]" class = "notaMax" min = "0" max = "4" value = "2"></td>
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
                    <table border="1px" >
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
                                        <td><?php echo $itemBaremable->getNombre() ?></td>
                                        <td><input type = "number" name = "notaMax[]" class = "notaMax" min = "0" max = "4" value = "2"></td>
                                    </tr>

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>

                </div>

                
                <div id="divBotonesConvocatoria">
                    <div id="btnSolicitar">
                        <input type="submit" value="Solicitar" name="btnSolicitar" id="btnSolicitar">
                    </div>
                </div>


            </div>
        </form>
    </div>

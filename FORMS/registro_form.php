<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

$acceder = isset($_POST['btnAccederReg']) ? $_POST['btnAccederReg'] :'';

if ($acceder) {

    header('Location: /ProyectoErasmus/index.php?menu=login');

}



?>

<div class="contenidoRegistro">
    <form method="post">
        <div id="inforegistro">

            <div id="divTituloReg">
                <label id="tituloRegistro">NUEVO CANDIDATO</label>
            </div>

            <div id="divContenidoReg">

                <div id="divIzquierda">

                    <div id="divDNIReg">
                        <div id="divlblDNIReg">
                            <label>DNI:</label>
                        </div>
                        <div id="divtxtDNIReg">
                            <input type="text" name="txtDNI" id="txtDNI">
                        </div>
                    </div>

                    <div id="divContraseñaReg">
                        <div id="lblContraseñaReg">
                            <label>Contraseña:</label>
                        </div>
                        <div id="divtxtContraseñaReg">
                            <input type="text" name="txtContraseñaReg" id="txtContraseñaReg">
                        </div>
                    </div>

                    <div id="divNombreReg">
                        <div id="lblNombreReg">
                            <label>Nombre:</label>
                        </div>
                        <div id="divtxtNombreReg">
                            <input type="text" name="txtNombreReg" id="txtNombreReg">
                        </div>
                    </div>

                    <div id="divAp1Reg">
                        <div id="lblAp1Reg">
                            <label>Primer Apellido:</label>
                        </div>
                        <div id="divtxtAp1Reg">
                            <input type="text" name="txtAp1Reg" id="txtAp1Reg">
                        </div>
                    </div>

                    <div id="divAp2Reg">
                        <div id="lblAp2Reg">
                            <label>Segundo Apellido:</label>
                        </div>
                        <div id="divtxtAp2Reg">
                            <input type="text" name="txtAp2Reg" id="txtAp2Reg">
                        </div>
                    </div>

                    <div id="divTelefonoReg">
                        <div id="lblTelefonoReg">
                            <label>Teléfono:</label>
                        </div>
                        <div id="divtxtTelefonoReg">
                            <input type="text" name="txtTelefonoReg" id="txtTelefonoReg">
                        </div>
                    </div>

                </div>

                <div id="divDerecha">

                    <div id="divNacimientoReg">
                        <div id="lblNacimientoReg">
                            <label>Fecha de Nacimiento:</label>
                        </div>
                        <div id="divtxtNacimientoReg">
                            <input type="date" name="txtNacimientoReg" id="txtNacimientoReg">
                        </div>
                    </div>

                    <div id="divCursoReg">
                        <div id="lblCursoReg">
                            <label>Curso:</label>
                        </div>
                        <div id="divtxtCursoReg">
                            <select name="comboboxDestinatarios" id="txtCursoReg">
                                <?php
                                // Obtiene todos los destinatarios:
                                $destinatarios = RP_Destinatario::MostrarTodo();
                                
                                foreach ($destinatarios as $destinatario) {
                                ?>
                                    <option value="<?php echo $destinatario->getCodigoGrupo(); ?>"><?php echo $destinatario->getCodigoGrupo(); ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div id="divCorreoReg">
                        <div id="lblCorreoReg">
                            <label>Correo Electrónico:</label>
                        </div>
                        <div id="divtxtCorreoReg">
                            <input type="text" name="txtCorreoReg" id="txtCorreoReg">
                        </div>
                    </div>

                    <div id="divDomicilioReg">
                        <div id="lblDomicilioReg">
                            <label>Domicilio:</label>
                        </div>
                        <div id="divtxtDomicilioReg">
                            <input type="text" name="txtDomicilioReg" id="txtDomicilioReg">
                        </div>
                    </div>


                    <div id="divTutorReg">
                        <div id="lblTutorReg">
                            <label>Tutor Legal (-18):</label>
                        </div>
                        <div id="divtxtTutorReg">
                            <input type="text" name="txtTutorReg" id="txtTutorReg">
                        </div>
                    </div>

                </div>

                
                <div id="divBotonesReg">

                    <div id="divBtnAccederReg">
                        <input type="submit" value="Acceder" name="btnAccederReg" id="btnAccederReg">
                    </div>

                    <div id="divBtnRegistroReg">
                        <input type="submit" value="Registrarse" name="btnRegistroReg" id="btnRegistroReg">
                    </div>
                        
                </div>

            </div>
            
        </div>
    </form>
</div>



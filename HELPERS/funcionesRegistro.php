<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class funcionesRegistro {

    public static function registraUsuario($objeto){

       
        RP_Candidato::InsertaObjeto($objeto);

        echo "Registrado con éxito";

    }
}

?>
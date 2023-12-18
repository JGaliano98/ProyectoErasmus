<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class RP_DestinatarioConvocatoria{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Destinatario_Convocatoria");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $codigo_grupo=$tuplas->codigo_grupo;
     

            $DestinatarioConvocatoria = new Destinatario_Convocatoria ($ID, $ID_Convocatoria, $codigo_grupo);

            $array[]=$DestinatarioConvocatoria;
            
        }
        return $array;
        //return $DestinatarioConvocatoria;

    }

    public static function BuscarPorID($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Destinatario_Convocatoria where ID=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $codigo_grupo=$tuplas->codigo_grupo;
     

            $DestinatarioConvocatoria = new Destinatario_Convocatoria ($ID, $ID_Convocatoria, $codigo_grupo);

            //$array[]=$DestinatarioConvocatoria;
            
        }
        //return $DestinatarioConvocatoria;
        return $DestinatarioConvocatoria;

    }

    public static function BuscarPorID_Convocatoria($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Destinatario_Convocatoria where ID_Convocatoria=$id");
        $array=null;

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $codigo_grupo=$tuplas->codigo_grupo;
     

            $DestinatarioConvocatoria = new Destinatario_Convocatoria ($ID, $ID_Convocatoria, $codigo_grupo);

            $array[]=$DestinatarioConvocatoria;
            
        }
        //return $DestinatarioConvocatoria;
        return $array;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Destinatario_Convocatoria where ID=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Destinatario_Convocatoria SET  ID_Convocatoria='{$objeto->ID_Convocatoria}',
        codigo_grupo='{$objeto->codigo_grupo}'");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();
   
       
        $ID_Convocatoria = $objeto->getIDConvocatoria();
        $codigo_grupo=$objeto->getCodigoGrupo();

        $resultado=$conexion->exec("INSERT INTO Destinatario_Convocatoria ( ID_Convocatoria, codigo_grupo) VALUES ( '$ID_Convocatoria', '$codigo_grupo')");

    }

}

?>
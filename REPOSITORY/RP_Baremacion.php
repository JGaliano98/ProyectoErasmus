<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

class RP_Baremacion{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Baremacion");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID =$tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $ID_Item=$tuplas->ID_Item;
            $DNI_Candidato = $tuplas->DNI_Candidato;
            $nota = $tuplas->nota;
            $URL = $tuplas->URL;

            $Baremacion = new Baremacion ($ID, $ID_Convocatoria, $ID_Item, $DNI_Candidato, $nota, $URL);

            //$array[]=$Baremacion;
            
        }
        //return $Baremacion;
        return $Baremacion;

    }

    public static function BuscarPorID($id){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado = $conexion->query("Select * from Baremacion where ID=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID =$tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $ID_Item=$tuplas->ID_Item;
            $DNI_Candidato = $tuplas->DNI_Candidato;
            $nota = $tuplas->nota;
            $URL = $tuplas->URL;

            $Baremacion = new Baremacion ($ID, $ID_Convocatoria, $ID_Item, $DNI_Candidato, $nota, $URL);

            //$array[]=$Baremacion;
            
        }
        //return $Baremacion;
        return $Baremacion;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Baremacion where ID=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Baremacion SET ID_Convocatoria='{$objeto->ID_Convocatoria}', ID_Item='{$objeto->ID_Item}', DNI_Candidato='{$objeto->DNI_Candidato}', nota='{$objeto->nota}', URL='{$objeto->URL}' WHERE ID={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();
   
        $ID = 0;
        $ID_Convocatoria = $objeto->ID_Convocatoria;
        $ID_Item=$objeto->ID_Item;
        $DNI_Candidato = $objeto->DNI_Candidato;
        $nota = $objeto->nota;
        $URL = $objeto->URL;

        $resultado=$conexion->exec("INSERT INTO Baremacion (ID, ID_Convocatoria, ID_Item, DNI_Candidato, nota, URL ) VALUES ('$ID','$ID_Convocatoria', '$ID_Item', '$DNI_Candidato', '$nota', '$URL')");

    }

}

?>
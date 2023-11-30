<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

class RP_ConvocatoriaBaremo{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Convocatoria_Baremo");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $ID_Item=$tuplas->ID_Item;
            $notaMax = $tuplas->notaMax;
            $notaMin = $tuplas->notaMin;
            $requisito = $tuplas->requisito;
            $aportaAlumno = $tuplas->aportaAlumno;

            $ConvocatoriaBaremo = new Convocatoria_Baremo ($ID, $ID_Convocatoria, $ID_Item, $notaMax, $notaMin, $requisito, $aportaAlumno);

            //$array[]=$ConvocatoriaBaremo;
            
        }
        //return $ConvocatoriaBaremo;
        return $ConvocatoriaBaremo;

    }

    public static function BuscarPorID($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Convocatoria_Baremo where ID=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $id;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $ID_Item=$tuplas->ID_Item;
            $notaMax = $tuplas->notaMax;
            $notaMin = $tuplas->notaMin;
            $requisito = $tuplas->requisito;
            $aportaAlumno = $tuplas->aportaAlumno;

            $ConvocatoriaBaremo = new Convocatoria_Baremo ($ID, $ID_Convocatoria, $ID_Item, $notaMax, $notaMin, $requisito, $aportaAlumno);

            //$array[]=$ConvocatoriaBaremo;
            
        }
        //return $ConvocatoriaBaremo;
        return $ConvocatoriaBaremo;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Convocatoria_Baremo where ID=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Convocatoria_Baremo SET ID='{$objeto->ID}', ID_Convocatoria='{$objeto->ID_Convocatoria}',
        ID_Item='{$objeto->ID_Item}', notaMax='{$objeto->notaMax}', notaMin='{$objeto->notaMin}',
        requisito='{$objeto->requisito}', aportaAlumno='{$objeto->aportaAlumno}' WHERE ID={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();
   
        $ID= 0;
        $ID_Convocatoria = $objeto->ID_Convocatoria;
        $ID_Item=$objeto->ID_Item;
        $notaMax = $objeto->notaMax;
        $notaMin = $objeto->notaMin;
        $requisito = $objeto->requisito;
        $aportaAlumno = $objeto->aportaAlumno;

        $resultado=$conexion->exec("INSERT INTO Convocatoria_Baremo (ID, ID_Convocatoria, ID_Item, notaMax, notaMin, requisito, aportaAlumno) VALUES ('$ID', '$ID_Convocatoria', '$ID_Item', '$notaMax', '$notaMin', '$requisito', '$aportaAlumno')");

    }




}

?>
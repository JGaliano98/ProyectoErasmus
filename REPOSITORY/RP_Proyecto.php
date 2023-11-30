<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

class RP_Proyecto{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Proyecto");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID_Proyecto=$tuplas->ID_Proyecto;
            $codigo_proyecto = $tuplas->codigo_proyecto;
            $nombre = $tuplas->nombre;
            $fecha_inicio = $tuplas->fecha_inicio;
            $fecha_fin = $tuplas->fecha_fin;

            $Proyecto = new Proyecto ($ID_Proyecto, $codigo_proyecto, $nombre, $fecha_inicio, $fecha_fin);

            //$array[]=$Proyecto;
            
        }
        //return $array;
        return $Proyecto;

    }

    public static function BuscarPorID($id){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado = $conexion->query("Select * from Proyecto where ID_Proyecto=$id");

        while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {

            $ID_Proyecto = $tuplas->ID_Proyecto;
            $codigo_proyecto = $tuplas->codigo_proyecto;
            $nombre = $tuplas->nombre;
            $fecha_inicio = $tuplas->fecha_inicio;
            $fecha_fin = $tuplas->fecha_fin;


            $Proyecto = new Proyecto ($ID_Proyecto, $codigo_proyecto, $nombre, $fecha_inicio, $fecha_fin);

            //$array[]=$Proyecto;
        
        }
        //return $array;
        return $Proyecto;

    }

    public static function BuscaPorCodigoProyecto($codigo_proyecto){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado = $conexion->query("Select * from Proyecto where codigo_proyecto='$codigo_proyecto'");

        while ($tuplas=$resultado->fetch(PDO::FETCH_OBJ)) {


            $ID_Proyecto = $tuplas->ID_Proyecto;
            $codigo_proyecto = $tuplas->codigo_proyecto;
            $nombre = $tuplas->nombre;
            $fecha_inicio = $tuplas->fecha_inicio;
            $fecha_fin = $tuplas->fecha_fin;


            $Proyecto = new Proyecto ($ID_Proyecto, $codigo_proyecto, $nombre, $fecha_inicio, $fecha_fin);

            //$array[]=$Proyecto;

        }
        //return $array;
        return $Proyecto;
   }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Proyecto where ID_Proyecto=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Proyecto SET codigo_proyecto='{$objeto->codigo_proyecto}', nombre='{$objeto->nombre}', fecha_inicio='{$objeto->fecha_inicio}', fecha_fin='{$objeto->fecha_fin}' WHERE ID_Proyecto={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();

        $ID_Proyecto = 0;
        $codigo_proyecto = $objeto->codigo_proyecto;
        $nombre = $objeto->nombre;
        $fecha_inicio = $objeto->fecha_inicio;
        $fecha_fin = $objeto->fecha_fin;

        $resultado=$conexion->exec("INSERT INTO Proyecto (ID_Proyecto, codigo_proyecto, nombre, fecha_inicio, fecha_fin) VALUES ('$ID_Proyecto','$codigo_proyecto' ,'$nombre' , $fecha_inicio, $fecha_fin)");

    }

}

?>
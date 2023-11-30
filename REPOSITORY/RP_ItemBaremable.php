<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

class RP_ItemBaremable{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Item_Baremable");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID_Item=$tuplas->ID_Item;
            $nombre = $tuplas->nombre;

            $Item = new ItemBaremable ($ID_Item, $nombre);

            //$array[]=$Item;
            
        }
        //return $Item;
        return $Item;

    }

    public static function BuscarPorID($id){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado = $conexion->query("Select * from Item_Baremable where ID_Item=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID_Item=$tuplas->ID_Item;
            $nombre = $tuplas->nombre;

            $Item = new ItemBaremable ($ID_Item, $nombre);

            //$array[]=$Item;
            
        }
        //return $Item;
        return $Item;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Item_Baremable where ID_Item=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Item_Baremable SET  nombre='{$objeto->nombre}' WHERE ID_Item={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();

        $ID_Item = 0;
        $nombre = $objeto->nombre;

        $resultado=$conexion->exec("INSERT INTO Item_Baremable (ID_Item, nombre) VALUES ('$ID_Item','$nombre')");

    }

}

?>
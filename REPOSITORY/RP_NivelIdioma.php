<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/Proyecto/Helpers/Autoload.php';
Autoload::Autoload();

class RP_NivelIdioma{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Nivel_Idioma");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID_Idioma=$tuplas->ID_Idioma;
            $nombre = $tuplas->nombre;

            $NivelIdioma = new NivelIdioma ($ID_Idioma, $nombre);

            //$array[]=$NivelIdioma;
            
        }
        //return $NivelIdioma;
        return $NivelIdioma;

    }

    public static function BuscarPorID($id){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado = $conexion->query("Select * from Nivel_Idioma where ID_Idioma=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $ID_Idioma=$tuplas->ID_Idioma;
            $nombre = $tuplas->nombre;

            $NivelIdioma = new NivelIdioma ($ID_Idioma, $nombre);

            //$array[]=$NivelIdioma;
            
        }
        //return $NivelIdioma;
        return $NivelIdioma;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Nivel_Idioma where ID_Idioma=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Nivel_Idioma SET  nombre='{$objeto->nombre}' WHERE ID_Idioma={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();

        $ID_Idioma = 0;
        $nombre = $objeto->nombre;
        

        $resultado=$conexion->exec("INSERT INTO Nivel_Idioma (ID_Idioma, nombre) VALUES ('$ID_Idioma','$nombre')");

    }

}

?>
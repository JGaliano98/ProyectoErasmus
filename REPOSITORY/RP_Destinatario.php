<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class RP_Destinatario{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Destinatario");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $codigo_grupo=$tuplas->codigo_grupo;
            $nombre = $tuplas->nombre;

            $Destinatario = new Destinatario ($codigo_grupo, $nombre);

            $array[]=$Destinatario;
            
        }
        return $array;
        //return $Destinatario;

    }

    public static function BuscarPorCodigoGrupo($cod){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado = $conexion->query("Select * from Destinatario where codigo_grupo=$cod");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){


            $codigo_grupo=$cod;
            $nombre = $tuplas->nombre;

            $Destinatario = new Destinatario ($codigo_grupo, $nombre);

            //$array[]=$Destinatario;
            
        }
        //return $Destinatario;
        return $Destinatario;

    }

    public static function BorraPorCodigoGrupo($cod){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Destinatario where codigo_grupo=$cod");

    }

    public static function ActualizaPorCodigoGrupo($cod, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Destinatario SET  nombre='{$objeto->nombre}' WHERE codigo_grupo={$cod}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();

        $codigo_grupo = $objeto->codigo_grupo;
        $nombre = $objeto->nombre;
        

        $resultado=$conexion->exec("INSERT INTO Destinatario (ID_Idioma, nombre) VALUES ('$codigo_grupo','$nombre')");

    }

}

?>
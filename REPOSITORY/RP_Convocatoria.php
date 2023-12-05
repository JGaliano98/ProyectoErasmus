<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class RP_Convocatoria{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Convocatoria");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $movilidades=$tuplas->movilidades;
            $dias = $tuplas->dias;
            $tipo = $tuplas->tipo;
            $destino = $tuplas->destino;
            $fecha_inicio_solicitudes = $tuplas->fecha_inicio_solicitudes;
            $fecha_fin_solicitudes = $tuplas->fecha_fin_solicitudes;
            $fecha_inicio_pruebas = $tuplas->fecha_inicio_pruebas;
            $fecha_fin_pruebas = $tuplas->fecha_fin_pruebas;
            $fecha_lista_provisional = $tuplas->fecha_lista_provisional;
            $fecha_lista_definitiva = $tuplas->fecha_lista_definitiva;
            $ID_Proyecto = $tuplas->ID_Proyecto;

            $Convocatoria = new Convocatoria ($ID_Convocatoria, $movilidades, $dias, $tipo, $destino, $fecha_inicio_solicitudes, $fecha_fin_solicitudes, $fecha_inicio_pruebas, $fecha_fin_pruebas, $fecha_lista_provisional, $fecha_lista_definitiva, $ID_Proyecto);

            //$array[]=$Convocatoria;
            
        }
        //return $Convocatoria;
        return $Convocatoria;

    }

    public static function BuscarPorID($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Convocatoria where ID_Convocatoria=$id");


        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $movilidades=$tuplas->movilidades;
            $dias = $tuplas->dias;
            $tipo = $tuplas->tipo;
            $destino = $tuplas->destino;
            $fecha_inicio_solicitudes = $tuplas->fecha_inicio_solicitudes;
            $fecha_fin_solicitudes = $tuplas->fecha_fin_solicitudes;
            $fecha_inicio_pruebas = $tuplas->fecha_inicio_pruebas;
            $fecha_fin_pruebas = $tuplas->fecha_fin_pruebas;
            $fecha_lista_provisional = $tuplas->fecha_lista_provisional;
            $fecha_lista_definitiva = $tuplas->fecha_lista_definitiva;
            $ID_Proyecto = $tuplas->ID_Proyecto;

            $Convocatoria = new Convocatoria ($ID_Convocatoria, $movilidades, $dias, $tipo, $destino, $fecha_inicio_solicitudes, $fecha_fin_solicitudes, $fecha_inicio_pruebas, $fecha_fin_pruebas, $fecha_lista_provisional, $fecha_lista_definitiva, $ID_Proyecto);

            //$array[]=$Convocatoria;
            
        }
        //return $Convocatoria;
        return $Convocatoria;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Convocatoria where ID=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Convocatoria SET ID_Convocatoria='{$objeto->ID_Convocatoria}', movilidades='{$objeto->movilidades}',
        dias='{$objeto->dias}', tipo='{$objeto->tipo}', destino='{$objeto->destino}', fecha_inicio_solicitudes='{$objeto->fecha_inicio_solicitudes}',
        fecha_fin_solicitudes='{$objeto->fecha_fin_solicitudes}', fecha_inicio_pruebas='{$objeto->fecha_inicio_pruebas}', fecha_fin_pruebas='{$objeto->fecha_fin_pruebas}',
        fecha_lista_provisional='{$objeto->fecha_lista_provisional}', fecha_lista_definitiva='{$objeto->fecha_lista_definitiva}',
         ID_Proyecto='{$objeto->ID_Proyecto}' WHERE ID_Convocatoria={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();
   
        $ID_Convocatoria = 0;
        $movilidades=$objeto->movilidades;
        $dias = $objeto->dias;
        $tipo = $objeto->tipo;
        $destino = $objeto->destino;
        $fecha_inicio_solicitudes = $objeto->fecha_inicio_solicitudes;
        $fecha_fin_solicitudes = $objeto->fecha_fin_solicitudes;
        $fecha_inicio_pruebas = $objeto->fecha_inicio_pruebas;
        $fecha_fin_pruebas = $objeto->fecha_fin_pruebas;
        $fecha_lista_provisional = $objeto->fecha_lista_provisional;
        $fecha_lista_definitiva = $objeto->fecha_lista_definitiva;
        $ID_Proyecto = $objeto->ID_Proyecto;

        $resultado=$conexion->exec("INSERT INTO Convocatoria (ID_Convocatoria, movilidades, dias, tipo, destino, fecha_inicio_solicitudes, fecha_fin_solicitudes,
        fecha_inicio_pruebas, fecha_fin_pruebas, fecha_lista_provisional, fecha_lista_definitiva, ID_Proyecto ) VALUES ('$ID_Convocatoria', '$movilidades', '$dias', '$tipo',
        '$destino', '$fecha_inicio_solicitudes', '$fecha_fin_solicitudes', '$fecha_inicio_pruebas', '$fecha_fin_pruebas', '$fecha_lista_provisional',
        '$fecha_lista_definitiva', '$ID_Proyecto')");

    }
}

?>
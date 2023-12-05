<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class RP_ConvocatoriaBaremoIdioma{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();
        

        $resultado= $conexion->query("Select * from Convocatoria_Baremo_Idioma");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $ID_Idioma=$tuplas->ID_Idioma;
            $nota = $tuplas->nota;
     

            $ConvocatoriaBaremoidioma = new Convocatoria_Baremo_Idioma ($ID, $ID_Convocatoria, $ID_Idioma, $nota);

            $array[]=$ConvocatoriaBaremoidioma;
            
        }
        return $array;
        //return $ConvocatoriaBaremoidioma;

    }

    public static function BuscarPorID($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Convocatoria_Baremo_Idioma where ID=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $ID_Idioma=$tuplas->ID_Idioma;
            $nota = $tuplas->nota;
     

            $ConvocatoriaBaremoidioma = new Convocatoria_Baremo_Idioma ($ID, $ID_Convocatoria, $ID_Idioma, $nota);

            //$array[]=$ConvocatoriaBaremoidioma;
            
        }
        //return $ConvocatoriaBaremoidioma;
        return $ConvocatoriaBaremoidioma;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Convocatoria_Baremo_Idioma where ID=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Convocatoria_Baremo_Idioma SET ID='{$objeto->ID}', ID_Convocatoria='{$objeto->ID_Convocatoria}',
        ID_Idioma='{$objeto->ID_Idioma}', nota='{$objeto->nota}' WHERE ID={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();
   
       
        $ID= $objeto->ID;
        $ID_Convocatoria = $objeto->ID_Convocatoria;
        $ID_Idioma=$objeto->ID_Idioma;
        $nota = $objeto->nota;

        $resultado=$conexion->exec("INSERT INTO Convocatoria_Baremo_Idioma (ID, ID_Convocatoria, ID_Idioma, nota) VALUES ('$ID', '$ID_Convocatoria', '$ID_Idioma', '$nota')");

    }

}

?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class RP_CandidatoConvocatoria{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Candidato_Convocatoria");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Candidato = $tuplas->ID_Candidato;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $DNI_Candidato=$tuplas->DNI_Candidato;
            $nombre = $tuplas->nombre;
            $apellido1 = $tuplas->apellido1;
            $apellido2 = $tuplas->apellido2;
            $fecha_nacimiento = $tuplas->fecha_nacimiento;
            $curso=$tuplas->curso;
            $telefono = $tuplas->telefono;
            $correo = $tuplas->correo;
            $domicilio = $tuplas->domicilio;

            $Candidato = new CandidatoConvocatoria ($ID, $ID_Candidato, $ID_Convocatoria, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio);

            //$array[]=$Candidato;
            
        }
        //return $Candidato;
        return $Candidato;

    }

    public static function MostrarTodoArray(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Candidato_Convocatoria");
        $array=null;

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Candidato = $tuplas->ID_Candidato;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $DNI_Candidato=$tuplas->DNI_Candidato;
            $nombre = $tuplas->nombre;
            $apellido1 = $tuplas->apellido1;
            $apellido2 = $tuplas->apellido2;
            $fecha_nacimiento = $tuplas->fecha_nacimiento;
            $curso=$tuplas->curso;
            $telefono = $tuplas->telefono;
            $correo = $tuplas->correo;
            $domicilio = $tuplas->domicilio;

            $Candidato = new CandidatoConvocatoria ($ID, $ID_Candidato, $ID_Convocatoria, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio);

            $array[]=$Candidato;
            
        }
        //return $Candidato;
        return $array;

    }

    public static function BuscarPorID($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Candidato_Convocatoria where ID=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID= $tuplas->ID;
            $ID_Candidato = $tuplas->ID_Candidato;
            $ID_Convocatoria = $tuplas->ID_Convocatoria;
            $DNI_Candidato=$tuplas->DNI_Candidato;
            $nombre = $tuplas->nombre;
            $apellido1 = $tuplas->apellido1;
            $apellido2 = $tuplas->apellido2;
            $fecha_nacimiento = $tuplas->fecha_nacimiento;
            $curso=$tuplas->curso;
            $telefono = $tuplas->telefono;
            $correo = $tuplas->correo;
            $domicilio = $tuplas->domicilio;

            $Candidato = new CandidatoConvocatoria ($ID, $ID_Candidato, $ID_Convocatoria, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio);

            //$array[]=$Candidato;
            
        }
        //return $Candidato;
        return $Candidato;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Candidato_Convocatoria where ID=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Candidato_Convocatoria SET ID='{$objeto->ID}', ID_Candidato='{$objeto->ID_Candidato}', ID_Convocatoria='{$objeto->ID_Convocatoria}',
        DNI_Candidato='{$objeto->DNI_Candidato}', nombre='{$objeto->nombre}', apellido1='{$objeto->apellido1}',
        apellido2='{$objeto->apellido2}', fecha_nacimiento='{$objeto->fecha_nacimiento}',
        curso='{$objeto->curso}', telefono='{$objeto->telefono}', correo='{$objeto->correo}',
        domicilio='{$objeto->domicilio}' WHERE ID_Candidato={$id}");

    }

    public static function InsertaObjeto($objeto){

        $conexion=Conexion::AbreConexion();
   
        $ID= 0;
        $ID_Candidato = $objeto->ID_Candidato;
        $ID_Convocatoria = $objeto->ID_Convocatoria;
        $DNI_Candidato=$objeto->DNI_Candidato;
        $nombre = $objeto->nombre;
        $apellido1 = $objeto->apellido1;
        $apellido2 = $objeto->apellido2;
        $fecha_nacimiento = $objeto->fecha_nacimiento;
        $curso=$objeto->curso;
        $telefono = $objeto->telefono;
        $correo = $objeto->correo;
        $domicilio = $objeto->domicilio;

        $resultado=$conexion->exec("INSERT INTO Candidato_Convocatoria (ID, ID_Candidato, ID_Convocatoria, DNI_Candidato, nombre, apellido1, apellido2, fecha_nacimiento, curso, telefono, correo, domicilio) VALUES ('$ID','$ID_Candidato', '$ID_Convocatoria', '$DNI_Candidato', '$nombre', '$apellido1', '$apellido2', '$fecha_nacimiento', '$curso', '$telefono', '$correo', '$domicilio')");

    }

}

?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoErasmus/Helpers/Autoload.php';
Autoload::Autoload();

class RP_Candidato{

    public static function MostrarTodo(){

        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $array=null;

        $resultado= $conexion->query("Select * from Candidato");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID_Candidato = $tuplas->ID_Candidato;
            $DNI_Candidato=$tuplas->DNI_Candidato;
            $nombre = $tuplas->nombre;
            $apellido1 = $tuplas->apellido1;
            $apellido2 = $tuplas->apellido2;
            $fecha_nacimiento = $tuplas->fecha_nacimiento;
            $curso=$tuplas->curso;
            $telefono = $tuplas->telefono;
            $correo = $tuplas->correo;
            $domicilio = $tuplas->domicilio;
            $contraseña = $tuplas->contraseña;
            $rol = $tuplas->rol;
            $tutor = $tuplas->tutor;

            $Candidato = new Candidato ($ID_Candidato, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio, $contraseña, $rol, $tutor);

            $array[]=$Candidato;
            
        }
        return $array;

    }

    public static function BuscarPorID($id){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Candidato where ID_Candidato=$id");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID_Candidato = $id;
            $DNI_Candidato=$tuplas->DNI_Candidato;
            $nombre = $tuplas->nombre;
            $apellido1 = $tuplas->apellido1;
            $apellido2 = $tuplas->apellido2;
            $fecha_nacimiento = $tuplas->fecha_nacimiento;
            $curso=$tuplas->curso;
            $telefono = $tuplas->telefono;
            $correo = $tuplas->correo;
            $domicilio = $tuplas->domicilio;
            $contraseña = $tuplas->contraseña;
            $rol = $tuplas->rol;
            $tutor = $tuplas->tutor;

            $Candidato = new Candidato ($ID_Candidato, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio, $contraseña, $rol, $tutor);

            //$array[]=$Candidato;
            
        }
        //return $Candidato;
        return $Candidato;

    }


    public static function BuscarPorDNI($DNI){

        
        //Abrimos la conexión
        $conexion=Conexion::AbreConexion();

        $resultado= $conexion->query("Select * from Candidato where DNI_Candidato = '$DNI'");

        while($tuplas=$resultado->fetch(PDO::FETCH_OBJ)){

            $ID_Candidato = $tuplas->ID_Candidato;
            $DNI_Candidato=$DNI;
            $nombre = $tuplas->nombre;
            $apellido1 = $tuplas->apellido1;
            $apellido2 = $tuplas->apellido2;
            $fecha_nacimiento = $tuplas->fecha_nacimiento;
            $curso=$tuplas->curso;
            $telefono = $tuplas->telefono;
            $correo = $tuplas->correo;
            $domicilio = $tuplas->domicilio;
            $contraseña = $tuplas->contraseña;
            $rol = $tuplas->rol;
            $tutor = $tuplas->tutor;

            $Candidato = new Candidato ($ID_Candidato, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio, $contraseña, $rol, $tutor);

            //$array[]=$Candidato;
            
        }
        //return $Candidato;
        return $Candidato;

    }

    public static function BorraPorID($id){

        //Abrimos la conexion

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("Delete from Candidato where ID_Candidato=$id");

    }

    public static function ActualizaPorID($id, $objeto){

        $conexion = Conexion::AbreConexion();

        $resultado = $conexion->exec("UPDATE Candidato SET ID_Candidato='{$objeto->ID_Candidato}',
        DNI_Candidato='{$objeto->DNI_Candidato}', nombre='{$objeto->nombre}', apellido1='{$objeto->apellido1}',
        apellido2='{$objeto->apellido2}', fecha_nacimiento='{$objeto->fecha_nacimiento}',
        curso='{$objeto->curso}', telefono='{$objeto->telefono}', correo='{$objeto->correo}',
        domicilio='{$objeto->domicilio}', contraseña='{$objeto->contraseña}', rol='{$objeto->rol}',
        tutor='{$objeto->tutor}' WHERE ID_Candidato={$id}");

    }

    public static function InsertaObjeto($objeto) {
        $conexion = Conexion::AbreConexion();
    
        $ID_Candidato = 0;
        $DNI_Candidato = $objeto->getDNI_Candidato();
        $nombre = $objeto->getNombre();
        $apellido1 = $objeto->getApellido1();
        $apellido2 = $objeto->getApellido2();
        $fecha_nacimiento = $objeto->getFechaNacimiento();
        $curso = $objeto->getCurso();
        $telefono = $objeto->getTelefono();
        $correo = $objeto->getCorreo();
        $domicilio = $objeto->getDomicilio();
        $contraseña = $objeto->getContraseña();
        $rol = $objeto->getRol();
        $tutor = $objeto->getTutor();
    
        $resultado = $conexion->exec("INSERT INTO Candidato (ID_Candidato, DNI_Candidato, nombre, apellido1, apellido2, fecha_nacimiento, curso, telefono, correo, domicilio, contraseña, rol, tutor) VALUES ('$ID_Candidato', '$DNI_Candidato', '$nombre', '$apellido1', '$apellido2', '$fecha_nacimiento', '$curso', '$telefono', '$correo', '$domicilio', '$contraseña', '$rol', '$tutor')");
    }


}

?>
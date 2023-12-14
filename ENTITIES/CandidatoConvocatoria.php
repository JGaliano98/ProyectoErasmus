<?php

class CandidatoConvocatoria {
    private $ID;
    private $ID_Candidato;
    private $ID_Convocatoria;
    private $DNI_Candidato;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $fecha_nacimiento;
    private $curso;
    private $telefono;
    private $correo;
    private $domicilio;

    // Constructor
    public function __construct($ID, $ID_Candidato, $ID_Convocatoria, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio) {
        $this->ID = $ID;
        $this->ID_Candidato = $ID_Candidato;
        $this->ID_Convocatoria = $ID_Convocatoria;
        $this->DNI_Candidato = $DNI_Candidato;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->curso = $curso;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->domicilio = $domicilio;
    }

    // Getter para ID
    public function getID() {
        return $this->ID;
    }

    // Getters y Setters para las demás propiedades
    public function getID_Candidato() {
        return $this->ID_Candidato;
    }

    public function setID_Candidato($ID_Candidato) {
        $this->ID_Candidato = $ID_Candidato;
    }

    public function getID_Convocatoria() {
        return $this->ID_Convocatoria;
    }

    public function setID_Convocatoria($ID_Convocatoria) {
        $this->ID_Convocatoria = $ID_Convocatoria;
    }

    public function getDNI_Candidato() {
        return $this->DNI_Candidato;
    }

    public function setDNI_Candidato($DNI_Candidato) {
        $this->DNI_Candidato = $DNI_Candidato;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }
}

?>
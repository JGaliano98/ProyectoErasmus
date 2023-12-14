<?php

class Candidato implements \JsonSerializable {
    private $ID_Candidato;
    private $DNI_Candidato;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $fecha_nacimiento;
    private $curso;
    private $telefono;
    private $correo;
    private $domicilio;
    private $contraseña;
    private $rol;
    private $tutor;

    // Constructor
    public function __construct($ID_Candidato, $DNI_Candidato, $nombre, $apellido1, $apellido2, $fecha_nacimiento, $curso, $telefono, $correo, $domicilio, $contraseña, $rol, $tutor) {
        $this->ID_Candidato = $ID_Candidato;
        $this->DNI_Candidato = $DNI_Candidato;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->curso = $curso;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->domicilio = $domicilio;
        $this->contraseña = $contraseña;
        $this->rol = $rol;
        $this->tutor = $tutor;
    }

    // Getters
    public function getID_Candidato() {
        return $this->ID_Candidato;
    }

    public function getDNI_Candidato() {
        return $this->DNI_Candidato;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getTutor() {
        return $this->tutor;
    }

    // Setters
    public function setDNI_Candidato($DNI_Candidato) {
        $this->DNI_Candidato = $DNI_Candidato;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    public function setFechaNacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function setTutor($tutor) {
        $this->tutor = $tutor;
    }

    public function toJSON(){
        return json_encode(get_object_vars($this));
    }
    public function jsonSerialize():array{
        $var=get_object_vars($this);
        return $var;
    }
}

?>
<?php
class Proyecto {
    
    private $ID_Proyecto;
    private $codigo_proyecto;
    private $nombre;
    private $fecha_inicio;
    private $fecha_fin;

    // Constructor
    public function __construct($ID_Proyecto,$codigo_proyecto, $nombre, $fecha_inicio, $fecha_fin) {
        $this->ID_Proyecto = $ID_Proyecto;
        $this->codigo_proyecto = $codigo_proyecto;
        $this->nombre = $nombre;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
    }

    // Getters
    public function getID_Proyecto() {
        return $this->ID_Proyecto;
    }

    public function getCodigoProyecto() {
        return $this->codigo_proyecto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaInicio() {
        return $this->fecha_inicio;
    }

    public function getFechaFin() {
        return $this->fecha_fin;
    }

    // Setters
    public function setCodigoProyecto($codigo_proyecto) {
        $this->codigo_proyecto = $codigo_proyecto;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFechaInicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function setFechaFin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }
}

?>
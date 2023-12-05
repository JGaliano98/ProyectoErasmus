<?php
class Convocatoria {
    private $ID_Convocatoria;
    private $movilidades;
    private $dias;
    private $tipo;
    private $destino;
    private $fecha_inicio_solicitudes;
    private $fecha_fin_solicitudes;
    private $fecha_inicio_pruebas;
    private $fecha_fin_pruebas;
    private $fecha_lista_provisional;
    private $fecha_lista_definitiva;
    private $ID_Proyecto;

    // Constructor
    public function __construct($ID_Convocatoria, $movilidades, $dias, $tipo, $destino, $fecha_inicio_solicitudes, $fecha_fin_solicitudes, $fecha_inicio_pruebas, $fecha_fin_pruebas, $fecha_lista_provisional, $fecha_lista_definitiva, $ID_Proyecto) {
        $this->ID_Convocatoria = $ID_Convocatoria;
        $this->movilidades = $movilidades;
        $this->dias = $dias;
        $this->tipo = $tipo;
        $this->destino = $destino;
        $this->fecha_inicio_solicitudes = $fecha_inicio_solicitudes;
        $this->fecha_fin_solicitudes = $fecha_fin_solicitudes;
        $this->fecha_inicio_pruebas = $fecha_inicio_pruebas;
        $this->fecha_fin_pruebas = $fecha_fin_pruebas;
        $this->fecha_lista_provisional = $fecha_lista_provisional;
        $this->fecha_lista_definitiva = $fecha_lista_definitiva;
        $this->ID_Proyecto = $ID_Proyecto;
    }

    // Getters
    public function getID_Convocatoria() {
        return $this->ID_Convocatoria;
    }

    public function getMovilidades() {
        return $this->movilidades;
    }

    public function getDias() {
        return $this->dias;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function getFechaInicioSolicitudes() {
        return $this->fecha_inicio_solicitudes;
    }

    public function getFechaFinSolicitudes() {
        return $this->fecha_fin_solicitudes;
    }

    public function getFechaInicioPruebas() {
        return $this->fecha_inicio_pruebas;
    }

    public function getFechaFinPruebas() {
        return $this->fecha_fin_pruebas;
    }

    public function getFechaListaProvisional() {
        return $this->fecha_lista_provisional;
    }

    public function getFechaListaDefinitiva() {
        return $this->fecha_lista_definitiva;
    }

    public function getID_Proyecto() {
        return $this->ID_Proyecto;
    }

    // Setters
    public function setMovilidades($movilidades) {
        $this->movilidades = $movilidades;
    }

    public function setDias($dias) {
        $this->dias = $dias;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function setFechaInicioSolicitudes($fecha_inicio_solicitudes) {
        $this->fecha_inicio_solicitudes = $fecha_inicio_solicitudes;
    }

    public function setFechaFinSolicitudes($fecha_fin_solicitudes) {
        $this->fecha_fin_solicitudes = $fecha_fin_solicitudes;
    }

    public function setFechaInicioPruebas($fecha_inicio_pruebas) {
        $this->fecha_inicio_pruebas = $fecha_inicio_pruebas;
    }

    public function setFechaFinPruebas($fecha_fin_pruebas) {
        $this->fecha_fin_pruebas = $fecha_fin_pruebas;
    }

    public function setFechaListaProvisional($fecha_lista_provisional) {
        $this->fecha_lista_provisional = $fecha_lista_provisional;
    }

    public function setFechaListaDefinitiva($fecha_lista_definitiva) {
        $this->fecha_lista_definitiva = $fecha_lista_definitiva;
    }

    public function setID_Proyecto($ID_Proyecto) {
        $this->ID_Proyecto = $ID_Proyecto;
    }
}

?>
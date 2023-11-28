<?php
class NivelIdioma {
    private $ID_Idioma;
    private $nombre;

    // Constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Getter para ID_Idioma
    public function getID_Idioma() {
        return $this->ID_Idioma;
    }

    // Getter y Setter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

?>
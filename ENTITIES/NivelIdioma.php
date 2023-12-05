<?php
class NivelIdioma {
    private $ID_Idioma;
    private $nombre;

    // Constructor
    public function __construct($ID_Idioma, $nombre) {
       
        $this->ID_Idioma = $ID_Idioma;
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
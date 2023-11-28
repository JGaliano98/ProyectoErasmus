<?php
class Convocatoria_Baremo_Idioma {
    private $ID;
    private $ID_Convocatoria;
    private $ID_Idioma;
    private $nota;

    // Constructor
    public function __construct($ID, $ID_Convocatoria, $ID_Idioma, $nota) {
        $this->ID = $ID;
        $this->ID_Convocatoria = $ID_Convocatoria;
        $this->ID_Idioma = $ID_Idioma;
        $this->nota = $nota;
    }

    // Getter para ID
    public function getID() {
        return $this->ID;
    }

    // Setter para ID
    public function setID($ID) {
        $this->ID = $ID;
    }

    // Getter para ID_Convocatoria
    public function getIDConvocatoria() {
        return $this->ID_Convocatoria;
    }

    // Setter para ID_Convocatoria
    public function setIDConvocatoria($ID_Convocatoria) {
        $this->ID_Convocatoria = $ID_Convocatoria;
    }

    // Getter para ID_Idioma
    public function getIDIdioma() {
        return $this->ID_Idioma;
    }

    // Setter para ID_Idioma
    public function setIDIdioma($ID_Idioma) {
        $this->ID_Idioma = $ID_Idioma;
    }

    // Getter para nota
    public function getNota() {
        return $this->nota;
    }

    // Setter para nota
    public function setNota($nota) {
        $this->nota = $nota;
    }
}

?>
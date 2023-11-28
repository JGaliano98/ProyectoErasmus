<?php
class Baremacion {
    private $ID;
    private $ID_Convocatoria;
    private $ID_Item;
    private $DNI_Candidato;
    private $nota;
    private $URL;

    // Constructor
    public function __construct($ID, $ID_Convocatoria, $ID_Item, $DNI_Candidato, $nota, $URL) {
        $this->ID = $ID;
        $this->ID_Convocatoria = $ID_Convocatoria;
        $this->ID_Item = $ID_Item;
        $this->DNI_Candidato = $DNI_Candidato;
        $this->nota = $nota;
        $this->URL = $URL;
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

    // Getter para ID_Item
    public function getIDItem() {
        return $this->ID_Item;
    }

    // Setter para ID_Item
    public function setIDItem($ID_Item) {
        $this->ID_Item = $ID_Item;
    }

    // Getter para DNI_Candidato
    public function getDNI() {
        return $this->DNI_Candidato;
    }

    // Setter para DNI_Candidato
    public function setDNI($DNI_Candidato) {
        $this->DNI_Candidato = $DNI_Candidato;
    }

    // Getter para nota
    public function getNota() {
        return $this->nota;
    }

    // Setter para nota
    public function setNota($nota) {
        $this->nota = $nota;
    }

    // Getter para URL
    public function getURL() {
        return $this->URL;
    }

    // Setter para URL
    public function setURL($URL) {
        $this->URL = $URL;
    }
}

?>
<?php
class Convocatoria_Baremo {
    private $ID;
    private $ID_Convocatoria;
    private $ID_Item;
    private $notaMax;
    private $notaMin;
    private $requisito;
    private $aportaAlumno;

    // Constructor
    public function __construct($ID, $ID_Convocatoria, $ID_Item, $notaMax, $notaMin, $requisito, $aportaAlumno) {
        $this->ID = $ID;
        $this->ID_Convocatoria = $ID_Convocatoria;
        $this->ID_Item = $ID_Item;
        $this->notaMax = $notaMax;
        $this->notaMin = $notaMin;
        $this->requisito = $requisito;
        $this->aportaAlumno = $aportaAlumno;
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

    // Getter para notaMax
    public function getNotaMax() {
        return $this->notaMax;
    }

    // Setter para notaMax
    public function setNotaMax($notaMax) {
        $this->notaMax = $notaMax;
    }

    // Getter para notaMin
    public function getNotaMin() {
        return $this->notaMin;
    }

    // Setter para notaMin
    public function setNotaMin($notaMin) {
        $this->notaMin = $notaMin;
    }

    // Getter para requisito
    public function getRequisito() {
        return $this->requisito;
    }

    // Setter para requisito
    public function setRequisito($requisito) {
        $this->requisito = $requisito;
    }

    // Getter para aportaAlumno
    public function getAportaAlumno() {
        return $this->aportaAlumno;
    }

    // Setter para aportaAlumno
    public function setAportaAlumno($aportaAlumno) {
        $this->aportaAlumno = $aportaAlumno;
    }
}

?>
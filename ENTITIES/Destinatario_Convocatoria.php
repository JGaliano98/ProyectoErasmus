<?php
class Destinatario_Convocatoria {
    private $ID;
    private $ID_Convocatoria;
    private $codigo_grupo;

    // Constructor
    public function __construct($ID, $ID_Convocatoria, $codigo_grupo) {
        $this->ID = $ID;
        $this->ID_Convocatoria = $ID_Convocatoria;
        $this->codigo_grupo = $codigo_grupo;
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

    // Getter para código de grupo
    public function getCodigoGrupo() {
        return $this->codigo_grupo;
    }

    // Setter para código de grupo
    public function setCodigoGrupo($codigo_grupo) {
        $this->codigo_grupo = $codigo_grupo;
    }
}

?>
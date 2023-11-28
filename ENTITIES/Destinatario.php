<?php
class Destinatario {
    private $codigo_grupo;
    private $nombre;

    // Constructor
    public function __construct($codigo_grupo, $nombre) {
        $this->codigo_grupo = $codigo_grupo;
        $this->nombre = $nombre;
    }

    // Getter para código de grupo
    public function getCodigoGrupo() {
        return $this->codigo_grupo;
    }

    // Setter para código de grupo
    public function setCodigoGrupo($codigo_grupo) {
        $this->codigo_grupo = $codigo_grupo;
    }

    // Getter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

?>
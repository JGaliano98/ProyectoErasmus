<?php

class ItemBaremable {
    private $ID_Item;
    private $nombre;

    // Constructor
    public function __construct($ID_Item, $nombre) {
        $this->ID_Item = $ID_Item;
        $this->nombre = $nombre;
    }

    // Getter para ID_Item
    public function getID_Item() {
        return $this->ID_Item;
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
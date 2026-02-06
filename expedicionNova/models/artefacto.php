<?php

class Artefacto extends EntidadEstelar{
    private $antiguedad;

    function __construct($id, $nombre, $planeta, $origen, $nivelEstabilidad, $antiguedad){
        parent::__construct($id, $nombre, $planeta, $origen, $nivelEstabilidad);
        $this->antiguedad = $antiguedad;
    }

    public function reaccion(){
        echo "Reproduce un mensaje en una lengua muerta";
    }
    
    public function getAntiguedad() {
        return $this->antiguedad;
    }
    
}
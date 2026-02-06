<?php

class MineralRaro extends EntidadEstelar{
    private $dureza;

    function __construct($id, $nombre, $planeta, $origen, $nivelEstabilidad, $dureza){
        parent::__construct($id, $nombre, $planeta, $origen, $nivelEstabilidad);
        $this->dureza = $dureza;
    }

    public function reaccion(){
        echo "Brilla con intensidad azulada";
    }

    public function getDureza() {
        return $this->dureza;
    }
    
}
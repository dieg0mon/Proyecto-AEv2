<?php

class FormaDeVida extends EntidadEstelar{
    private $dieta;

    function __construct($id, $nombre, $planeta, $origen, $nivelEstabilidad, $dieta){
        parent::__construct($id, $nombre, $planeta, $origen, $nivelEstabilidad);
        $this->dieta = $dieta;
    }

    public function reaccion(){
        echo "Emite un pulso electromagnético";
    }

    public function getDieta(){
        return $this->dieta;
    }
    
}
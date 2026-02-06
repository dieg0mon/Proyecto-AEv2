<?php

abstract class EntidadEstelar implements iInteractuable{
    protected $id;
    protected $nombre;
    protected $planeta;
    protected $origen;
    protected $nivelEstabilidad;

    public function __construct($id, $nombre, $planeta, $origen, $nivelEstabilidad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->planeta = $planeta;
        $this->origen = $origen;
        $this->nivelEstabilidad = $nivelEstabilidad;
    }

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getPlaneta(){
        return $this->planeta;
    }

    function setPlaneta($planeta){
        $this->planeta = $planeta;
    }

    function getOrigen(){
        return $this->origen;
    }

    function setOrigen($origen){
        $this->origen = $origen;
    }

    function getNivelEstabilidad(){
        return $this->nivelEstabilidad;
    }

    function setNivelEstabilidad($nivelEstabilidad){
        $this->nivelEstabilidad = $nivelEstabilidad;
    }

    function getTipo(){
        return static::class;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }
}
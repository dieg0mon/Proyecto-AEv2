<?php

class GestorEntidades implements iGestor{
    
    
    public function __construct() {
        if (!isset($_SESSION['entidades'])) {
            $_SESSION['entidades'] = [];
        }
    }

    public function obtenerTodos(){
        return $_SESSION['entidades'];
    }

    public function guardar($entidad){
        $_SESSION['entidades'][] = $entidad;
    }

    public function buscar($id){
        foreach ($_SESSION['entidades'] as $e){
            if ($e->getId() == $id) {
                return $e;
            }
        }
    }

    public function reemplazar($id, $entidadNueva) {
        foreach ($_SESSION['entidades'] as $i => $e) {
            if ($e->getId() == $id) {
                $_SESSION['entidades'][$i] = $entidadNueva;
                return true;
            }
        }
        return false;
    }
    

    public function eliminar($id){
        foreach ($_SESSION['entidades'] as $key => $e) {
            if ($e->getId() == $id) {
                unset($_SESSION['entidades'][$key]);
                $_SESSION['entidades'] = array_values($_SESSION['entidades']);
                return true;
            }
        }
        return false;
    }
}
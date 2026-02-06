<?php

interface iGestor{
    public function obtenerTodos();
    

    public function guardar($entidad);
    

    public function eliminar($id);

    
    public function buscar($id);

}
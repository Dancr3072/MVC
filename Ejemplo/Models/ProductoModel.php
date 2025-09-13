<?php

class Producto{
    
    public $nombreProducto;
    public $descripcionProducto;
    

function getNombreProducto(){
    return $this->nombreProducto;

}


function getdescripcionProducto(){
    return $this->descripcionProducto;

}

function setNombreProducto($nombreProducto){
    $this->nombreProducto = $nombreProducto;

}

function setdescripcionProducto($descripcionProducto){
    $this->descripcionProducto = $descripcionProducto;

}

public function consegirTodos(){
    echo "IMPRIMIR TODOS LOS PRODUCTOS...";

}
}
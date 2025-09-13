<?php

class ProductoController{

    public function mostrarTodos(){
        require_once 'models/ProductoModel.php';

        $Producto = new Producto();

        $todoslosproductos = $producto->consegirtodos();

        require_once 'Views/productos/mostrar-todos.php';
    }

    public function crear(){

        require_once 'Views/productos/crear.php';
    }

}
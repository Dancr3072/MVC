<?php

//MOSTRAR LAS ACCIONES QUE PUEDE HACER EL CONTROLADOR

class UsuarioController{
    public function mostrarTodos(){
    require_once 'models/modelsUsuario.php';

        $usuario = new usuario();

        $todos_los_usuarios = $usuario -> conseguIrTodos();

        require_once 'views/usuarios/mostrar-todos.php';     
    }

    public function crear(){
        require_once 'views/usuarios/crear.php';
    }
}

<h1>Bienvenido a mi Web</h1>
<<<<<<< HEAD
<?php

require_once './controller/UsuarioController.php';

$controlador = new UsuarioController;

$nombre_controlador = $_GET['controller'];

if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
    $nombre_controlador = $_GET['controller'];
    $controlador = new $nombre_controlador;

    if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])) {
        $action = $_GET ['action'];
        $controlador -> $action();
    }else {
        echo "La paguina que buscas no existe";
    }
}else {
    echo "La paguina que busca no existe";
}

//$controlador -> mostrarTodos();

//$controlador -> crear();
=======
>>>>>>> 588c2996ff1b218a561817145efd25c2e5f7dc84

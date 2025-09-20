<h1>Bienvenido a mi Web</h1>

<?php

// require_once './Controllers/UsuarioController.php';

// require_once './Controllers/PoductoController.php';

require_once 'autoload.php';

$Controllers = new UsuarioController;

$nombre_controlador = $_GET['controllers'];

if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
    $nombre_controlador = $_GET['controllers'];
    $Controllers = new $nombre_controlador;

    if (isset($_GET['action']) && method_exists($Controllers,$_GET['action'])) {
        $action = $_GET ['action'];
        $Controllers -> $action();

    }else {
        echo "La paguina que buscas no existe";
    }
}else {
    echo "La paguina que busca no existe";
}

//$controlador -> mostrarTodos();

//$controlador -> crear();


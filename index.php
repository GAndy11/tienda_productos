<?php
require_once 'autoload.php';
require_once './views/layouts/header.php';//Aqui va el encabezado

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . "Controller";
}else {
    header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?controller=producto&action=index");
    exit();
}

if (class_exists($nombre_controlador)) {

    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    }else {
        echo "La pagina que buscas no existe2";
    }
}else {
    echo "La pagina que buscas no existe3";
}


require_once './views/layouts/footer.php';//Aqui va el footer

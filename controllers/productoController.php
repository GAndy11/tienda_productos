<?php
require_once './models/productoModel.php';

class productoController{

    public function index(){

        $mensaje = "";
        $productos = $this->ListarProductos();


        if (!$productos) {
            $mensaje = "No hay productos para mostrar";
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
        }
        include_once './views/layouts/lista_productos.php';
    }

    public function ListarProductos(){

        $productos = new productoModel();
        return $productos->getAll();
    }

    public function GestionProductos(){
        $mensaje = "";
        $productos = $this->ListarProductos();


        if (!$productos) {
            $mensaje = "No hay productos para mostrar";
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
        }

        include_once './views/layouts/gestion_productos.php';
    }

    public function DetalleProducto(){
        $mensaje = "";
        if (isset($_GET['idProducto'])) {
            $idProducto = $_GET['idProducto'];

            $producto = new productoModel();
            $producto->setIdProducto($idProducto);
            $detalleProducto = $producto->getOne($idProducto);
            if (!$detalleProducto) {
                $mensaje = "No existe este producto";
                echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
            }


            include_once './views/layouts/detalle_producto.php';
        }else {
            $this->index();
        }
    }

    public function GuardarProducto(){
        $productos = $this->ListarProductos(); //Cargar Productos

        $mensaje = "";
        if (isset($_POST['nombre_producto'])
        && isset($_POST['descripcion_producto'])
        && isset($_POST['precio_producto'])
        && isset($_POST['imagen_producto'])) {

            $nombre = trim($_POST['nombre_producto']);
            $descripcion = trim($_POST['descripcion_producto']);
            $precio = trim($_POST['precio_producto']);
            //$imagen = trim($_POST['imagen_producto']);

            $arrayObligatorios = [
                "Nombre" => $nombre,
                "Descripción" => $descripcion,
                "Precio" => $precio
            ];

            foreach ($arrayObligatorios as $key => $value) {
                if(empty($value)){
                    $mensaje .= "El campo {$key} no puede quedar vacío <br>";
                }
            }

            if($mensaje != ""){
                include_once './views/layouts/gestion_productos.php';
                echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
                die();
            }

            $producto = new productoModel();
            $producto->setNombre($nombre);
            $producto->setDescripcion($descripcion);
            $producto->setPrecio($precio);
            //$producto->setImagen($imagen);

            $respuesta = $producto->save();

            if($respuesta === true){
                $mensaje = "Registro guardado con éxito";
            }else{
                $mensaje = $respuesta;
            }
            $productos = $this->ListarProductos(); //Volver a cargar productos

            include_once './views/layouts/gestion_productos.php';
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";

        }else {
            $this->index();
        }
    }
}

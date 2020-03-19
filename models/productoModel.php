<?php

include_once './models/baseModel.php';

class productoModel extends baseModel{

    private $idProducto;
    private $idCategoria;
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;

    public function setIdProducto($idProducto){
        $this->idProducto = $idProducto;
    }

    public function getIdProducto(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->$idCategoria = $idCategoria;
    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getAll(){
        $result = true;
        $sql = "
            SELECT
                *
            FROM
                producto
        ";

        $productos = $this->db->query($sql);

        if($productos && $productos->num_rows >= 1){

            $result = $productos;
        }else{

            $result = false;
        }

        return $result;
    }

    public function getOne(){
        $result = true;
        $idProducto = $this->idProducto;
        $sql = "
            SELECT
                *
            FROM
                producto
            WHERE
                id = {$idProducto}
        ";
        $producto = $this->db->query($sql);

        if($producto && $producto->num_rows >= 1){

            $result = $producto;
        }else{

            $result = false;
        }

        return $result;
    }

    public function save(){
        $result = true;

        $sql = "
            INSERT INTO
                producto
            (
                nombre,
                descripcion,
                precio
            )VALUES(
                '{$this->nombre}',
                '{$this->descripcion}',
                {$this->precio}
            )
        ";

        $save = $this->db->query($sql);

        if(!$save){
            $result = "No se pudo ingresar el registro en la BD";
        }

        return $result;
    }
}

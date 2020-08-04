<?php

class Venta {
    
    private $fecha;
    private $idProducto;
    private $idCliente;
    
    function __construct() {
        $this->setFecha('2020-08-04');
        $this->setIdProducto(1);
        $this->setIdCliente(1);
    }
    
    function getFecha(){
        return $this->fecha;
    }
    
    function getIdProducto(){
        return $this->idProducto;
    }
    
    function getIdCliente(){
        return $this->idCliente;
    }
    
    function setFecha($fecha){
        return $this->fecha = $fecha;
    }
    
    function setIdProducto($idProducto){
        return $this->idProducto = $idProducto;
    }
    
    function setIdCliente($idCliente){
        return $this->idCliente = $idCliente;
    }
    
   
}
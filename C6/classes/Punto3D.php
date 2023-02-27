<?php
include_once('Punto.php');
class Punto3D extends Punto{
    protected $z;

    function __construct($x=0,$y=0,$z=0){
        parent::__construct($x,$y);
        $this->z=$z;

    }

    function calcularDistanciaAlOrigen(){
        return round(sqrt(pow($this->x,2)+pow($this->y,2)+pow($this->z,2)),2);
    }

    function __toString(){
        
        return "($this->x , $this->y , $this->z )";
    }
}
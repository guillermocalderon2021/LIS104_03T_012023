<?php

class Punto{
    protected $x;
    protected $y;
    public static $contador;

    function __construct($_x=0,$_y=0){
        $this->x=$_x;
        $this->y=$_y;
        self::$contador+=1;
    }

    function __destruct(){
        self::$contador-=1;
    }

    function __toString(){
        return "($this->x , $this->y )";
    }

    function getX(){
        return $this->$x;
    }

    function setX($value){
        $this->x=$value;
    }

    function getY(){
        return $this->$y;
    }

    function setY($value){
        $this->y=$value;
    }
/*
    function __get($prop){
        return $this->prop;
    }

    function __set($propiedad, $valor){
        $this->propiedad = $valor;
     }*/
  

    function calcularDistanciaAlOrigen(){
        return round(sqrt(pow($this->x,2)+pow($this->y,2)),2);
    }

    public static function calcularDistancia(Punto $p1, Punto $p2){
        return round(sqrt(pow($p1->x-$p2->x,2)+pow($p1->y-$p2->y,2)),2);
    }
}
<?php
abstract class Figura{
    const PI=3.141592;
    protected $area;
    protected $perimetro;

     abstract public  function calcularArea();
     abstract public function calcularPerimetro();

    public function getArea(){
        return $this->area;
    }

    public function getPerimetro(){
        return $this->perimetro;
    }
}

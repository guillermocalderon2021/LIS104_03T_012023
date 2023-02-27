<?php
include('Figura.php');
class Circulo extends Figura{

    private $radio;

    function __construct($r){
        $this->radio=$r;
    }

   public  function calcularArea(){
    $this->area=parent::PI*pow($this->radio,2);
   }
     public function calcularPerimetro(){
        $this->perimetro=2*parent::PI*$this->radio;
     }
}
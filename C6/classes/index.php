<?php
require_once("Punto.php");
require_once("Punto3D.php");
require_once("Circulo.php");

$punto1=new Punto(10,5);
$punto2=new Punto();
$punto3=new Punto3D(5,5,7);
$punto2->setX(10);
echo "La distancia de $punto1 al origen es: ".$punto1->calcularDistanciaAlOrigen();
echo "La distancia de $punto2 al origen es: ".$punto2->calcularDistanciaAlOrigen();
echo "La distancia de $punto3 al origen es: ".$punto3->calcularDistanciaAlOrigen();
echo "La distancia entre los puntos es: " . Punto::calcularDistancia($punto1,$punto2);
echo "Cantidad de puntos en memoria: ". Punto::$contador;
echo $punto3;
$circ1=new Circulo(5);
$circ1->calcularPerimetro();
echo "El perimetro es " .$circ1->getPerimetro();


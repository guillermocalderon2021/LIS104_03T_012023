<?php

$a=10; //variable global

function calcularDistancia($x1,&$y1,$x2=0,$y2=0){
    return sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
}

// Funcion que reciba una serie simple y calcule su media

// La funcion recibe un arreglo con la serie numerica
function calcularCV($x){
    //variables locales
    $media=0;
    $desviacion=0;
    $cv=0;
    if (is_array($x)){
        $suma=0;
        $cuadradoDesv=0;
        foreach($x as $num){
            $suma+=$num;
        }
        $media= $suma/sizeof($x);
        foreach($x as $num){
            $cuadradoDesv+=pow($num-$media,2);
        }
        $desviacion=sqrt($cuadradoDesv/sizeof($x));
        $cv=$desviacion/$media;
        // Retornando arreglo asociativo
        return ['media'=>$media,
                'desviacion'=>$desviacion,
                'cv'=>$cv];
    }
    else{
        return ['media'=>$x,
        'desviacion'=>0,
        'cv'=>0];
    }
}


$x=5;
$y=5;
$distancia=calcularDistancia($x,$y,2,3);
$distancia2=calcularDistancia($x,$y);
echo "La distancia entre los puntos es:". round($distancia,2);
echo "La distancia del punto 1 al origen es:". round($distancia2,2);
var_dump(calcularCV([1,2,3,4,5]));
var_dump(calcularCV(3));
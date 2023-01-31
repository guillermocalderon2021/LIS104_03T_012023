<?php

$paises=["Guatemala","El Salvador","Honduras"];
$primos=array(2,23,1,3,5,7,11,31,13,57,17,19);

sort(primos); // ordenando el arreglo de forma ascendente
rsort($primos); // ordenando el arreglo de forma descendente
var_dump($paises);
var_dump($primos);

// Ejemplo de arreglo multidimensional
$datos=[
    ['nombre'=>'Guillermo',
    'apellido'=>'Calderon',
    'edad'=>20,
    'materias'=>['LIS104','LIC104','ESA104']],
    ['nombre'=>'Juan',
    'apellido'=>'Ortiz',
    'edad'=>25,
    'materias'=>['LIS104','LIC104','ESA104']]
    
];

//Ejemplo de arreglo asociativo
$campos=[
    'Nombre'=>'Juan',
    'Apellido'=>'Lopez',
    'Dui'=>'04545464-5'
];

extract($campos);
echo $Nombre;

var_dump($datos);

?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Materias inscritas</th>
    </tr>
    <?php
        foreach($datos as $alumno){
    ?>
    <tr>
        <td><?=$alumno['nombre']?></td>
        <td><?=$alumno['apellido']?></td>
        <td><?=$alumno['edad']?></td>
        <td><?=implode($alumno['materias'],", ") ?></td>
    </tr>
    <?php
        }

        
    ?>
</table>
<?php
foreach ($datos[0] as $clave => $valor) {
    $v=!is_array($valor)?$valor:implode($valor,', ');
    echo "<h3>".$clave."=".$v."</h3>";
}
?>



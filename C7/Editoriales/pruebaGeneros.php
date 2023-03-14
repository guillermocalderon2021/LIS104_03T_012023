<?php
require_once '../Model/GenerosModel.php';

$model=new GenerosModel();
var_dump($model->getGeneros(6));
/*$datos=['nombre_genero'=>'Prueba',
'descripcion'=>'Prueba'];
echo $model->insertGenero($datos);*/

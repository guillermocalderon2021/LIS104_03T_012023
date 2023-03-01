<?php
include_once '../Model/EditorialesModel.php';
include_once '../Model/AutoresModel.php';


$modelo=new EditorialesModel();
$modeloAutor=new AutoresModel();

$new= [ 'codigo_editorial' =>  'EDI769',
'nombre_editorial' => 'Clasicos New2' ,
'contacto' =>  'Francisco Perez' ,
'telefono' =>  '2333-3333'];

var_dump($modelo->deleteEditorial('EDI769'));
var_dump($modeloAutor->listAutores());

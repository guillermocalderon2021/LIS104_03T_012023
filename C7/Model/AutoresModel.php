<?php

require_once('Model.php');

class AutoresModel extends Model{

    public function listAutores(){
        $query="SELECT * FROM autores";
        return $this->getQuery($query);

    }

    public function getAutor($cod){
        $query="SELECT * FROM autores WHERE codigo_autor='$cod'";
        return $this->getQuery($query);
    }

    public function insertEditorial($editorial=[]){
        extract($editorial);
        $query="INSERT INTO editoriales VALUES ('$codigo_editorial','$nombre_editorial','$contacto','$telefono')";
        return $this->setQuery($query);
    }

    public function updateEditorial($editorial=[]){
        extract($editorial);
        $query="UPDATE editoriales SET nombre_editorial='$nombre_editorial', contacto='$contacto', telefono='$telefono' WHERE codigo_editorial='$codigo_editorial'";
        return $this->setQuery($query);
    }

    public function deleteAutor($codigo){
        $query="DELETE FROM autores WHERE codigo_autor='$codigo'";
        return $this->setQuery($query);

    }
}
<?php

require_once('ModelPDO.php');

class GenerosModel extends ModelPDO{

    public function listGeneros(){
        $query="SELECT * FROM generos";
        return $this->getQuery($query);

    }

    public function getGeneros($cod){
        $query="SELECT * FROM generos WHERE id_genero=:codigo_genero";
        return $this->getQuery($query,[':codigo_genero'=>$cod]);
    }

    public function insertGenero($genero=[]){
        
        $query="INSERT INTO generos (nombre_genero, descripcion) VALUES (:nombre_genero,:descripcion)";
        return $this->setQuery($query,$genero);
    }

    public function updateEditorial($editorial=[]){
        extract($editorial);
        $query="UPDATE editoriales SET nombre_editorial='$nombre_editorial', contacto='$contacto', telefono='$telefono' WHERE codigo_editorial='$codigo_editorial'";
        return $this->setQuery($query);
    }

    public function deleteEditorial($codigo){
        $query="DELETE FROM editoriales WHERE codigo_editorial='$codigo'";
        return $this->setQuery($query);

    }
}
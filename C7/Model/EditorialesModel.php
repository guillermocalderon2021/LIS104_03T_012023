<?php

require_once('Model.php');

class EditorialesModel extends Model{

    public function listEditoriales(){
        $query="SELECT * FROM editoriales";
        return $this->getQuery($query);

    }

    public function getEditorial($cod){
        $query="SELECT * FROM editoriales WHERE codigo_editorial='$cod'";
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

    public function deleteEditorial($codigo){
        $query="DELETE FROM editoriales WHERE codigo_editorial='$codigo'";
        return $this->setQuery($query);

    }
}
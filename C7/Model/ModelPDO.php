<?php
abstract class ModelPDO{

    private $server="localhost";
    private $user="root";
    private $pass="";
    private $bd="inventario_libros";
    protected $dbh;

    private function openConnection(){
        $dsn = "mysql:host=$this->server;dbname=$this->bd";
        $this->dbh = new PDO($dsn, $this->user, $this->pass);
    }

    private function closeConnection(){
        $this->dbh=null;
    }

    // Este metodo permite ejecutar consultas de actualizacion
    protected function setQuery($query,$params=array()){
        try{
        $this->openConnection();
        $st=$this->dbh->prepare($query);
        $st->execute($params);
        $affectedRows=$st->rowCount();
        $this->closeConnection();
        return $affectedRows;
        }
        catch(exception $e){
            return 0;

        }

    }

    //Este metodo permite ejecutar consultas de seleccion
    protected function getQuery($query,$params=array()){
        try{
            $rows=[];
        $this->openConnection();
        $st=$this->dbh->prepare($query);
        $st->execute($params);
        $rows=$st->fetchAll();
        $this->closeConnection();
        return $rows;
        }
        catch(exception $e){
            return null;

        }

    }

}
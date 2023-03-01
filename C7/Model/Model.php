<?php
abstract class Model{

    private $server="localhost";
    private $user="root";
    private $pass="";
    private $bd="inventario_libros";
    protected $conn;

    private function openConnection(){
        $this->conn=new mysqli($this->server,$this->user,$this->pass, $this->bd);
    }

    private function closeConnection(){
        $this->conn->close();
    }

    // Este metodo permite ejecutar consultas de actualizacion
    protected function setQuery($query){
        try{
        $this->openConnection();
        $this->conn->query($query);
        $affectedRows=$this->conn->affected_rows;
        $this->closeConnection();
        return $affectedRows;
        }
        catch(exception $e){
            return 0;

        }

    }

    //Este metodo permite ejecutar consultas de seleccion
    protected function getQuery($query){
        try{
            $rows=[];
        $this->openConnection();
        $result=$this->conn->query($query);
        while($rows[]=$result->fetch_assoc());
        $result->close();
        $this->closeConnection();
        return $rows;
        }
        catch(exception $e){
            return 0;

        }

    }

}
<?php
    class Conexion{
      private $servername = "localhost";
      private $username = "root";
      private $password = "";
      private $dbname = "citas";
      private $conn;

     public function __construct(){ 
     //crear conexion
      //mysqli

    
      $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->dbname) ;
      //verificar la conexion

      if($this->conn->connect_error){

         die("Conexion fallida ".$this->conn->connect_error);
      }
    }
      public function getConexion(){
      return $this->conn;

      }

      }

    













?>
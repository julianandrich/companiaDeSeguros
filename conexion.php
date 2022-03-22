<?php
  class Conexion {
    private $servidor = "localhost";
    private $dbname = "contact_db";
    private $usuario = "root";
    private $password = "";
    private $conexion = "";

    public function __construct() {
      try {
        $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->dbname", $this->usuario, $this->password);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // activamos errormode y activamos las excepciones
      } catch (PDOException $error) {
        return "Falla de conexión.".$error;
      }
    }

    public function ejecutar($sql) { //insertar/actualizar/delete
      $this->conexion->exec($sql);
      return $this->conexion->lastInsertId();
    }
    
    public function consultar($sql) {
      $sentencia = $this->conexion->prepare($sql);
      $sentencia->execute();
      return $sentencia->fetchAll();
    }


  }
  
?>
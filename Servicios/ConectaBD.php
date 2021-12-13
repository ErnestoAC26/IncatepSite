<?php


class ConectaDB {

    private $host ="localhost";
    private $username = "root";
    private $clave = "";
    private $puerto = "3306";
    private $dbnombre = "ucv_limanorte";
    
    function __construct() {
     
    }

    public function getHost() {
        return $this->host;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getPuerto() {
        return $this->puerto;
    }

    public function getDbnombre() {
        return $this->dbnombre;
    }

    public function setHost($host): void {
        $this->host = $host;
    }

    public function setUsername($username): void {
        $this->username = $username;
    }

    public function setClave($clave): void {
        $this->clave = $clave;
    }

    public function setPuerto($puerto): void {
        $this->puerto = $puerto;
    }

    public function setDbnombre($dbnombre): void {
        $this->dbnombre = $dbnombre;
    }

    public function getConexion(){
        return mysqli_connect(
            $this->getHost(),
            $this->getUsername(),
            $this->getClave(),
            $this->getDbnombre(),
            $this->getPuerto());    
                
        
        
    }    
}

$cnx = (new ConectaDB())->getConexion();

if(!$cnx){
    echo mysqli_error($cnx);
}else {
   
}
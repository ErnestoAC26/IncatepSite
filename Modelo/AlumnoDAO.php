<?php

require_once '../Modelo/AlumnoTerminado.php';
require_once '../Servicios/ConectaBD.php';



class AlumnoDAO{
    private $cn = null;
    
    public function __construct() {
        $this->cn = (new ConectaDB())->getConexion();
    }

    public function insert(AlumnoTerminado $pt) {
        $caSQL = "INSERT INTO alumnoincatep(nombre,telefono,correo,mensaje) values(?,?,?,?)";
        
        $stm = $this->cn->prepare($caSQL);

        $nombre=$pt->getNombre();
        $telefono=$pt->getTelefono();
        $correo=$pt->getCorreo();
        $mensaje=$pt->getMensaje();
        



        $stm->bind_param("ssss",$nombre,$telefono,$correo,$mensaje);
        
        if(!$stm->execute()){
            return mysqli_error($this->cn);
            
        }else{
            return 1;
        }
        
        
        
        
    }
    
}
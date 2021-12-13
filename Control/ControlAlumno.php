<?php

require_once '../Modelo/AlumnoTerminado.php';
require_once '../Modelo/AlumnoDAO.php';


if (isset($_POST["btnEnviar"])){

    $nom = $_POST["nombre"];
    $tel = $_POST["telefono"];
    $correo = $_POST["correo"];
    $msj = $_POST["mensaje"];

    $pt = new AlumnoTerminado();
    $pt->setNombre($nom);
    $pt->setTelefono($tel);
    $pt->setCorreo($correo);
    $pt->setMensaje($msj);
  
    $pDAO = new AlumnoDAO();
        $resp = $pDAO->insert($pt);
        if ($resp!=1){
            echo $resp;
        } else{
            require_once '../Vista/RespuestaAutomatica.php'; 

        }    
    



}   

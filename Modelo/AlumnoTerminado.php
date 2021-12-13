<?php

class AlumnoTerminado {
    private $nombre;
    private $telefono;
    private $correo;
    private $mensaje;
 

    public function __construct() {
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getMensaje() {
        return $this->mensaje;
    }


    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setMensaje($mensaje): void {
        $this->mensaje = $mensaje;
    }

    public function __toString(){
        return $this->getNombre();
    }

}
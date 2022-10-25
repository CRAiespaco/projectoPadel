<?php

namespace App;

class Persona{
    private $dni;
    private $nombre;
    private $apellidos;
    private $telefono;

    public function __construct(string $dni, string $nombre,string $apellidos){
        $this->$dni=$dni;
        $this->$nombre=$nombre;
        $this->$apellidos=$apellidos;
    }

    public function setDNI(string $dni):Persona{
        $this->dni=$dni;
        return $this;
    }

    public function getDni():string{
        return $this->dni;
    }

    public function setNombre($nombre):Persona{
        $this->nombre = $nombre;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function setApellidos($apellidos):Persona{
    $this->apellidos = $apellidos;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setTelefono($telefono):Persona{
        $this->telefono = $telefono;
    }

    public function getTelefono(){
        return $this->telefono;
    }
}
<?php

namespace App;

include __DIR__."./../autoload.php";

class Entrenador extends Empleado{
    private int $nivelEntrenador;
    private int $numFederacion;
    private Jugador $pupilo;

    public function __construct(string $nombre,string $apellidos,string $dni,string $direccion,string $cuentaCorriente,string $numSeguridadSocial,int $nivelEntrenador,int $numFederacion){
        parent::__construct($nombre,$apellidos,$dni, $direccion, $cuentaCorriente, $numSeguridadSocial);
        $this->nivelEntrenador = $nivelEntrenador;
        $this->numFederacion = $numFederacion;
    }


    public function getNivelEntrenador(){
        return $this->nivelEntrenador;
    }

    public function setNivelEntrenador(int $nivelEntrenador):Entrenador{
        $this->nivelEntrenador = $nivelEntrenador;
    }


    public function getNumFederacion(){
        return $this->numFederacion;
    }

    public function setNumFederacion(int $numFederacion):Entrenador{
        $this->numFederacion = $numFederacion;
    }


    public function getPupilo(): Jugador{
        return $this->pupilo;
    }

    public function setPupilo(Jugador $pupilo):Jugador{
        $this->pupilo = $pupilo;
    }

}
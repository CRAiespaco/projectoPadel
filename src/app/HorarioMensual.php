<?php

namespace App;

class HorarioMensual{
    private $mes;
    private $anyo;

    public function __construct(int $mes,int $anyo){
        $this->mes = $mes;
        $this->anyo = $anyo;
    }


    public function getMes(){
        return $this->mes;
    }

    public function setMes($mes): int{
        $this->mes = $mes;
    }


    public function getAnyo(){
        return $this->anyo;
    }

    public function setAnyo($anyo): int{
        $this->anyo = $anyo;
    }

    public function generarHorarios(): ?HorarioMensual{
        //TODO función para generar los horarios mensuales
        return $this;
    }

    public function devolverNumHoras():integer{
        //TODO función para generar los horarios mensuales
        return $this;
    }


}
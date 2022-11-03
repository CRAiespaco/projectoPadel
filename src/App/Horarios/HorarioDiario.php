<?php

namespace App;

class HorarioDiario{
    private $fecha;
    private $hora_apertura;
    private $hora_cierre;
    private $duracionIntervalos;


    public function __construct(date $fecha,Hora $hora_apertura,Hora $hora_cierre,int $duracionIntervalos)
    {
        $this->fecha = $fecha;
        $this->hora_apertura = $hora_apertura;
        $this->hora_cierre = $hora_cierre;
        $this->duracionIntervalos = $duracionIntervalos;
    }


    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha): void{
        $this->fecha = $fecha;
    }


    public function getHoraApertura(){
        return $this->hora_apertura;
    }

    public function setHoraApertura($hora_apertura): Hora{
        $this->hora_apertura = $hora_apertura;
    }


    public function getHoraCierre(){
        return $this->hora_cierre;
    }

    public function setHoraCierre($hora_cierre): Hora{
        $this->hora_cierre = $hora_cierre;
    }


    public function getDuracionIntervalos(){
        return $this->duracionIntervalos;
    }

    public function setDuracionIntervalos($duracionIntervalos): int{
        $this->duracionIntervalos = $duracionIntervalos;
    }


    public function generarIntervalo(): ?HorarioDiario{

        return $this;
    }

    public function imprimirHorarioDiario(): string{
        //TODO imprime los Horarios
        return $this;
    }
}
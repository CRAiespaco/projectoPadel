<?php

namespace App;

class Pareja extends Jugador{

    private Jugador $jugador1;
    private Jugador $jugador2;

    public function __construct(string $dni,string $nombre,string $apellidos,int $nivelJuego, $manoHabil, $ladoPreferido,int $indiceDeIrresponsabilidad,HorarioMensual $horarioMensualPreerido,boolean $renovacionAutomaticaHorario,int $numFederacion,Jugador $jugador1,Jugador $jugador2)
    {
        parent::__construct($dni,$nombre,$apellidos,$nivelJuego,$manoHabil,$ladoPreferido,$indiceDeIrresponsabilidad,$horarioMensualPreerido,$renovacionAutomaticaHorario,$numFederacion);
        $this->jugador1 = $jugador1;
        $this->jugador2 = $jugador2;
    }


    public function getJugador1()
    {
        return $this->jugador1;
    }

    public function setJugador1($jugador1): void
    {
        $this->jugador1 = $jugador1;
    }


    public function getJugador2()
    {
        return $this->jugador2;
    }

    public function setJugador2($jugador2): void
    {
        $this->jugador2 = $jugador2;
    }

    public function generalParejas():Pareja{
        //TODO funcion que devuelve una pareja
        return $this;
    }
}
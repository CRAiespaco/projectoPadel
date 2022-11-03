<?php

namespace App;

include __DIR__."./../autoload.php";

class Partida extends Pareja{
    private Pareja $pareja1;
    private Pareja $pareja2;
    private Pista $pista;


    public function __construct(string $dni,string $nombre,string $apellidos,int $nivelJuego, $manoHabil, $ladoPreferido,int $indiceDeIrresponsabilidad,HorarioMensual $horarioMensualPreerido,boolean $renovacionAutomaticaHorario,int $numFederacion,Jugador $jugador1,Jugador $jugador2,Pareja $pareja1,Pareja $pareja2,Pista $pista)
    {
        parent::__construct($dni,$nombre,$apellidos,$nivelJuego,$manoHabil,$ladoPreferido,$indiceDeIrresponsabilidad,$horarioMensualPreerido,$renovacionAutomaticaHorario,$numFederacion,$jugador1,$jugador2);
        $this->pareja1 = $pareja1;
        $this->pareja2 = $pareja2;
        $this->pista = $pista;
    }

    public function getPareja1()
    {
        return $this->pareja1;
    }

    public function setPareja1($pareja1): void
    {
        $this->pareja1 = $pareja1;
    }


    public function getPareja2()
    {
        return $this->pareja2;
    }

    public function setPareja2($pareja2): void
    {
        $this->pareja2 = $pareja2;
    }


    public function getPista()
    {
        return $this->pista;
    }

    public function setPista($pista): void
    {
        $this->pista = $pista;
    }

    public  function generarPartida():?Partida{
        //TODO funcion que crea una partida
        return  $this;
    }
}
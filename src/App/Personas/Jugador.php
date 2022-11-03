<?php

namespace App;

use app\Personas\Persona;
use app\Personas\Enums\LadoPreferido;
use app\Personas\Enums\ManoHabil;

include __DIR__."./../autoload.php";

class Jugador extends Persona{
    private int $nivelJuego;
    private ManoHabil $manoHabil;
    private LadoPreferido $ladoPreferido;
    private int $indiceDeIrresponsabilidad;
    private HorarioMensual $horarioMensualPreerido;
    private bool $renovacionAutomaticaHorario;
    private int $numFederacion;
    private Fisioterapeuta $fisioAsociado;
    private Entrenador$entrenadorPersonal;
    private bool $mixtas;
    private int $socio;
    private \DateTime $altaSocio;


    public function __construct(string $dni,string $nombre,string $apellidos,int $nivelJuego, $manoHabil, $ladoPreferido,int $indiceDeIrresponsabilidad,HorarioMensual $horarioMensualPreerido,bool $renovacionAutomaticaHorario,int $numFederacion, Fisioterapeuta $fisioAsociado, Entrenador$entrenadorPersonal,bool $mixtas,int $socio){
        parent::__construct($dni,$nombre,$apellidos);
        $this->nivelJuego = $nivelJuego;
        $this->manoHabil = $manoHabil;
        $this->ladoPreferido = $ladoPreferido;
        $this->indiceDeIrresponsabilidad=$indiceDeIrresponsabilidad;
        $this->horarioMensualPreerido = $horarioMensualPreerido;
        $this->renovacionAutomaticaHorario = $renovacionAutomaticaHorario;
        $this->numFederacion = $numFederacion;
        $this->fisioAsociado = $fisioAsociado;
        $this->entrenadorPersonal = $entrenadorPersonal;
        $this->mixtas = $mixtas;
        $this->socio = $socio;
    }


    public function getNivelJuego(): int{
        return $this->nivelJuego;
    }

    public function setNivelJuego(int $nivelJuego): Jugador{
        $this->nivelJuego = $nivelJuego;
    }


    public function getManoHabil(): ManoHabil{
        return $this->manoHabil;
    }

    public function setManoHabil(LadoPreferido $manoHabil): ManoHabil{
        $this->manoHabil = $manoHabil;
    }


    public function getLadoPreferido(): LadoPreferido{
        return $this->ladoPreferido;
    }

    public function setLadoPreferido(ManoHabil $ladoPreferido): LadoPreferido{
        $this->ladoPreferido = $ladoPreferido;
    }



    public function getIndiceDeIrresponsabilidad(): int{
        return $this->indiceDeIrresponsabilidad;
    }

    public function setIndiceDeIrresponsabilidad(int $indiceDeIrresponsabilidad): Jugador{
        $this->indiceDeIrresponsabilidad = $indiceDeIrresponsabilidad;
    }


    public function getHorarioMensualPreerido(): HorarioMensual{
        return $this->horarioMensualPreerido;
    }

    public function setHorarioMensualPreerido(HorarioMensual $horarioMensualPreerido): HorarioMensual{
        $this->horarioMensualPreerido = $horarioMensualPreerido;
    }


    public function isRenovacionAutomaticaHorario(): bool{
        return $this->renovacionAutomaticaHorario;
    }

    public function setRenovacionAutomaticaHorario(bool $renovacionAutomaticaHorario): bool{
        $this->renovacionAutomaticaHorario = $renovacionAutomaticaHorario;
    }


    public function getNumFederacion(): int{
        return $this->numFederacion;
    }

    public function setNumFederacion(int $numFederacion): Jugador{
        $this->numFederacion = $numFederacion;
    }


    public function getFisioAsociado():Fisioterapeuta{
        return $this->fisioAsociado;
    }

    public function setFisioAsociado(Fisioterapeuta $fisioAsociado): Fisioterapeuta{
        $this->fisioAsociado = $fisioAsociado;
    }


    public function getEntrenadorPersonal(): Entrenador{
        return $this->entrenadorPersonal;
    }

    public function setEntrenadorPersonal(Entrenador $entrenadorPersonal): Entrenador{
        $this->entrenadorPersonal = $entrenadorPersonal;
    }


    public function isMixtas(): bool{
        return $this->mixtas;
    }

    public function setMixtas(bool $mixtas): bool{
        $this->mixtas = $mixtas;
    }


    public function isSocio(): bool{
        return $this->socio;
    }

    public function setSocio(bool $socio): Jugador{
        $this->socio = $socio;
    }



}
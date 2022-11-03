<?php

namespace App;

include __DIR__."./../autoload.php";

class Empleado extends Persona{
    private string $direccion;
    private string $cuentaCorriente;
    private string $numSeguridadSocial;
    private HorarioMensuala $horario;
    private float $precioPorHora;
    private bool $disponible;
    private float $salario;


    public function __construct(string $nombre,string $apellidos,string $dni,string $direccion,string $cuentaCorriente,string $numSeguridadSocial){
        parent::__construct($dni,$nombre,$apellidos);
        $this->direccion = $direccion;
        $this->cuentaCorriente = $cuentaCorriente;
        $this->numSeguridadSocial = $numSeguridadSocial;
        $this->disponible=true;
    }


    public function getDireccion(): string{
        return $this->direccion;
    }

    public function setDireccion(string $direccion):Empleado{
        $this->direccion = $direccion;
    }


    public function getCuentaCorriente(): string
    {
        return $this->cuentaCorriente;
    }

    public function setCuentaCorriente(string $cuentaCorriente):Empleado{
        $this->cuentaCorriente = $cuentaCorriente;
    }


    public function getNumSeguridadSocial(): string
    {
        return $this->numSeguridadSocial;
    }

    public function setNumSeguridadSocial(string $numSeguridadSocial):Empleado{
        $this->numSeguridadSocial = $numSeguridadSocial;
    }


    public function getHorario(){
        return $this->horario;
    }

    public function setHorario($horario):HorarioMensual{
        $this->horario = $horario;
    }


    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    public function setPrecioPorHora($precioPorHora):Empleado{
        $this->precioPorHora = $precioPorHora;
    }


    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible):Empleado{
        $this->disponible = $disponible;
    }


    public function getSalario()
    {
        return $this->salario;
    }

    public function calcularSalario():float{
        $this->salario=1*$this->precioPorHora;
        return $this->salario;
    }
}
<?php

namespace App;

include __DIR__."./../autoload.php";

class Fisioterapeuta extends Empleado{
    private $clienteVIP;
    private $numColegiado;

    public function __construct(string $nombre,string $apellidos,string $dni,string $direccion,string $cuentaCorriente,string $numSeguridadSocial,Jugador $clienteVIP,int $numColegiado){
        parent::__construct($nombre,$apellidos,$dni, $direccion, $cuentaCorriente, $numSeguridadSocial);
        $this->clienteVIP = $clienteVIP;
        $this->numColegiado = $numColegiado;
    }


    public function getClienteVIP(){
        return $this->clienteVIP;
    }

    public function setClienteVIP($clienteVIP): void{
        $this->clienteVIP = $clienteVIP;
    }


}
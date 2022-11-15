<?php

namespace Controlador\Personas;

use Modelo\Personas\PersonaDAOMySQL;

class PersonaControlador
{
    private personaDAO $modelo;
    private personaVista $vista;

    public function __construct(){
        $this->modelo = new PersonaDAOMySQL();
        //$this->vista = new PersonaVista();
    }


    public function comprobarUsuarioWeb($correoUsuario, $pass): ?bool{
        $persona = $this->modelo->leerPersonaPorCorreoElectronico($correoUsuario);
        password_verify($pass,$persona->getContrasenya());
    }

}
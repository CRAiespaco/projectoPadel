<?php

//  use \App\Personas\Persona;
namespace App;

use \App\Personas\Persona;
use \App\Horarios\Intervalo;
use Modelo\PersonaDAOMySQL;

include "autoload.php";

$personaDAO = new PersonaDAOMySQL();

$personaLeida = $personaDAO->leerPersona('44111222A');

$personaAmodificar = new Persona('44111222A', 'Javier', 'Azpeleta', 'javierraz@gmail.com', '1234', '987456321');

$resutado = $personaDAO->modificarPersona($personaAmodificar);

var_dump($personaLeida);

if ($personaDAO->getConexion()) {
    echo "Se ha conectado correctamente";
} else {
    echo "fallo de conexion";
}
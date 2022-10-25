<?php

//  use \App\Personas\Persona;
namespace APP;

use app\personas\enums\LadoPreferido;
use app\personas\enums\ManoHabil;
use app\personas\Jugador;
use app\autoload;

include "autoload.php";

//include_once("app/Personas/Persona.php");
//include_once("app/Personas/Jugador.php");
//include_once("app/Personas/Enums/LadoPreferido.php");
//include_once("app/Personas/Enums/ManoHabil.php");
//include_once("app/Personas/Enums/ManoHabil.php");

$persona = new \App\Persona('12345678E', 'Javier', 'Gonzalez');
var_dump($persona);
echo "<br></br>";
echo "<br></br>";

$jugador=new \App\Jugador("1651435W","Rocio","Carratala",
    1,ManoHabil::Derecha,LadoPreferido::Indiferente,
    3,1,false,122,2,1,true,1236);

var_dump($jugador);

echo "hola,padel";
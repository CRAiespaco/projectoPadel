<?php

namespace Modelo;

use App\Personas\Persona;

interface InterfazPersonas
{
    public function insertarPersona(Persona $persona):?Persona;
    public function modificarPersona(Persona $persona):?Persona;
    public function borrarPersona(Persona $persona):?Persona;
    public function borrarPersonaporDNI(string $DNI):?Persona;
    public function leerPersona(string $DNI):?Persona;

    public function leerTodaslasPersona():?array;
    public function ObtenerPersonasSinTelefono():?array;
    public function ObtenerPersonasPorNombre(string $nombre):?array;
    public function ObtenerPersonasPorApellidos(string $apellidos):?array;
    public function ObtenerRangoPersonas(int $inicio,int $numeroResultados=NUMERODERESULTADOPORPAGINA):?array;
}
<?php

namespace Modelo;

use App\Personas\Persona;
use \PDO;

abstract class PersonaDAO implements InterfazPersonas
{
    private PDO $conexion;

    public function getConexion(): PDO{
        return $this->conexion;
    }

    public function setConexion(PDO $conexion): PersonaDAO{
        $this->conexion = $conexion;
        return $this;
    }


    public function insertarPersonas(Persona $persona): ?Persona
    {
        // TODO: Implement insertarPersonas() method.
    }

    public function modificarPersona(Persona $persona): ?Persona
    {
        // TODO: Implement modificarPersona() method.
    }

    public function borrarPersona(Persona $persona): ?Persona
    {
        // TODO: Implement borrarPersona() method.
    }

    public function borrarPersonaPorDNI(string $dni): ?Persona
    {
        // TODO: Implement borrarPersonaPorDNI() method.
    }

    public function leerPersona(string $dni): ?Persona
    {
        // TODO: Implement leerPersona() method.
    }

    public function leerTodasLasPersonas(): array
    {
        // TODO: Implement leerTodasLasPersonas() method.
    }

    public function obtenerPersonasSinTelefono(): array
    {
        // TODO: Implement obtenerPersonasSinTelefono() method.
    }

    public function obtenerPersonasPorNombre(string $nombre): array
    {
        // TODO: Implement obtenerPersonasPorNombre() method.
    }

    public function obtenerPersonasPorApellidos(string $apellidos): array
    {
        // TODO: Implement obtenerPersonasPorApellidos() method.
    }

    public function obtenerRangoPersonas(int $inicio, int $final)
    {
        // TODO: Implement obtenerRangoPersonas() method.
    }
}
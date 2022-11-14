<?php

namespace  Modelo;

use App\Personas\Persona;
use \PDO;

abstract class PersonaDAO implements InterfazPersonas{
    private PDO $conexion;

    public function getConexion(): PDO{
        return $this->conexion;
    }

    public function setConexion(PDO $conexion): PersonaDAO {
        $this->conexion = $conexion;
        return $this;
    }



    public function insertarPersona(Persona $persona): ?Persona
    {
        // TODO: Implement insertarPersona() method.
    }

    public function modificarPersona(Persona $persona): ?Persona
    {
        // TODO: Implement modificarPersona() method.
    }

    public function borrarPersona(Persona $persona): ?Persona
    {
        // TODO: Implement borrarPersona() method.
    }

    public function borrarPersonaporDNI(string $DNI): ?Persona
    {
        // TODO: Implement borrarPersonaporDNI() method.
    }

    public function leerPersona(string $DNI): ?Persona
    {
        // TODO: Implement leerPersona() method.
    }

    public function leerTodaslasPersona(): array
    {
        // TODO: Implement leerTodaslasPersona() method.
    }

    public function ObtenerPersonasSinTelefono(): array
    {
        // TODO: Implement ObtenerPersonasSinTelefono() method.
    }

    public function ObtenerPersonasPorNombre(string $nombre): array
    {
        // TODO: Implement ObtenerPersonasPorNombre() method.
    }

    public function ObtenerPersonasPorApellidos(string $apellidos): array
    {
        // TODO: Implement ObtenerPersonasPorApellidos() method.
    }

    public function ObtenerRangoPersonas(int $inicio, int $numeroResultados=NUMERODERESULTADOPORPAGINA): array
    {
        // TODO: Implement ObtenerRangoPersonas() method.
    }


}
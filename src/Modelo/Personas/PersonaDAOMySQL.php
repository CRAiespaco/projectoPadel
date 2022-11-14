<?php

namespace Modelo;
use App\Personas\Persona;
use PDO;

require_once  __DIR__."/../ConecxionBD.php";
require_once  __DIR__."/../datosConfiguracion.php";

class PersonaDAOMySQL extends PersonaDAO
{

    public function  __construct(){
        $this->setConexion(new PDO("mysql:host=".hostBD.";dbname=".nombreBD,usuarioBD,passBD));
        $this->getConexion()->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function leerPersona(string $DNI): ?Persona
    {
        $query="SELECT * FROM persona WHERE DNI=?";
        $sentencia=$this->getConexion()->prepare($query);
        $sentencia->bindParam(1,$DNI);
        $sentencia->execute();
        $fila=$sentencia->fetch();
        return new Persona(
            $fila['DNI'],
            $fila['Nombre'],
            $fila['Apellidos'],
            $fila['CorreoElectronico'],
            $fila['contrasenya'],
            $fila['Telefono']);
    }

    public function modificarPersona(Persona $persona):?Persona{
        $query="UPDATE persona set Nombre=:nombre,Apellidos=:apellidos,
                   Telefono=:telefono,CorreoElectronico=:correo,contrasenya=:pass
                   where DNI=:dni";

        $sentencia=$this->getConexion()->prepare($query);
        $sentencia->bindValue("nombre",$persona->getNombre());
        $sentencia->bindValue("apellidos",$persona->getApellidos());
        $sentencia->bindValue("telefono",$persona->getTelefono());
        $sentencia->bindValue("correo",$persona->getCorreoElectronico());
        $sentencia->bindValue("pass",$persona->getContrasenya());
        $sentencia->bindValue("dni",$persona->getDni());

        $resultado=$sentencia->execute();

        if($resultado){
            return $persona;
        }else{
            return null;
        }

    }

    public function borrarPersonaporDNI(string $DNI): ?Persona
    {
        $persona=$this->leerPersona($DNI);
        $query="DELETE FROM persona WHERE DNI=?";
        $sentencia=$this->getConexion()->prepare($query);
        $sentencia->bindParam(1,$DNI);
        $resultado=$sentencia->execute();

        if($resultado){
            return $persona;
        }else{
            return $resultado;
        }
    }

    public function borrarPersona(Persona $persona):?Persona
    {
        $resultado=$this->borrarPersonaporDNI($persona->getDni());

        return $resultado;
    }



    public function insertarPersona(Persona $persona): ?Persona{
        $query = "INSERT INTO persona(DNI,Nombre,Apellidos,Telefono,CorreoElectronico,contrasenya) 
                VALUES (:dni,:nombre,:apellidos,:telefono,:correo,:pass)";

        $sentencia = $this->getConexion()->prepare($query);
        $sentencia->bindValue("dni", $persona->getDni());
        $sentencia->bindValue("nombre",$persona->getNombre());
        $sentencia->bindValue("apellidos",$persona->getApellidos());
        if($persona->getTelefono()==="") {
            $sentencia->bindValue("telefono", NULL);
        }else{
            $sentencia->bindValue("telefono", $persona->getTelefono());}

        $sentencia->bindValue("correo",$persona->getCorreo());
        $sentencia->bindValue("pass",$persona->getContrasenya());
        $resultado = $sentencia->execute();
        if($resultado)
            return $persona;
        else
            return $resultado;
    }
    public function leerTodasLasPersonas(): array{
        $resultado = $this->getConexion()->query("SELECT * FROM persona");
        $resultado->execute();
        $arrayResultado = $resultado->fetchAll();

        $arrayObjetos = [];
        foreach ($arrayResultado as $filaPersona){
            $arrayObjetos[]=$this->convertirarrayAPersona($filaPersona);
        }
        return $arrayObjetos;
    }
    private function convertirarrayAPersona(array $datosPersona):?Persona{
        return new Persona($datosPersona['DNI'],$datosPersona['Nombre'],$datosPersona['Apellidos'],$datosPersona['CorreoElectronico'],$datosPersona['contrasenya'],$datosPersona['Telefono']);
    }


    public function ObtenerRangoPersonas(int $inicio, int $numeroResultados=NUMERODERESULTADOPORPAGINA):array{
        $resultado = $this->getConexion()->query("SELECT * FROM persona LIMIT $inicio, $numeroResultados");
        $resultado->execute();
        $arrayResultado = $resultado->fetchAll();

        $arrayObjetos = [];
        foreach ($arrayResultado as $filaPersona){
            $arrayObjetos[]=$this->convertirarrayAPersona($filaPersona);
        }
        return $arrayObjetos;
    }

    public function  ObtenerPersonasSinTelefono():array{
        $query="SELECT * FROM persona WHERE Telefono IS NULL";
        $sentencia=$this->getConexion()->prepare($query);
        $resultado=$sentencia->execute();
        $arrayPersonasSinTelefono=false;
        if($resultado){
            foreach ($resultado as $informacion){
                $arrayPersonasSinTelefono[]=$this->convertirarrayAPersona($informacion);
            }
        }
        return $arrayPersonasSinTelefono;
    }

    public function  ObtenerPersonasPorApellidos(string $apellidos):array{
        $query="SELECT * FROM persona WHERE Apellidos=?";
        $sentencia=$this->getConexion()->prepare($query);
        $resultado=$sentencia->execute();
        $arrayPersonasSinTelefono=false;
        if($resultado){
            foreach ($resultado as $informacion){
                $arrayPersonasPorApellidos[]=$this->convertirarrayAPersona($informacion);
            }
        }
        return $arrayPersonasPorApellidos;
    }

    public function  ObtenerPersonasPorNombre(string $nombre):array{
        $query="SELECT * FROM persona WHERE Nombre=?";
        $sentencia=$this->getConexion()->prepare($query);
        $resultado=$sentencia->execute();
        $arrayPersonasSinTelefono=false;
        if($resultado){
            foreach ($resultado as $informacion){
                $arrayPersonasPorNombre[]=$this->convertirarrayAPersona($informacion);
            }
        }
        return $arrayPersonasPorNombre;
    }

}

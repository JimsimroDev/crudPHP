<?php

class Usuarios
{
    private $id;
    private $contrasenia;
    private $nombreUsu;

    public function __construct($id, $contrasenia, $nombreUsu)
    {
        $this->id = $id;
        $this->contrasenia = $contrasenia;
        $this->nombreUsu = $nombreUsu;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->$id;
    }
    public function getContrasenia()
    {
        return $this->contrasenia;
    }
    public function setContrasenia($contrasenia)
    {
        return $this->$contrasenia;
    }
    public function getNombreUsu()
    {
        return $this->nombreUsu;
    }
    public function setnumeroDoc($nombreUsu)
    {
        return $this->$nombreUsu;
    }
}

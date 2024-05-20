<?php

class Indigenas
{
    private $id;
    private $tipoDoc;
    private $numeroDoc;
    private $nombre;
    private $apellido;
    private $fecha_nac;

    public function __construct($id, $tipoDoc, $numeroDoc, $nombre, $apellido, $fecha_nac)
    {
        $this->id = $id;
        $this->tipoDoc = $tipoDoc;
        $this->numeroDoc = $numeroDoc;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nac = $fecha_nac;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->$id;
    }

    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }
    public function setTipoDoc($tipoDoc)
    {
        return $this->$tipoDoc;
    }

    public function getNumeroDoc()
    {
        return $this->numeroDoc;
    }

    public function setNumeroDoc($numeroDoc)
    {
        return $this->$numeroDoc;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        return $this->$nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        return $this->$apellido;
    }
    public function getFecha_nac()
    {
        return $this->fecha_nac;
    }
    public function setFecha_nac($fecha_nac)
    {
        return $this->$fecha_nac;
    }
}

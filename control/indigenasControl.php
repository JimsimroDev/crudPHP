<?php

require_once '../modelo/Indigenas.php';

class IndigenasControl
{
    public function __construct()
    {
        require_once '../conexion/BD.php';
        try {
            $this->cnx = BD::conectar();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    #Traer los datos de la tabla indigenas de la base de datos indigenas_berastegui
    public function buscarTodos(){
        try {
            $sql = "select * from indigenas";
            $conexion = $this->cnx;
            $pre = $conexion->prepare($sql);
            $pre->execute();
            $indigenas = $pre->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $indigenas;
    }
    
    #eliminar registro de la tabla indigenas
    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM indigenas WHERE ID = ?";
            $pre = $this->cnx->prepare($sql);
            $pre->execute([$id]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function agregar($indigenas)
    {
        try {

            $sql = "INSERT INTO indigenas (TIPODOC, NUMERODOC, NOMBRE, APELLIDO, FECHA_NAC ) values (?, ?, ?, ?, ?)";
            $conexion = $this->cnx;
            $pre = $conexion->prepare($sql);
            $pre->execute(array(
                $indigenas->getTipoDoc(),
                $indigenas->getNumeroDoc(),
                $indigenas->getNombre(),
                $indigenas->getApellido(),
                $indigenas->getFecha_nac()
            ));
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function editar($indigenas)
    {
        try {
            $sql = 'UPDATE indigenas SET TIPODOC = ?, NUMERODOC = ?, NOMBRE = ?,
             APELLIDO = ?, FECHA_NAC = ? WHERE id = ?';

            $pre = $this->cnx->prepare($sql);
            $pre->execute([
                $indigenas->getTipoDoc(),
                $indigenas->getNumeroDoc(),
                $indigenas->getNombre(),
                $indigenas->getApellido(),
                $indigenas->getFecha_nac(),
                $indigenas->getId()
            ]);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
            return false;
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = 'SELECT * FROM indigenas WHERE ID = ?';
            $conexion = $this->cnx;
            $pre = $conexion->prepare($sql);
            $pre->execute(array($id));
            $indigenas = $pre->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $indigenas;
    }
}

<?php

require_once '../modelo/usurios.php';

class   UsuariosControl
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

    #Traer los datos de la tabla user de la base de datos indigenas_berastegui
    public function buscarTodos()
    {
        try {
            $sql = "select user.*, rol.NOMBREROL AS NOMBRE_ROL FROM user JOIN rol ON user.fk_rol = rol.ID";
            $conexion = $this->cnx;
            $pre = $conexion->prepare($sql);
            $pre->execute();
            $usuarios = $pre->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $usuarios;
    }
}

<?php
class Bd
{
    public static function conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=indigenas_berastegui;charset=utf8', 'root', 'jiss1203');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

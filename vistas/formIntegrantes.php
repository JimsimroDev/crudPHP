<?php
require_once '../control/indigenasControl.php';
if (isset($_POST['btn_guardar'])) {
    if (isset($_POST['tipoDoc'], $_POST['documento'], $_POST['nombre'], $_POST['apellido'], $_POST['fecha_nac'], $_POST['ID'])) {

        $id = $_POST["ID"];
        $tipoDoc = implode(', ', $_POST['tipoDoc']);
        $documento = $_POST['documento'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nac = $_POST['fecha_nac'];

        // Crear un objeto Indigenas con los datos
        $indigenas = new Indigenas($id, $tipoDoc, $documento, $nombre, $apellido, $fecha_nac);

        $indigenasControl = new IndigenasControl();
        $indigenasControl->editar($indigenas);

        // Redirigir después de guardar
        header('Location: indigenas_mostrar.php');
        exit();
    }
}

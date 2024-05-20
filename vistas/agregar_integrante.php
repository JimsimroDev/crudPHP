<?php
require_once '../control/indigenasControl.php';

$tipoDoc = (isset($_POST['tipoDoc'])) ? implode(', ', $_POST['tipoDoc']) : '';
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nac = $_POST['fecha_nac'];

$indigenas = new Indigenas(null, $tipoDoc, $documento, $nombre, $apellido, $fecha_nac);

$indigenasControl = new IndigenasControl();
$indigenasControl->agregar($indigenas);
header('Location: indigenas_mostrar.php');

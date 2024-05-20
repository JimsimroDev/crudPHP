<?php

$id = $_GET['ID'];

require_once '../control/indigenasControl.php';
$indigenasControl = new IndigenasControl();

$indigenasControl = $indigenasControl->buscarPorId($id);

require_once '../vistas/editar_vista_integrantes.php';

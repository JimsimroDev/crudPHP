<?php

$id = $_GET['id'];

require_once '../control/indigenasControl.php';
$indigenasControl = new IndigenasControl();

$indigenasControl->eliminar($id);

header('Location: indigenas_mostrar.php');
exit();

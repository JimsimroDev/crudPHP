<?php
include '../componentes/head.php';
include '../componentes/bodyprimerapare.php';
require_once '../Control/IndigenasControl.php';
$indigenasControl = new IndigenasControl();
$indigenas = $indigenasControl->buscarTodos();
?>

<div class="container py-5 ">
    <div class="card mb-4 bg-transparent">

        <div class="card-header">
            <center>
                <h3> Tabla Integrantes Indigenas </h3>
            </center>
        </div>
        <div class="card-header">
            <table id="datatablesSimple">
                <tr>
                    <th>Id</th>
                    <th>Tipo De Documento</th>
                    <th>Numero De Documento</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha De Nacimiento</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>

                <?php foreach ($indigenas as $indi) : ?>
                    <tr>
                        <td class="btn-sm btn-info"><a href="consultar_indigenas.php?id=<?= $indi->id ?>"><?= $indi->id ?></a></td>
                        <td><?= $indi->TIPODOC ?></td>
                        <td><?= $indi->NUMERODOC ?></td>
                        <td><?= $indi->NOMBRE ?></td>
                        <td><?= $indi->APELLIDO ?></td>
                        <td><?= $indi->FECHA_NAC ?></td>
                        <td class="text-center">
                            <a onclick="return confirm('Está seguro de eliminar este integrante ?')" class="btn btn-danger btn-sm" href="eliminar_integrante.php?id=<?= $indi->ID ?>">eliminar</a>
                            <a class="btn btn-warning btn-sm" href="editar_vista_integrantes.php?ID=<?= $indi->ID ?>">modificar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php
include '../componentes/body_final.php';
?>
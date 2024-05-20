<?php
include '../componentes/head.php';
include '../componentes/bodyprimerapare.php';
require_once '../control/usuariosControl.php';
$usuariosControl = new UsuariosControl();
$usuarios = $usuariosControl->buscarTodos();
?>

<main>
    <div class="container py-5 ">
        <div class="card mb-4 bg-transparent">

            <div class="card-header">
                <center>
                    <h3> Tabla Usuarios</h3>
                </center>
            </div>
            <div class="card-header">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre De Usuario</th>
                            <th>Rol</th>
                            <th colspan="2" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre De Usuario</th>
                            <th>Rol</th>
                            <th colspan="2" class="text-center">Acciones</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php foreach ($usuarios as $usu) : ?>
                            <tr>

                                <td class="btn-sm btn-info"> <?= $usu->ID ?></a></td>
                                <td><?= $usu->NOMBREUSU ?></td>
                                <td><?= $usu->NOMBRE_ROL ?></td>

                                <td class="text-center">
                                    <a onclick="return confirm('Está seguro de eliminar este Usario?..')" class="btn btn-danger btn-sm" href="pelicula_eliminar.php?id=<?= $usu->id ?>">eliminar</a>
                                    <a class="btn btn-warning btn-sm" href="pelicula_actualizar.php?id=<?= $usu->id ?>">modificar</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</main>

<?php
include '../componentes/body_final.php';
?>
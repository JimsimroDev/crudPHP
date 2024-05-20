<?php
include '../componentes/head.php';
include '../componentes/bodyprimerapare.php';
require_once '../Control/IndigenasControl.php';
require_once './formIntegrantes.php';
// Obtén el ID desde la URL
$ID = isset($_GET['ID']) ? $_GET['ID'] : null;
$indigenasControl = new IndigenasControl();
$indigenas = $indigenasControl->buscarTodos();
?>

<div class="card-header">
    <h3 class="text-center font-weight-light my-4">Editar integrantes</h3>
</div>

<div class="card-body ">
    <?php foreach ($indigenas as $indi) : ?>
        <?php if ($indi->ID == $ID) : ?>
            <form method="post" action="indigenas_mostrar.php">
                <div class="row mb-3">
                    <div class="col-md-6 mx-auto">

                        <select class="form-select bg-transparent" name="tipoDoc[]" id="tipoDoc" aria-label="Tipo de Documento">
                            <option value="" selected disabled>Selecciona un tipo de documento</option>
                            <option value="Cedula De Ciudadania" <?= ($indi->TIPODOC === 'Cedula De Ciudadania') ? 'selected' : '' ?>>Cedula De Ciudadania</option>
                            <option value="Tarjeta De Identidad" <?= ($indi->TIPODOC === 'Tarjeta De Identidad') ? 'selected' : '' ?>>Tarjeta De Identidad</option>
                            <option value="Registro Civil" <?= ($indi->TIPODOC === 'Registro Civil') ? 'selected' : '' ?>>Registro Civil</option>
                        </select>
                    <?php endif; ?>
                <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class=" form-floating">
                        <input value="<?= $indi->NUMERODOC ?>" class="form-control bg-transparent" id="documento" name="documento" type="text" placeholder="Enter your first name" />
                        <label for="inputLastName">Numero De Documento</label>
                    </div>
                </div>
                <br>
                <div class="col-md-6 mx-auto">
                    <div class=" form-floating mb-3 mb-md-0">
                        <input value="<?= $indi->NOMBRE ?>" class="form-control bg-transparent" id="apellido" name="nombre" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Nombre</label>
                    </div>
                </div>
                <br>
                <div class="col-md-6 mx-auto">
                    <div class=" form-floating mb-3 mb-md-0">
                        <input value="<?= $indi->APELLIDO ?>" class="form-control bg-transparent" id="apellido" name="apellido" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Apellido</label>
                    </div>
                </div>
                <br>
                <div class="col-md-6 mx-auto">
                    <div class=" form-floating mb-3 mb-md-0">
                        <input value="<?= $indi->FECHA_NAC ?>" class="form-control bg-transparent" id="fecha_nac" name="fecha_nac" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Fecha De Nacimiento</label>
                    </div>

                </div>


</div>

<center>
    <div class="col-md-6 mx-auto">
        <div class=" form-group">
            <input type="submit" value="Guardar" name="btn_guardar" class="btn btn-info">
        </div>
        <br>
    </div>
</center>
</form>

<?php
include '../componentes/body_final.php';
?>
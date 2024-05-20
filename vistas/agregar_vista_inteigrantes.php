<?php
include '../componentes/head.php';
include '../componentes/bodyprimerapare.php';
require_once '../control/indigenasControl.php';
$indigenasControl = new IndigenasControl();
?>

<div class="card-header">
    <h3 class="text-center font-weight-light my-4">Agregar integrantes</h3>
</div>
<div class="card-body ">
    <form method="post" action="agregar_integrante.php">
        <div class="row mb-3">
            <div class="col-md-6 mx-auto"">
                    <select class=" form-select bg-transparent" name="tipoDoc[]" id="tipoDoc" aria-label="Tipo de Documento">
                <option value="" selected disabled>Selecciona un tipo de documento</option>
                <option value="Cedula De Ciudadania" <?= (isset($_POST['tipoDoc']) && in_array('cedula', $_POST['tipoDoc'])) ? 'selected' : '' ?>>Cedula De Ciudadania</option>
                <option value="Terjeta De Identidad" <?= (isset($_POST['tipoDoc']) && in_array('tarjeIdentidad', $_POST['tipoDoc'])) ? 'selected' : '' ?>>Tarjeta De Identidad</option>
                <option value="Registro Civil" <?= (isset($_POST['tipoDoc']) && in_array('registroCivil', $_POST['tipoDoc'])) ? 'selected' : '' ?>>Registro Civil</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class=" form-floating">
                <input class="form-control bg-transparent" id="documento" name="documento" type="text" placeholder="Enter your first name" value="<?= (isset($documento) && !$frm_enviado) ? $documento : '' ?>" />
                <label for="inputLastName">Numero De Documento</label>
            </div>
        </div>
        <br>
        <div class="col-md-6 mx-auto">
            <div class=" form-floating mb-3 mb-md-0">
                <input class="form-control bg-transparent" id="apellido" name="nombre" type="text" placeholder="Enter your first name" />
                <label for="inputFirstName">Nombre</label>
            </div>
        </div>
        <br>
        <div class="col-md-6 mx-auto">
            <div class=" form-floating mb-3 mb-md-0">
                <input class="form-control bg-transparent" id="apellido" name="apellido" type="text" placeholder="Enter your first name" />
                <label for="inputFirstName">Apellido</label>
            </div>
        </div>
        <br>
        <div class="col-md-6 mx-auto">
            <div class=" form-floating mb-3 mb-md-0">
                <input class="form-control bg-transparent" id="fecha_nac" name="fecha_nac" type="text" placeholder="Enter your first name" />
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
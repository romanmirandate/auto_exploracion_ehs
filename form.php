<?php

?>

<!doctype html>
<html lang="en">
    <head>
        <?php require_once 'includes/head.php';?>
    </head>
    <body>
        <!-- Header Banner -->
        <?php require_once 'includes/header.php';?>
        <div class="container-fluid">
            <div class="row">
                <!-- Header Banner -->
                <?php require_once 'includes/sidebar.php';?>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h1 style="margin-top: 10px">Agregar / Editar Registro</h1>
                    <p>Los campos marcados con (*) son obligatorios</p>
                    <form method="post">
                        <div class="form-group">
                            <label for="Id">ID</label>
                            <input class="form-control" type="text" name="Id" id="Id" value="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="NoEmpleado">No Empleado</label>
                            <input class="form-control" type="text" name="NoEmpleado" id="NoEmpleado" maxlength="6" placeholder="123456" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="FechaExp">Fecha de Exploracion</label>
                            <input class="form-control" type="text" name="FechaExp" id="FechaExp" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="Notas">Notas</label>
                            <input class="form-control" type="text" name="Notas" id="Notas" maxlength="300" value="">
                        </div>

                        <input class="btn btn-primary mb-2" type="button" name="btn_save" value="Save">

                    </form>

                </main>

            </div>
        </div>        
        <!-- Footer scripts and functions -->
        <?php require_once 'includes/header.php';?>
    </body>
<?php

require_once 'Clientes.php';
require_once 'Conexion.php';
require_once 'boostrap.php';

if (!empty($_POST)) {
    $datos = [];
    $datos[] = $_POST['nombre_completo'] ?? '';
    $datos[] = $_POST['email'] ?? '';
    $cl = new Cliente();
    $cl::llenar($datos);

}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Formulario para Crear Clientes</title>
        <style>
            input:not([type="submit", type="file"]) {
                border: 0;
                border-bottom: 1px solid #000;
            }

            input {
                padding: 5px;
                font-size: 16px
            }

            select {
                margin-top: 20px;
                padding: 5px;
                font-size: 16px;
            }

            input:focus {
                border: 0;
            }


            body {
                margin: 0;
                padding: 0;
            }

            #contenedor {
                margin-top: 10px;
            }

            #titulo {
                font-size: 32px;
                text-align: center;
                font-weight: 500;
            }

            #opciones li {
                margin: 0 20px;
            }

            #opciones li a {
                text-decoration: none;
                color: #000;
            }

            #opciones li a:hover {
                border-bottom: 1px solid rgba(133, 57, 49, 0.97);
            }
        </style>
    </head>
<body>
<div id="contenedor">
    <h3 id="titulo">Bienvenidos al sistema de Creacion de clientes</h3>
    <hr>
    <br>
</div>
<hr>
<div class="d-flex justify-content-center">


    <form action="Clientes.php" method="POST" enctype="multipart/form-data" class="w-50">
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input class="form-control" type="text" maxlength="100" name="nombre_completo" id="nombre_completo">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" maxlength="20" name="email" id="email">
        </div>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>

<!--<body>-->
<!--<div id="contenedor">-->
<!--    <h3 id="titulo">Bienvenidos al sistema de Creacion de clientes</h3>-->
<!--    <hr>-->
<!--    <br>-->
<!--</div>-->
<!--<hr>-->
<!--<div class="d-flex justify-content-center">-->
<!---->
<!---->
<!--    <form action="Clientes.php" method="POST" enctype="multipart/form-data" class="w-50">-->
<!--        <div class="form-group">-->
<!--            <label for="nombre_completo">Nombre Completo</label>-->
<!--            <input class="form-control" type="text" maxlength="100" name="nombre_completo" id="nombre_completo">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="email">Email</label>-->
<!--            <input class="form-control" type="text" maxlength="20" name="email" id="email">-->
<!--        </div>-->
<!--        <input type="submit" value="Enviar">-->
<!--    </form>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
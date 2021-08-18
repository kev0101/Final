<?php
session_start();
include("../dtemp.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8 /">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>BOLSA EMPLEO</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/formstyle.css" />

</head>

<body>
    <!--Inicio de Registro-->
    <section class="form-register">

        <h4>Formulario de Empresa</h4>

        <!-- Mostrar Errores -->

        <form action="./updemp.php" method="POST">
        <input class="controls" type="text" name="nombre" id="telefono" value="<?php echo $nom ?>" />
        <input class="controls" type="text" name="direccion" id="telefono" value="<?php echo $direc ?>" />
        <input class="controls" type="text" name="telefono" id="telefono" value="<?php echo $tel ?>" />
        <input class="controls" type="text" name="email" id="telefono" value="<?php echo $email ?>" />
            


            <input class="botons" type="submit" value="Actualizar Datos" />
            

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>
        <?php

        
        ?>
        
    </section>

</body>

</html>
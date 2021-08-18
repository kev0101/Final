<?php
session_start();
include("../dteof.php");
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

        <h4>Datos Personales</h4>




        <form action="./upofdp.php" method="POST">

        <input class="controls" type="text" name="nombre" id="ide" value="<?php echo $nom ?>" />
            <input class="controls" type="text" name="identificacion" id="ide" value="<?php echo $ide ?>" />
            
            <input class="controls" type="text" name="tel" id="tel" value="<?php echo $tel ?>" />
            <input class="controls" type="text" name="correo" id="correo" value="<?php echo $email ?>" />

            <select class="controls" name="estcivil" cambia()">
                <option value="<?php echo $civ ?>"><?php echo $civ ?>
                <option value="soltero">Soltero
                <option value="casado">Casado
                <option value="divorciado">Divorciado
                <option value="sepparacion">Separación en proceso judicial
                <option value="viudo">Viudo
                <option value="concubinato">Concubinato

            </select>

            <select class="controls" name="nacionalidad" cambia()">
                <option value="<?php echo $idenac ?>"><?php echo $idenac ?>
                <option value="Costa_Rica ">Costa Rica
                <option value="Nicaragua">Nicaragua
                <option value="Mexico">Mexico
                <option value="Guatemala">Guatemala
                <option value="El_Salvador">El Salvador
                <option value="Honduras">Honduras
                <option value="Panama">Panáma
            </select>


            <input class="controls" type="text" name="direccion" id="tel" value="<?php echo $direc ?>" />

      
            <!--   CALENDARIO -->
            <h3>Fecha de nacimiento</h3>

            <input class="controls" type="date" name="fecha" id="fec" value="<?php echo $fecha ?>" />
            
            <input class="botons" type="submit" value="Siguiente ->" />

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>


    </section>
</body>

</html>
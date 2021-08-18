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

        <h4>Expereincia Laboral</h4>


        <form action="./upofexp.php" method="POST">

            <input class="controls" type="text" name="ult" id="ult" value="<?php echo $ult ?>"/>
            
            <input class="controls" type="text" name="car" id="car" value="<?php echo $car ?>" />
            
            <input class="controls" type="text" name="tel_emp" id="tel_emp" value="<?php echo $telemp ?>" />
            
            <input class="controls" type="text" name="mot" id="mot" value="<?php echo $motivo ?>" />
            
            <select class="controls" name="an" cambia()">
                <option value="<?php echo $anno ?>"><?php echo $anno ?>
                <option value="1"> 1 año
                <option value="2"> 2 años
                <option value="3"> 3 años
                <option value="4"> 4 años
                <option value="5"> 5 años
                <option value="6"> 6 años
                <option value="7"> 7 años
                <option value="8"> 8 años
                <option value="9"> 9 años
                <option value="10"> 10 años 
                <option value="15"> 15 años 
                <option value="20"> 20 años
                <option value="mas"> Más de 20 años
            </select>
         
            
				<fieldset class="controls">
					<legend>Disponibilidad inmediata</legend>
					<label>
						<input class="dispo" type="radio" name="dis" value="si" checked> Si
					</label>
					<label>
						<input  class="dispo" type="radio" name="dis" value="no"> No				
					</label>					
				</fieldset>
                <br/>


            <input class="botons" type="submit" value="Siguiente ->" />

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>
        
        
    </section>

</body>

</html>
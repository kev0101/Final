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

        <h4>Formación Academica</h4>

       

        <form action="./upoffor.php" method="POST"> 
            
        
        <input class="controls" type="text" name="ins" id="ins" value="<?php echo $inst ?>"/>
           
            <select class="controls" name="pri" cambia()">
                <option value="<?php echo $primaria ?>"> <?php echo $primaria ?>
                <option value="Incompleta"> Incompleta
                <option value="Cursando"> Cursando
                <option value="Completa"> Completa                
            </select> 
            
            
            <input class="controls" type="text" name="col" id="col" value="<?php echo $cole ?>"/>
            
            <select class="controls" name="sec" cambia()">
                <option value="<?php echo $secundaria ?>"> <?php echo $secundaria ?>
                <option value="Incompleta"> Incompleta
                <option value="Cursando"> Cursando
                <option value="Completa"> Completa                
            </select> 

          
            
            <input class="controls" type="text" name="carr" id="carr" value="<?php echo $carrera ?>"/>
            
            <select class="controls" name="gra" cambia()">
                <option value="<?php echo $grado ?>"> <?php echo $grado ?>
                <option value="Tecnico"> Técnico
                <option value="Diplomado"> Diplomado
                <option value="Bachiller"> Bachiller
                <option value="Licenciatura"> Licenciatura
                <option value="Maestria"> Maestria 
                <option value="Otra"> Otra                
            </select> 

            <select class="controls" name="uni" cambia()">
                <option value="<?php echo $universidad ?>"> <?php echo $universidad ?>
                <option value="Incompleta"> Incompleta
                <option value="Cursando"> Cursando
                <option value="Completa"> Completa                
            </select> 

            
            <input class="controls" type="text" name="otr" id="otr" value="<?php echo $otro ?>"/>
            

            <input class="botons" type="submit" value="Finalizar Formulario ->" />

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>
       
        
    </section>

</body>

</html>
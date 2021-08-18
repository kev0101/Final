<?php
include_once("includes/modelsIND/conn.php");
include_once("includes/modelsIND/conn2.php");
include("includes/modelsIND/visitas.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Indicadores</title>
    <link rel="stylesheet" href="../assets/css/indicadores.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <div class="Pos">
        <div class="contenedor">
            <div class="item">
                <span style="font-size: 1.0cm;  padding: 10px; margin: 10px; color: steelblue; " class="fas fa-user"></span>
                <span style="font-size: 0.7cm;   margin: 10px;  " class="cantidad" id="cont1" ></span>
                <span style="font-size: 0.7cm; padding-left: 10px; margin: 10px;  color: steelblue;" class="seguidores">Usuarios</span>
            </div>
        </div>
        <div class="contenedor2">
            <div class="item">
                <span style="font-size: 1.0cm;  padding: 10px; margin: 10px; color: steelblue;"  class="fas fa-eye"></span>
                <span style="font-size: 0.7cm;   margin: 10px; " class="cantidad"  id="cont2"></span>
                <span style="font-size: 0.7cm; padding-left: 10px; margin: 10px;  color: steelblue;" class="seguidores">Visitas</span>
            </div>
        </div>
        <div class="contenedor3">
            <div class="item">
                <span style="font-size: 1.0cm;  padding: 10px; margin: 10px; color: steelblue;"   class="fas fa-briefcase"></span>
                <span style="font-size: 0.7cm;   margin: 10px;  " class="cantidad" id="cont3"></span>
                <span style="font-size: 0.7cm; padding-left: 10px; margin: 10px;  color: steelblue;"  class="cantidad" class="seguidores">Ofertas</span>
            </div>
        </div>
    </div>
    <script>
        let cont1 = document.getElementById('cont1');
        let cont2 = document.getElementById('cont2');
        let cont3 = document.getElementById('cont3');
        let cant1 = 0,
            cant2 = 0,
            cant3 = 0;

        let tiempo1 = setInterval(() => {
            cont1.textContent = cant1 += 1;

            if (cant1 === <?php echo $CU ?>) {
                clearInterval(tiempo1);
            }

        }, 200)

        let tiempo2 = setInterval(() => {
            cont2.textContent = cant2 += 1;

            if (cant2 === <?php echo contadorvisitas() ?>) {
                clearInterval(tiempo2);
            }

        }, 200)

        let tiempo3 = setInterval(() => {
            cont3.textContent = cant3 += 1;

            if (cant3 === <?php echo $EM ?>) {
                clearInterval(tiempo3);
            }

        }, 200)
    </script>
</body>

</html>
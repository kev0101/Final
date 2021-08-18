<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<link rel="icon" type="favicon/x-icon" href="assets/css/img/supertux.png" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />


</head>

<body>
	<!-- CABECERA -->


		<!-- MENU -->
		<nav id="menu2">
			<ul>
				<?php
				$categorias = conseguirCategorias($db);
				if (!empty($categorias)) :
					while ($categoria = mysqli_fetch_assoc($categorias)) :
				?>
						<li><a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a> </li>
				<?php
					endwhile;
				endif;
				?>
			</ul>
		</nav>


	<div class="clearfix"></div>

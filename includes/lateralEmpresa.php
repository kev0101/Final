<!-- BARRA LATERAL -->
<div class="clearfix"></div>
<aside id="sidebar">

	
	<div id="buscador" class="bloque">
		<h3>Buscar</h3>

		<form action="buscar.php" method="POST">
			<input type="text" name="busqueda" />
			<input class="boton_buscar" type="submit" value="Buscar" />
		</form>
	</div>

	<?php if (isset($_SESSION['usuario'])) : ?>
		<div id="usuario-logueado" class="bloque">
			<h3>Bienvenido, <?= $_SESSION['usuario']['nombre']; ?></h3>
			<!--botones-->
			<a href="crear-entradas.php" class="boton color_boton">Crear Oferta</a>
			<a href="mis-datos-Emp.php" class="boton color_boton">Mis datos</a>
			<a href="indexEmpresa.php" class="boton color_boton">Atras</a>
			<a href="cerrar.php" class="boton color_boton">Cerrar sesión</a>
		</div>
	<?php endif; ?>

	<?php if (!isset($_SESSION['usuario'])) : ?>
		<div id="Login" class="bloque">
			<h3>Identificate</h3>

			<?php if (isset($_SESSION['error_login'])) : ?>
				<div class="alerta alerta-error">
					<?= $_SESSION['error_login']; ?>
				</div>
			<?php endif; ?>

			<form action="login.php" method="POST">
				<label for="email">Email</label>
				<input type="email" name="email" />

				<label for="password">Contraseña</label>
				<input type="password" name="password" />

				<input class="boton_entrar" type="submit" value="Entrar" />
			</form>
		</div>

		<div id="register" class="bloque">
			<h3>Resgistrate</h3>

			<!-- Mostrar errores -->
			<?php if (isset($_SESSION['completado'])) : ?>
				<div class="alerta alerta-exito">
					<?= $_SESSION['completado'] ?>
				</div>
			<?php elseif (isset($_SESSION['errores']['general'])) : ?>
				<div class="alerta alerta-error">
					<?= $_SESSION['errores']['general'] ?>
				</div>
			<?php endif; ?>

			<form action="registro.php" method="POST">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

				<label for="email">Email</label>
				<input type="email" name="email" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

				<label for="password">Contraseña</label>
				<input type="password" name="password" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
				<fieldset>
					<legend>Elige tu rol</legend>
					<label>
						<input type="radio" name="rol_id" value="2"> Empresa
					</label>
					<label>
						<input type="radio" name="rol_id" value="3"> Oferente
					</label>
				</fieldset>
				<input class="boton_reg" type="submit" name="submit" value="Registrar" />
			</form>
		</div>

		<div id="social" class="bloque">
			<h3>REDES SOCIALES</h3>
			<div class="twitter">
				<a href="#" class="icon">t</a>
				<p class="overlay">
					Twitter
				</p>
			</div>
			<div class="facebook">
				<a href="#" class="icon">f</a>
				<p class="overlay">
					Facebook
				</p>
			</div>
			<div class="instagram">
				<a href="#" class="icon">l</a>
				<p class="overlay">
					Instagram
				</p>
			</div>
			<div class="whatsapp">
				<a href="#" class="icon">d</a>
				<p class="overlay">
					Whatsapp
				</p>
			</div>
			<div class="youtube">
				<a href="video.php" class="icon">y</a>
				<p class="overlay">
					YouTube
				</p>
			</div>
		</div>


		<!--Fin de la Barra Lateral-->
	<?php endif; ?>
</aside>
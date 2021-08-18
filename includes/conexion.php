<?php
// Conexión
$servidor = "bunsgm0899pcpprwck1n-mysql.services.clever-cloud.com";
$usuario = "ubgecafqqgs0cmyn";
$password = "wQAP6xRtiZSDW8yp9KyL";
$basededatos = "bunsgm0899pcpprwck1n";
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}
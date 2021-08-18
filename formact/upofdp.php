<?php

$nombre = $_POST['nombre'];
$iden = $_POST['identificacion'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];
$estcivil = $_POST['estcivil'];
$nacionalidad = $_POST['nacionalidad'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];

$servername = "bunsgm0899pcpprwck1n-mysql.services.clever-cloud.com";
$username = "ubgecafqqgs0cmyn";
$password = "wQAP6xRtiZSDW8yp9KyL";
$dbname = "bunsgm0899pcpprwck1n";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$sql = "UPDATE usuarios, datos_personales SET usuarios.nombre = '$nombre', usuarios.email = '$correo', datos_personales.nom_ofe_dp = '$nombre', datos_personales.ide = '$iden', datos_personales.tel = '$tel',datos_personales.civ = '$estcivil', datos_personales.nac = '$nacionalidad', datos_personales.dir = '$direccion', datos_personales.fec = '$fecha' where usuarios.nombre = '".$_SESSION['usuario']['nombre']."' AND datos_personales.nom_ofe_dp = '".$_SESSION['usuario']['nombre']."' ";

if ($conn->query($sql) === TRUE) {
  header("Location: ./fofexp.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
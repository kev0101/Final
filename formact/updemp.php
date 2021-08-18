<?php

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];

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
$sql = "UPDATE usuarios,empresa SET nombre = '$nombre', email = '$correo', nom_emp = '$nombre', direccion = '$direccion', telefono = '$telefono' where nombre = '".$_SESSION['usuario']['nombre']."' and nom_emp = '".$_SESSION['usuario']['nombre']."' ";

if ($conn->query($sql) === TRUE) {

  header("Location: ../mis-datos-Emp.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
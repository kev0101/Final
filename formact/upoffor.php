<?php

$inst = $_POST['ins'];
$primaria = $_POST['pri'];
$colegio = $_POST['col'];
$secundaria = $_POST['sec'];
$carrera = $_POST['carr'];
$grado = $_POST['gra'];
$universidad = $_POST['uni'];
$otro = $_POST['otr'];

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
$sql = "UPDATE `formacion` SET `ins`='$inst',`pri`='$primaria',`col`='$colegio',`sec`='$secundaria',`carr`='$carrera',`gra`='$grado',`uni`='$universidad',`otr`='$otro' WHERE nom_ofe_for = '".$_SESSION['usuario']['nombre']."'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../mis-datos-Ofe.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<?php

$ultim = $_POST['ult'];
$cargo = $_POST['car'];
$telef_em = $_POST['tel_emp'];
$motivo = $_POST['mot'];
$anno = $_POST['an'];
$disponibilidad = $_POST['dis'];


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
$sql = "UPDATE `experiencia` SET `ult`='$ultim',`car`='$cargo',`tel_emp`='$telef_em',`mot`='$motivo',`an`='$anno',`dis`='$disponibilidad' WHERE nom_ofe_exp = '".$_SESSION['usuario']['nombre']."'";

if ($conn->query($sql) === TRUE) {
  header("Location: ./foffor.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
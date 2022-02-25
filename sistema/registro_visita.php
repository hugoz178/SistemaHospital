<?php
include 'conexion.php';

$empresa=$_POST['empresa'];
$autorizar=$_POST['autorizar'];
$motivo=$_POST['motivo'];
$equipo=$_POST['equipo'];

$insertar= "INSERT INTO registro (id_consecutivo,empresa,autorizar,motivo,equipo)
VALUES (' ','$empresa','$autorizar','$motivo','$equipo');";

$resultado= mysqli_query($conex,$insertar);

if ($resultado) {
	header("location: cuadro.php");
}
else{
	echo "Error<br>";
}

?>
<a href="datos_persona.php">Regresa</a>
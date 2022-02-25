<?php
include 'conexion.php';

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$numero=$_POST['numero'];
$pervis=$_POST['pervis'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
//$foto = fopen($cargarfoto, 'rb');
$departamento=$_POST['departamento'];
$fechaent=$_POST['fechaent'];
$horaent=$_POST['horaent'];

//$consecutivo = ($consecutivo++);

$insert="INSERT INTO persona (id_consecutivo,nombre,tipo,numero,pervis,departamento,fechaent,horaent,foto)
VALUES (' ','$nombre','$tipo','$numero','$pervis','$departamento','$fechaent','$horaent','$foto');";


$resultado= mysqli_query($conex,$insert);

if ($resultado) {
	header("location:datos_visita.php");
}
else{
	echo "Error<br>";
}

?>
<a href="datos_persona.php">Regresa</a>
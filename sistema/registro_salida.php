<?php
include 'conexion.php';
$horasal = $_POST['horasal'];
$fechasal = $_POST ['fechasal'];
$id_consecutivo = $_POST['id_consecutivo'];

$inserta = "INSERT INTO salida (id_consecutivo,fechasal,horasal)
values ('$id_consecutivo','$fechasal','$horasal');";

$resultado= mysqli_query($conex,$inserta);

if ($resultado) {
	header("location:cuadro.php");
}
else{
	header("location:datos_persona.php");
}

?>
?>
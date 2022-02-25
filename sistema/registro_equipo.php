<?php
include 'conexion.php';

$id = $_POST['valor'];
$equipo = $_POST['equipo'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$serie = $_POST['serie'];

$insert = "INSERT INTO tabla_equipo (id_equipo,equipo,marca,modelo,serie)
VALUES ('$id','$equipo','$marca','$modelo','$serie');";

?>
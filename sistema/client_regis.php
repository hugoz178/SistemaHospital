<?php 
include 'boot.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<p>Nombre del quien ingreso</p>
	<input type="text" name="nombre">

	<p>Fecha cuando ingresó</p>
	<input type="date" name="fecha_ent" min="2019-01-01" max="2019-12-31" step="2">
	<p>Hora de ingreso</p>
	<input type="time" name="hora_ent">
	<br>
	<p>Persona a visitar</p>
	<input type="text" name="per_vis">
	<p>Departamento</p>
	<select>
		<option disabled selected>-Seleccione el departamento-</option>
		<option>Tococirugia</option>
		<option>Bio-Medica</option>
		<option>Pediatria</option>
		<option>Urgencias</option>
		<option>Terapia Intensiva</option>
	</select>
	<p>Fecha de salida</p>
	<input type="date" name="fecha_sal" min="2019-01-01" max="2019-12-31" step="2">
	<p>Hora de salida</p>
	<input type="time" name="hora_sal">
	<p>Equipo</p>
	<input type="text" name="equipo">
	<br><br>
	<button>Enviar</button>

</body>
</html>
<?php
include 'conexion.php';
$consultar="SELECT * FROM persona";
$resultado=mysqli_query($conex,$consultar);
?>
<select>
	<?php
    while ($row = $resultado-> fetch_assoc()) {
	?>
	<option value="<?php echo $row['id_consecutivo']; ?>"><?php echo $row['id_consecutivo']. "-" .$row['nombre']; ?></option>
	<?php
	} 
	 ?>				
</select>
 
<p>Equipo a ingresar</p>
<input type="text" name="equipo">
<p>Marca</p>
<input type="text" name="marca">
<p>Modelo</p>
<input type="text" name="modelo">
<p>Serie</p>
<input type="text" name="serie">
<br>
<button>Registrar Equipo</button>

<select name="valor">
	<?php
    while ($row = $resultado-> fetch_assoc()) {
	?>
	<option value="<?php echo $row['id_consecutivo']; ?>"><?php echo $row['id_consecutivo']. "-" .$row['nombre']; ?></option>
	<?php
	} 
	 ?>	
</select><br>
<button name="ver">Ver</button><br><br>
	<table>
		<tr>
			<th>Equipo</th>
			<th>Modelo</th>
			<th>Marca</th>
		</tr>

			<?php
			include 'conexion.php';
			if (isset($_POST['ver'])) {
				
				$res=mysqli_query($conex, "SELECT * FROM persona ");
				while($consulta=mysqli_fetch_array($res)) {
					?>
					<tr>
					<td><?php echo $consulta['id_consecutivo'];?></td>
					<td><?php echo $consulta['nombre'];?></td>
					<td><?php echo $consulta['pervis'];?></td>
					<td><?php echo $consulta['departamento'];?></td>
					<td><?php echo $consulta['fechaent'];?></td>
					<td><?php echo $consulta['horaent'];?></td>
					</tr>
			<?php		
				}		
			}
						?>	
	</table>					
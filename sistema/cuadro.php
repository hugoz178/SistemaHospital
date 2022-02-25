<?php
include 'boot.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cuadro</title>
	  <style type="text/css">
    body {
      background: url(img/salud3.jpg);
      background-size: 100%;
    }
  </style>
</head>
<body>
<div class="container">	
<nav class="navbar navbar-expand-sm bg-light navbar-light">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.php">HOSVISIT</a>
</li>    
<li class="nav-item">
<a class="nav-link" href="datos_persona.php">Datos del visitador</a>
</li>
<li class="nav-item">
<a class="nav-link" href="datos_visita.php">Datos de la visita</a>
</li>
<li class="nav-item">
	<a href="datos_salida.php" class="nav-link">Salida</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="cuadro.php">Ver Visitas</a>
</li>
</ul>
</nav>
</div>
	<div class="col-sm-1"></div>

	<div class="col-sm-10">
	<div class="card">	
	<form action="cuadro.php" method="POST" name="form" id="form" >
	<p class="display-4">Buscar</p>
	<!--input type="text" name="id_consecutivo" id="id_consecutivo" required class="form-control"-->
	<br>
	<input type="submit" name="btn" placeholder="Buscar" class="btn btn-success form-control" value="Buscar">
	<center>
		<p class="display-2">Datos de la Visita</p>
	<div class="container">	
	<table class="table-hover table-success col-sm-8">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Persona a visitar</th>
			<th>Departamento</th>
			<th>Fecha de Entrada</th>
			<th>Hora de Entrada</th>
		</tr>
		
			<?php
			include 'conexion.php';
			if (isset($_POST['btn'])) {
				
				$res=mysqli_query($conex, "SELECT id_consecutivo,nombre,tipo,pervis,departamento,fechaent,horaent FROM persona ");
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
	<table class="table-hover table-success col-sm-3">
		<tr>
			<th>Id</th>
			<th>Fecha de Salida</th>
			<th>Hora de Salida</th>
		</tr>				
<?php
			include 'conexion.php';
			if (isset($_POST['btn'])) {
				
				$res3=mysqli_query($conex, "SELECT * FROM salida ");
				while($consulta=mysqli_fetch_array($res3)) {
					?>
					<tr>
					<td><?php echo $consulta['id_consecutivo']; ?></td>	
					<td><?php echo $consulta['fechasal'];?></td>
					<td><?php echo $consulta['horasal'];?></td>
					</tr>
			<?php		
				}		
			}
						?>												
	</table>
	</div>
	</center>
	<br><br><br><br><br>	
	</form>
	<!--form action="pdf.php" method="POST" id="pdf">
	<p class="display-4">Buscar datos completos</p>
	<input type="text" name="consecutivo" id="consecutivo" class="form-control">
	<button class="btn btn-primary" >Consulta datos</button>
	</form>
	<form action="pdfg.php" method="POST" id="pdfj" >
		<p class="display-4">Genera Gaffette</p>
		<input type="text" name="id_consecutivo" id="id_consecutivo" class="form-control">
		<button class="btn btn-primary" name="btn" id="btn">Generar Gafette</button>
		
	</form-->
	</div>
	<!--form action="pdf.php" method="POST" name="pdf" id="pdf">
	<input type="submit" name="pf" placeholder="PDF" class="btn btn-success form-control"-->
	</div>
	<div class="col-sm-1">

	</div>

</body>
</html>
